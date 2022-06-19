/**
 * Добавление Яндекс-карты на страницу доставки для показа точек самовывоза.
 * jQuery ($) должен быть загружен до использования nc_netshop_delivery_points_yandex_map.
 * Если скрипт Яндекс-карт загружен на странице, он должен быть версии 2.1.
 *
 * @param options
 *   Обязательно передать массив options.delivery_methods с доступными способами доставки
 *   и пунктами самовывоза.
 *
 */
function nc_netshop_delivery_points_yandex_map(options) {
    // вызов без new?
    if (!this instanceof nc_netshop_delivery_points_yandex_map) {
        return new nc_netshop_delivery_points_yandex_map(options);
    }

    this.$ = window.$ || window.jQuery || window.$nc;

    this.options = this.$.extend({
        // скрипт Яндекс-карт — будет загружен, если нет window.ymaps
        ymaps_script_url: 'https://api-maps.yandex.ru/2.1/?lang=ru_RU',
        // ID блока, где будет нарисована карта:
        map_container_id: 'nc_netshop_dm_pickup_map',
        // элементы управления карты (https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/controls-docpage/)
        map_controls: ['default'],
        // массив со объектами со свойствами способов доставки с пунктами самовывоза:
        delivery_methods: [],
        // пресет маркера, когда внутри нет текста
        // (см. https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/option.presetStorage-docpage/):
        icon_preset: 'islands#blueIcon',
        // пресет маркера с текстом (ценой) внутри
        icon_with_text_preset: 'islands#blueStretchyIcon',
        // пресет маркера для выбранной точки
        selected_icon_preset: 'islands#redIcon',
        // пресет маркера для выбранной точки с текстом внутри
        selected_icon_with_text_preset: 'islands#redStretchyIcon',
        // пресет маркера для «домашнего» адреса
        home_icon_preset: 'islands#grayHomeCircleIcon',
        // адрес, который будет отмечен домиком (чтобы отключить, установите false)
        // (ВНИМАНИЕ: для поиска координат используется geocoder, на использование которого
        // есть ограничения по количеству запросов: https://yandex.ru/blog/mapsapi/58741)
        home_address: false,
        // функция генерации балуна (будут переданы два аргумента: свойства способа доставки, свойства точки доставки
        balloon_generator_function: this.balloon_generator,
        // показывать цены в маркерах, когда есть разные варианты:
        show_distinct_prices_in_markers: true,
        // селектор элемента, по нажатию на который выбирается точка доставки
        balloon_button_selector: '.tpl-block-order-delivery-point-select-button',
        // функция, которая будет вызвана при выборе точки на карте (будет передан ID точки выдачи)
        map_point_selection_callback: this.$.noop,
        // текст кнопки выбора точки доставки в балуне
        balloon_select_point_button_text: 'Выбрать этот пункт выдачи',
        // префикс перед ценой в балуне
        balloon_price_prefix: 'Стоимость: '

    }, options);

    this.init();
}

nc_netshop_delivery_points_yandex_map.prototype = {
    map: null,
    clusterer: null,
    current_point: null,
    is_locked: true,
    lock_release_timeout: 0,
    is_ready: false,
    $: null,

    /**
     * Загрузка скрипта Яндекс-карт (если ещё не загружен) и инициализация карты
     */
    init: function() {
        var init_map = this.$.proxy(this, 'init_map'),
            on_ready = function() { ymaps.ready(init_map); };

        if (window.ymaps) {
            on_ready();
        }
        else {
            this.$.ajax({ url: this.options.ymaps_script_url, dataType: 'script', cache: true })
             .done(on_ready);
        }
    },

    /**
     * Инициализация карты
     */
    init_map: function() {
        var options = this.options;

        // Если у контейнера нефиксированная ширина, при выходе из полноэкранного режима
        // карта может не восстановить свою ширину (порвёт вёрстку)
        var container = this.$('#' + options.map_container_id);
        container.css('max-width', container.width() + 'px');

        var map = this.map = new ymaps.Map(options.map_container_id, {
            center: [59.2721, 95.1502],
            zoom: 4,
            controls: options.map_controls
        });

        this.clusterer = new ymaps.Clusterer();
        map.geoObjects.add(this.clusterer);

        this.show_method_points(options.delivery_methods);

        this.is_locked = false;

        // добавим указанный адрес
        if (options.home_address) {
            this.add_address_balloon(options.home_address, options.home_icon_preset);
        }

        this.center();

        // выбор точки доставки на карте
        var select_point = $.proxy(this, 'select_point_from_balloon');
        this.$(document)
            .off('click.nc_netshop_delivery_points_yandex_map', '.tpl-block-order-delivery-point-select-button')
            .on('click.nc_netshop_delivery_points_yandex_map', '.tpl-block-order-delivery-point-select-button', select_point);

        // выбор точки на карте при выборе в списке должен привязываться снаружи
        // (метод this.select_point_by_id())

        this.is_ready = true;
    },

    /**
     * Показывает balloon по указанному адресу (если карта готова и если адрес будет найден)
     *
     * @param {String} address
     * @param {String} balloon_preset
     */
    add_address_balloon: function(address, balloon_preset) {
        var map = this.map;

        window.ymaps && ymaps.geocode(address, {results: 1}).then(function (results) {
            var result = results.geoObjects.get(0);
            if (result) {
                result.options.set({preset: balloon_preset});
                map.geoObjects.add(result);
            }
        });
    },

    /**
     * Поиск способа доставки по ID
     * @param id
     * @private
     * @returns {false|Object}
     */
    find_delivery_method: function(id) {
        for (var i = 0; i < this.options.delivery_methods.length; i++) {
            if (this.options.delivery_methods[i].id == id) {
                return this.options.delivery_methods[i];
            }
        }
        return false;
    },

    /**
     * Поиск пункта  доставки по ID
     *
     * @param id
     * @returns {false|Object}
     */
    find_delivery_point: function(id) {
        for (var m = 0; m < this.options.delivery_methods.length; m++) {
            var method = this.options.delivery_methods[m];
            for (var p = 0; p < method.points.length; p++) {
                if (method.points[p].id == id) {
                    return $.extend({method_id: method.id}, method.points[p]);
                }
            }
        }
        return false;
    },

    /**
     * Создаёт разметку для balloon точек доставки
     *
     * @param {Object} method
     * @param {Object} point
     * @returns {string}
     */
    balloon_generator: function(method, point) {
        function div(property) {
            return point[property]
                ? '<div class="tpl-property-delivery-point-' + property.replace('_', '-') + '">' + point[property] + '</div>'
                : '';
        }

        return '<div class="tpl-block-order-delivery-point-data">' +
                div('name') +
                div('address') +
                div('compact_schedule') +
                div('description') +
                '<div class="tpl-block-order-delivery-point-footer">' +
                '<button class="tpl-block-order-delivery-point-select-button" data-id="' + point.id + '">' +
                // «Выбрать этот пункт выдачи»
                this.balloon_select_point_button_text +
                '</button>' +
                '<div class="tpl-property-delivery-method-price">' +
                this.balloon_price_prefix +
                method.price +
                '</div>' +
                '</div>' +
                '</div>';
    },

    /**
     * Показывает точки на карте для переданных способов доставки
     *
     * @param methods
     */
    show_method_points: function(methods) {
        var coordinate_duplicates = {},
            placemarks = [],
            show_prices = this.options.show_distinct_prices_in_markers && methods.length > 1,
            default_icon_preset = show_prices
                ? this.options.icon_with_text_preset
                : this.options.icon_preset;

        for (var m = 0; m < methods.length; m++) {
            var method = methods[m];
            for (var p = 0; p < method.points.length; p++) {
                var point = method.points[p],
                    lat = Number(point.latitude), lng = Number(point.longitude),
                    coordinate = lat.toFixed(3) + ',' + lng.toFixed(3);

                // Иногда координаты почти совпадают (указывают на центр здания) —
                // немного сдвигаем такие точки, иначе их нельзя увидеть/выбрать на карте.
                // Выглядит на максимальных уровнях зума немного нагляднее, чем в виде кластера
                if (coordinate in coordinate_duplicates) {
                    var shift = coordinate_duplicates[coordinate] / 10000;
                    lat += shift;
                    lng += shift;
                    coordinate_duplicates[coordinate]++;
                }
                else {
                    coordinate_duplicates[coordinate] = 1;
                }

                placemarks.push(new ymaps.Placemark([lat, lng], {
                    hintContent: point.address,
                    clusterCaption: point.name,
                    balloonContent: this.options.balloon_generator_function(method, point),
                    iconContent: show_prices ? method.price : '',
                    deliveryMethodId: method.id,
                    deliveryPointId: point.id
                }, {
                    preset: default_icon_preset
                }));
            }
        }

        this.clusterer.removeAll();
        this.clusterer.add(placemarks);
    },

    /**
     * Устанавливает пресет для геообъекта в зависимости от наличия текста в нём
     *
     * @param placemark
     * @param empty
     * @param with_text
     * @private
     */
    set_geo_object_preset: function(placemark, empty, with_text) {
        placemark.options.set({
            preset: (placemark.properties.get('iconContent')) ? with_text : empty
        });
    },

    /**
     * Установка стилей для маркера выбранной точки доставки
     *
     * @param id идентификатор точки доставки
     * @private
     */
    set_current_point_by_id: function (id) {
        if (!this.is_ready) {
            return;
        }

        this.deselect_current_point();
        var placemarks = this.clusterer.getGeoObjects();
        for (var i = 0; i < placemarks.length; i++) {
            if (placemarks[i].properties.get('deliveryPointId') == id) {
                this.current_point = placemarks[i];
                this.set_geo_object_preset(placemarks[i], this.options.selected_icon_preset, this.options.selected_icon_with_text_preset);
                // перемещаем из кластеризатора, чтобы метка всегда была видна
                this.clusterer.remove(placemarks[i]);
                this.map.geoObjects.add(placemarks[i]);
                break;
            }
        }
    },

    /**
     * Снимает отметку с текущей выбранной точки
     */
    deselect_current_point: function() {
        if (this.is_ready && this.current_point) {
            var point = this.current_point;
            this.set_geo_object_preset(point, this.options.icon_preset, this.options.icon_with_text_preset);
            this.map.geoObjects.remove(point);
            this.clusterer.add(point);
            this.current_point = null;
        }
    },

    /**
     * Заблокировать изменение координат (например, чтобы избежать каскадных
     * изменений при срабатывании обработчиков событий на карте и во внешнем
     * списке способов и пунктов доставки)
     *
     * @param duration (если не указано, 2000 мс)
     * @private
     */
    lock_map: function(duration) {
        this.is_locked = true;
        clearTimeout(this.lock_release_timeout);
        var that = this;
        this.lock_release_timeout = setTimeout(function() { that.is_locked = false }, duration || 2000);
    },

    /**
     * Выбор точки доставки на карте.
     *
     * Вызывается при нажатии на объекты, соответствующие селектору this.options.balloon_button_selector.
     * Эти объекты (кнопки) должны иметь атрибут data-id с идентификатором точки доставки.
     *
     * Вызывает функцию, указанную в this.options.map_point_selection_callback,
     * в которую будет передан идентификатор точки доставки (из data-id кнопки)
     * (this будет равен экземпляру nc_netshop_delivery_points_yandex_map).
     *
     * @returns {boolean}
     */
    select_point_from_balloon: function(event) {
        var delivery_point_id = this.$(event.target).data('id');
        this.lock_map();
        this.set_current_point_by_id(delivery_point_id);
        this.map.balloon.close();
        this.map.container.exitFullscreen();
        this.options.map_point_selection_callback.call(this, delivery_point_id);
        return false;
    },

    /**
     * Выбор точки на карте по ID (может быть вызван, например, при выборе точки
     * доставки во внешнем списке)
     *
     * @param id
     */
    select_point_by_id: function(id) {
        if (this.is_ready) {
            var point = this.find_delivery_point(id);
            if (point) {
                this.set_current_point_by_id(id);
                if (!this.is_locked) {
                    this.map.setCenter([point.latitude, point.longitude], 14, {
                        flying: true,
                        duration: 500
                    });
                }
            }
        }
    },

    /**
     * Возвращает объект ymaps
     *
     * @returns {Object}
     */
    get_map: function() {
        return this.map;
    },

    /**
     * Центрирует карту по имеющимся на ней точкам
     */
    center: function() {
        var map = this.map;
        map.setBounds(map.geoObjects.getBounds());
        if (map.getZoom() > 16) {
            map.setZoom(16);
        }
    }
};
