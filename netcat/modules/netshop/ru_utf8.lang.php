<?php

global $SUB_FOLDER, $HTTP_ROOT_PATH;


const NETCAT_MODULE_NETSHOP_TITLE = 'Интернет-магазин';
const NETCAT_MODULE_NETSHOP_DESCRIPTION = 'Интернет-магазин';

const NETCAT_MODULE_NETSHOP_ERROR_NO_SETTINGS = 'Отсутствует объект настроек в компоненте Интернет-магазин';

const NETCAT_MODULE_NETSHOP_FUNCTION_IS_UNAVAILABLE = 'Функция доступна в старших редакциях системы.';
define("NETCAT_MODULE_NETSHOP_UPGRADE", NETCAT_MODULE_NETSHOP_FUNCTION_IS_UNAVAILABLE . " <a href='https://netcat.ru/products/upgrade/' target='_blank'>Обновить лицензию</a>");

// Настройки магазина
const NETCAT_MODULE_NETSHOP_SHOP_URL = 'URL магазина';
const NETCAT_MODULE_NETSHOP_SHOP_NAME = 'Название магазина';
const NETCAT_MODULE_NETSHOP_COMPANY_NAME = 'Полное название организации';
const NETCAT_MODULE_NETSHOP_ADDRESS = 'Юридический адрес';
const NETCAT_MODULE_NETSHOP_CITY = 'Город расположения магазина';
const NETCAT_MODULE_NETSHOP_PHONE = 'Телефон';
const NETCAT_MODULE_NETSHOP_DEFAULT_CURRENCY_ID = 'Валюта магазина';
const NETCAT_MODULE_NETSHOP_MAIL_FROM = 'Email, с которого высылаются письма';
const NETCAT_MODULE_NETSHOP_MANAGER_EMAIL = 'Email для оповещения';
const NETCAT_MODULE_NETSHOP_EXTERNAL_CURRENCY = 'Основная валюта (ЦБ)';
const NETCAT_MODULE_NETSHOP_CURRENCY_CONVERSION_PERCENT = 'Добавочный процент при пересчете валют';
const NETCAT_MODULE_NETSHOP_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_BANK_NAME = 'Название банка';
const NETCAT_MODULE_NETSHOP_BANK_ACCOUNT = 'Расчетный счет';
const NETCAT_MODULE_NETSHOP_CORRESPONDENT_ACCOUNT = 'Корреспондентский счет';
const NETCAT_MODULE_NETSHOP_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_BIK = 'БИК';
const NETCAT_MODULE_NETSHOP_VAT = 'Ставка НДС, %';
const NETCAT_MODULE_NETSHOP_WEBMONEY_PURSE = 'Webmoney: кошелек продавца';
const NETCAT_MODULE_NETSHOP_WEBMONEY_SECRET_KEY = 'Webmoney: secret key';
const NETCAT_MODULE_NETSHOP_PAY_CASH_SETTINGS = 'Настройки «Яндекс-Деньги»';
const NETCAT_MODULE_NETSHOP_ASSIST_SHOP_ID = 'Идентификатор в ASSIST';
const NETCAT_MODULE_NETSHOP_PAYMENT_SUCCESS_PAGE = 'URL страницы сайта при удачном платеже (с http://)';
const NETCAT_MODULE_NETSHOP_ASSIST_SECRET_WORD = 'Секретное слово для Assist';
const NETCAT_MODULE_NETSHOP_PAYMENT_FAILED_PAGE = 'URL страницы сайта при неуспешном платеже (с http://)';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_LOGIN = 'Логин в системе Robokassa';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_PASS1 = 'Пароль #1 в системе Robokassa';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_PASS2 = 'Пароль #2 в системе Robokassa';
const NETCAT_MODULE_NETSHOP_INC_CURR_LABEL = 'Валюта для системы Robokassa';
const NETCAT_MODULE_NETSHOP_PAYPAL_BIZ_MAIL = 'Paypal Log-in Email';
const NETCAT_MODULE_NETSHOP_QIWI_FROM = 'Номер магазина в системе QIWI';
const NETCAT_MODULE_NETSHOP_QIWI_PWD = 'Пароль в системе QIWI';
const NETCAT_MODULE_NETSHOP_MAIL_SHOP_ID = 'Номер магазина в системе Деньги@mail.ru';
const NETCAT_MODULE_NETSHOP_MAIL_SECRET_KEY = 'Ключ магазина в системе Деньги@mail.ru';
const NETCAT_MODULE_NETSHOP_MAIL_HASH = 'Криптографический хэш от ключа в системе Деньги@mail.ru';


const NETCAT_MODULE_NETSHOP_SHOP = 'Магазин';
const NETCAT_MODULE_NETSHOP_ITEM = 'Товар';
const NETCAT_MODULE_NETSHOP_DISCOUNT = 'Скидка';
const NETCAT_MODULE_NETSHOP_DISCOUNTS = 'Скидки';
const NETCAT_MODULE_NETSHOP_CART_DISCOUNT = 'Скидка на заказ';
const NETCAT_MODULE_NETSHOP_SURCHARGE = 'Наценка';
const NETCAT_MODULE_NETSHOP_COST = 'Стоимость';
const NETCAT_MODULE_NETSHOP_ITEM_COST = 'СТОИМОСТЬ ТОВАРОВ';
const NETCAT_MODULE_NETSHOP_QTY = 'Количество';
const NETCAT_MODULE_NETSHOP_ITEM_FULL_NAME = 'Полное наименование (производитель, название варианта)';
const NETCAT_MODULE_NETSHOP_ITEM_PRICE = 'Цена';
const NETCAT_MODULE_NETSHOP_SUM = 'Итого';
const NETCAT_MODULE_NETSHOP_ITEM_DELETE = 'Удалить';
const NETCAT_MODULE_NETSHOP_SETTINGS = 'Настройки';

const NETCAT_MODULE_NETSHOP_APPLIED_DISCOUNTS = 'На этот товар действует скидка:';

const NETCAT_MODULE_NETSHOP_PRICE_WITH_DISCOUNT = 'Цена товара со&nbsp;скидкой';
const NETCAT_MODULE_NETSHOP_PRICE_WITHOUT_DISCOUNT = 'Цена товара без&nbsp;скидки';
const NETCAT_MODULE_NETSHOP_PRICE_WITH_DISCOUNT_SHORT = 'Цена со&nbsp;скидкой';
const NETCAT_MODULE_NETSHOP_PRICE_WITHOUT_DISCOUNT_SHORT = 'Цена без&nbsp;скидки';


const NETCAT_MODULE_NETSHOP_CURRENCIES = 'Валюты';

const NETCAT_MODULE_NETSHOP_DELIVERY = 'Доставка';
const NETCAT_MODULE_NETSHOP_PAYMENT = 'Оплата';

const NETCAT_MODULE_NETSHOP_REFRESH = 'Пересчитать корзину';
const NETCAT_MODULE_NETSHOP_PRICE_TYPE = 'Тип цен';
const NETCAT_MODULE_NETSHOP_ITEM_FORMS = 'товар, товара, товаров';

const NETCAT_MODULE_NETSHOP_FILL_REQUIRED = 'Пожалуйста, заполните все поля, отмеченные звездочкой (*)';


const NETCAT_MODULE_NETSHOP_NEXT = 'Далее';
const NETCAT_MODULE_NETSHOP_BACK = 'Назад';
const NETCAT_MODULE_NETSHOP_MORE = 'подробнее';
const NETCAT_MODULE_NETSHOP_INSTALL = 'Установить';


// Статистика
const NETCAT_MODULE_NETSHOP_STATISTICS = 'Статистика';
const NETCAT_MODULE_NETSHOP_DATA_NOT_AVAILABLE = 'Данные отсутствуют';

const NETCAT_MODULE_NETSHOP_SALES = 'Продажи';
const NETCAT_MODULE_NETSHOP_ORDERS = 'Заказы';
const NETCAT_MODULE_NETSHOP_GOODS = 'Товары';
const NETCAT_MODULE_NETSHOP_CUSTOMERS = 'Покупатели';

const NETCAT_MODULE_NETSHOP_SALES_AMOUNT = 'Сумма продаж';
const NETCAT_MODULE_NETSHOP_TOTAL_ORDERS = 'Количество заказов';
const NETCAT_MODULE_NETSHOP_COMPLETED_ORDERS = 'Выполнено заказов';
const NETCAT_MODULE_NETSHOP_PURCHASED_GOODS = 'Продано товаров';
const NETCAT_MODULE_NETSHOP_TOP_PURCHASED_GOODS = 'Лидеры продаж';
const NETCAT_MODULE_NETSHOP_SUCCESSFUL_ORDERS_PERCENTAGE = 'Процент успешных заказов';
const NETCAT_MODULE_NETSHOP_AVG_ORDER_AMOUNT = 'Средняя стоимость заказа';
const NETCAT_MODULE_NETSHOP_AVG_SALES_ORDER_AMOUNT_BY_DAY = 'Средние ежедневные продажи';
const NETCAT_MODULE_NETSHOP_SELECTED_PERIOD = 'Выбранный период';
const NETCAT_MODULE_NETSHOP_LAST_PERIOD = 'Прошлый период';

const NETCAT_MODULE_NETSHOP_OVER_PERIOD = 'За период…';
const NETCAT_MODULE_NETSHOP_7_DAYS = 'За 7 дней';
const NETCAT_MODULE_NETSHOP_30_DAYS = 'За 30 дней';
const NETCAT_MODULE_NETSHOP_X_DAYS = 'За %s дней';

const NETCAT_MODULE_NETSHOP_BY_DAYS = 'дням';
const NETCAT_MODULE_NETSHOP_BY_WEEKS = 'неделям';
const NETCAT_MODULE_NETSHOP_BY_MONTHS = 'месяцам';
const NETCAT_MODULE_NETSHOP_GROUP_BY = 'Группировка по';

const NETCAT_MODULE_NETSHOP_GOODS_BY_QTY = 'По количеству продаж';
const NETCAT_MODULE_NETSHOP_GOODS_BY_SALES_AMOUNT = 'По сумме продаж';

const NETCAT_MODULE_NETSHOP_TODAY = 'Сегодня';
const NETCAT_MODULE_NETSHOP_YESTERDAY = 'Вчера';
const NETCAT_MODULE_NETSHOP_AVG_FOR_7_DAYS = 'В среднем за 7 дней';

const NETCAT_MODULE_NETSHOP_WEEK = 'Неделя';
const NETCAT_MODULE_NETSHOP_LAST_WEEK = 'Неделя назад';
const NETCAT_MODULE_NETSHOP_MONTH = 'Месяц';
const NETCAT_MODULE_NETSHOP_LAST_MONTH = 'Месяц назад';


const NETCAT_MODULE_NETSHOP_1C_INTEGRATION = '1С и МойСклад';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_LEGACY = '(старый обмен данными)';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_IMPORT = 'Импорт источника';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR = 'Перехватчик файлов импорта';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_FILES_LIST = 'Список файлов';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_FILE = 'Файл';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CREATED_AT = 'Время создания';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_IMPORT = 'Импортировать';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CONFIRM_DELETE_FILE = 'Действительно удалить данный файл?';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_DELETE_ALL_FILES = 'Удалить все файлы';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CONFIRM_DELETE_ALL_FILES = 'Действительно удалить все файлы?';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_INTERCEPT_URL = 'URL для настройки источника';


//Forms
const NETCAT_MODULE_NETSHOP_SAVE = 'Сохранить';
const NETCAT_MODULE_NETSHOP_ADMIN_SAVE_OK = 'Настройки успешно сохранены';
const NETCAT_MODULE_NETSHOP_FORMS = 'Бланки';
const NETCAT_MODULE_NETSHOP_FORMS_TYPE = 'Тип бланка';

const NETCAT_MODULE_NETSHOP_CASHMEMO = 'Товарный чек';
const NETCAT_MODULE_NETSHOP_CASHMEMO_COMPANY = 'Название компании';
const NETCAT_MODULE_NETSHOP_CASHMEMO_ADDRESS = 'Адрес';
const NETCAT_MODULE_NETSHOP_CASHMEMO_SELLER = 'Продавец';
const NETCAT_MODULE_NETSHOP_CASHMEMO_SELLER_POSITION = 'Должность';
const NETCAT_MODULE_NETSHOP_CASHMEMO_PAYMENT = 'Комиссия за прием платежа';
const NETCAT_MODULE_NETSHOP_CASHMEMO_DELIVERY = 'Доставка';

const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_FULLNAME = 'ФИО отправителя';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_ADDRESS_LINE1 = 'Адрес отправителя строка 1';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_ADDRESS_LINE2 = 'Адрес отправителя строка 2';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_PHONE = 'Телефон отправителя';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_FULLNAME = 'ФИО получателя';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_ADDRESS_LINE1 = 'Адрес получателя строка 1';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_ADDRESS_LINE2 = 'Адрес получателя строка 2';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_PHONE = 'Телефон получателя';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_DESCRIPTION = 'Описание вложения';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_VALUE = 'Стоимость';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_WEIGHT = 'Вес';

const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_LEGAL_ENTITY = 'Отправитель: юридическое лицо';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_TO_LEGAL_ENTITY = 'Получатель: юридическое лицо';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_STREET = 'Улица';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_HOUSE = 'Дом';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_BLOCK = 'Корпус';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_FLOOR = 'Этаж';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_APARTMENT = 'Квартира';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_INTERCOM = 'Домофон';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_CITY = 'Город';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_REGION = 'Регион';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_ZIPCODE = 'Индекс';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_CASH_ON_DELIVERY = 'Наложенный платеж';

const NETCAT_MODULE_NETSHOP_POST_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_POST_KOR = 'Кор/счет';
const NETCAT_MODULE_NETSHOP_POST_BANK = 'Наименование банка';
const NETCAT_MODULE_NETSHOP_POST_ACCOUNT = 'Рас/счет';
const NETCAT_MODULE_NETSHOP_POST_BIK = 'БИК';

const NETCAT_MODULE_NETSHOP_TORG12 = 'ТОРГ-12';
const NETCAT_MODULE_NETSHOP_TORG12_NUMBER_TEMPLATE = 'Шаблон номера документа';
const NETCAT_MODULE_NETSHOP_TORG12_UNIT = 'Структурное подразделение';
const NETCAT_MODULE_NETSHOP_TORG12_CONSIGNEE = 'Грузополучатель';
const NETCAT_MODULE_NETSHOP_TORG12_SUPPLIER = 'Поставщик';
const NETCAT_MODULE_NETSHOP_TORG12_PAYER = 'Плательщик';
const NETCAT_MODULE_NETSHOP_TORG12_CONTRACT = 'Основание';
const NETCAT_MODULE_NETSHOP_TORG12_OKDP = 'ОКДП';
const NETCAT_MODULE_NETSHOP_TORG12_TRANS_NUMBER = 'Транс. накл. номер';
const NETCAT_MODULE_NETSHOP_TORG12_TRANS_DATE = 'Транс. накл. дата';
const NETCAT_MODULE_NETSHOP_TORG12_OPERATION_TYPE = 'Вид операции';
const NETCAT_MODULE_NETSHOP_TORG12_NDS = 'НДС (%)';
const NETCAT_MODULE_NETSHOP_TORG12_RESOLVED_BY_POSITION = 'Разрешил (должность)';
const NETCAT_MODULE_NETSHOP_TORG12_RESOLVED_BY_SURNAME = 'Разрешил (расшифровка подписи)';
const NETCAT_MODULE_NETSHOP_TORG12_ACCOUNTANT_SURNAME = 'Бухгалтер (расшифровка подписи)';
const NETCAT_MODULE_NETSHOP_TORG12_RELEASED_BY_POSITION = 'Отпустил (должность)';
const NETCAT_MODULE_NETSHOP_TORG12_RELEASED_BY_SURNAME = 'Отпустил (расшифровка подписи)';

const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_DONT_USE = 'Не использовать';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING = 'Соответствие полей для автоматического расчёта «%s»';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING_SHOP = 'Настройки магазина';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING_ORDER = 'Параметры заказа';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_SETTINGS = 'Дополнительные настройки для автоматического расчёта «%s»';
const NETCAT_MODULE_NETSHOP_DELIVERY_EMS = 'EMS';
const NETCAT_MODULE_NETSHOP_DELIVERY_RUSSIANPOST = 'Почта России';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA = 'EMS внутренние отправления';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL = 'EMS международные отправления';
const NETCAT_MODULE_NETSHOP_RUSSIANPOST_PACKAGE = 'Почта России ф. 116';
const NETCAT_MODULE_NETSHOP_RUSSIANPOST_CASH_ON_DELIVERY = 'Почта России ф. 113эн';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX = 'Яндекс.Доставка';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SENDER_ID = 'Идентификатор магазина';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_OAUTH_TOKEN = 'Токен авторизации';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_KEYS = 'Ключи для методов (верхнее поле с ключами в личном кабинете Яндекса)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_IDS = 'Идентификаторы (нижнее поле с ключами в личном кабинете Яндекса)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE = 'Сбор за перечисление денежных средств';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_INCLUDED = 'включён в стоимость заказа';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_EXTRA = 'прибавить к наценке за способ оплаты';
const NETCAT_MODULE_NETSHOP_DELIVERY_DADATA_API_KEY = 'API-ключ в сервисе dadata.ru (необходим для автоматического создания черновика заказа в Яндекс.Доставке)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE = 'Способ отгрузки';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE_IMPORT = 'Самопривоз';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE_WITHDRAW = 'Забор';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK = 'СДЭК';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_LOGIN = 'Учётная запись (логин) для интеграции (не обязательно)';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_PASSWORD = 'Пароль (если используется учётная запись)';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE = 'Способ отправки';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE_CDEK = 'отправитель доставляет груз самостоятельно до склада СДЭК';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE_SHOP = 'курьер СДЭК забирает груз у отправителя';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_POINT_LINK = 'Подробная информация о пункте выдачи';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_RATES = 'Тарифы, по которым производится расчёт';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SELECTED_RATES_NUMBER_WARNING = 'Использование большого числа тарифов замедлит расчёт доставки и отображение страниц оформления заказа';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_REQUIRES_LOGIN = 'требуется учётная запись';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE = 'Тип доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_POST = 'Получение в почтовом отделении';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_PICKUP = 'Получение в пункте выдачи';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_COURIER = 'Доставка курьером по адресу';
const NETCAT_MODULE_NETSHOP_DELIVERY_WITH_CHECK = 'Возможна проверка заказа при получении. ';
const NETCAT_MODULE_NETSHOP_DELIVERY_COURIER_TIME = 'Время доставки: ';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_SELECT_BUTTON = 'Выбрать этот пункт выдачи';
const NETCAT_MODULE_NETSHOP_DELIVERY_DAYS_OF_WEEK_SHORT = '/пн/вт/ср/чт/пт/сб/вс';
const NETCAT_MODULE_NETSHOP_DELIVERY_TIME_ALL_DAY = 'круглосуточно';
const NETCAT_MODULE_NETSHOP_DELIVERY_ON_MAP = 'на карте';

const NETCAT_MODULE_NETSHOP_DELIVERY_POINTS = 'Пункты выдачи';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT = 'Пункт выдачи';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_LOCATION_NAME = 'Населённый пункт';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_ADDRESS = 'Адрес';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_SCHEDULE = 'Расписание работы';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP = 'Группа пунктов выдачи';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP_SHORT = 'Группа';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP_ANY = 'любая';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_CONFIRM_DELETE = 'Удалить пункт выдачи «%s»?';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_DRAG = 'перетащите маркер, чтобы изменить его положение на карте';

const NETCAT_MODULE_NETSHOP_DELIVERY_PAYMENT_CASH = 'оплата при получении наличными';
const NETCAT_MODULE_NETSHOP_DELIVERY_PAYMENT_CARD = 'оплата при получении банковскими картами';

const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_FROM = 'с';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_TO = 'до';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_PLACEHOLDER = 'чч:мм';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_INTERVAL_REMOVE = 'Удалить интервал?';

const NETCAT_MODULE_NETSHOP_PHONE_EXTENSION = 'доб.';

const NETCAT_MODULE_NETSHOP_LOCATION_IS_INVALID = 'Населённый пункт с таким именем не найден. (Для городов за пределами России вначале введите название страны.)';
const NETCAT_MODULE_NETSHOP_LOCATION_SUFFIX_PLACEHOLDER = 'введите город';

//Filter
const NETCAT_MODULE_NETSHOP_FILTER_SHOW = 'Применить';
const NETCAT_MODULE_NETSHOP_FILTER_RESET = 'Сбросить';
const NETCAT_MODULE_NETSHOP_FILTER_FROM = 'от';
const NETCAT_MODULE_NETSHOP_FILTER_TO = 'до';
const NETCAT_MODULE_NETSHOP_FILTER_BOOLEAN_TRUE = 'есть';
const NETCAT_MODULE_NETSHOP_FILTER_BOOLEAN_FALSE = 'нет';
const NETCAT_MODULE_NETSHOP_FILTER_SETTINGS = 'Настроить фильтр товаров';

const NETCAT_MODULE_NETSHOP_EXPORT_COMMERCEML = 'Экспорт в 1C';

const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML = 'Импорт данных в формате CommerceML';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_NOT_WELL_FORMED = 'Ошибка при загрузке XML-файла';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER = 'Версия схемы';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_0 = 'автоопределение';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_1 = '1С версии 7.7';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_2 = '1С версии 8.1';
const NETCAT_MODULE_NETSHOP_IMPORT_SUBMIT = '  Импорт  ';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_NAME = 'Источник';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_NEW = 'Новый источник (введите название)';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_WRONG = 'Неверный источник данных';
const NETCAT_MODULE_NETSHOP_IMPORT_FILE = 'Файл';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT = 'Что делать с позициями, которых нет в источнике';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_DISABLE = 'отключить';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_DELETE = 'удалить';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_IGNORE = 'оставить как есть';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_SECTIONS = 'При автоимпорте создавать группы с компонентом:';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_SECTIONS_DONT_ADD = 'Не добавлять';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_GOODS = 'добавлять товары без проверки';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_MOVE_SECTIONS = 'Синхронизировать изменения дерева групп';
const NETCAT_MODULE_NETSHOP_IMPORT_DELETE_TMP_FILES = 'Удалять временные файлы после импорта';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_RENAME_SUBDIVISIONS = 'Переименовывать разделы, если изменены группы в источнике';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_CHANGE_SUBDIVISION_LINKS = 'Менять ссылки на переименованные разделы';
const NETCAT_MODULE_NETSHOP_IMPORT_DISABLE_OUT_OF_STOCK_ITEMS = 'Отключать товары, у которых количество на складе не указано или равно нулю';

const NETCAT_MODULE_NETSHOP_IMPORT_MAP_SECTION = 'Укажите соответствие разделов источника разделам интернет-магазина';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_PRICE = 'Укажите соответствие типов цен полям шаблонов';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_STORES = 'Укажите соответствие остатков на складах полям компонента';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_CHARACTERISTICS = 'Укажите соответствие характеристик вариантов товара полям компонента';
const NETCAT_MODULE_NETSHOP_IMPORT_REMAIN_IN_STORE = 'Остаток на складе';
const NETCAT_MODULE_NETSHOP_IMPORT_CREATE_SECTION = 'Создать новый раздел';
const NETCAT_MODULE_NETSHOP_IMPORT_CREATE_SECTION_PARENT = 'Родительский раздел';
const NETCAT_MODULE_NETSHOP_IMPORT_TEMPLATE = 'Компонент';

const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_TITLE = 'Источник импортируемых данных';
const NETCAT_MODULE_NETSHOP_IMPORT_FILE_UPLOAD_TITLE = 'Загрузка файла с данными';
define("NETCAT_MODULE_NETSHOP_IMPORT_FILE_FTP_PATH", "Имя файла в директории " . $SUB_FOLDER . $HTTP_ROOT_PATH . "tmp/");
const NETCAT_MODULE_NETSHOP_IMPORT_ROOT_SUBDIVISION = 'Для корректной загрузки ОБЯЗАТЕЛЬНО укажите ID корневого раздела магазина:';

const NETCAT_MODULE_NETSHOP_IMPORT_XML_FILE = 'Обработка импортируемого файла';
const NETCAT_MODULE_NETSHOP_IMPORT_CATALOGUE_STRUCTURE = 'Импорт структуры каталога';
const NETCAT_MODULE_NETSHOP_IMPORT_OFFERS = 'Импорт пакета предложений';
const NETCAT_MODULE_NETSHOP_IMPORT_ORDERS = 'Импорт заказов';
const NETCAT_MODULE_NETSHOP_IMPORT_ORDERS_ID_MAP = "Для корректного импорта заказов вам необходимо настроить соответствие поля \"Ид\" товара";
const NETCAT_MODULE_NETSHOP_IMPORT_COMMODITIES_IN_CATALOGUE = 'Импорт объектов в каталог';
const NETCAT_MODULE_NETSHOP_IMPORT_FIELDS_AND_TAGS_COMPLIANCE = 'Соответствие XML-тегов полям в компоненте:';

const NETCAT_MODULE_NETSHOP_IMPORT_IGNORE_SECTION = 'Не вносить в каталог';

const NETCAT_MODULE_NETSHOP_IMPORT_DONE = 'Обработка источника завершена';

const NETCAT_MODULE_NETSHOP_IMPORT_CACHE_CLEARED_PARTIAL = 'Временные файлы удалены не полностью!';

const NETCAT_MODULE_NETSHOP_PHP4_DOMXML_REQUIRED = 'Импорт данных в формате XML невозможен, поскольку на сервере отсутствует библиотека DOMXML. Пожалуйста, обратитесь к Вашему хостинг-провайдеру для установки данной библиотеки.';

const NETCAT_MODULE_NETSHOP_IMPORT_1C_LINK = "Для автоматической выгрузки данного источника данных на сайт из 1С:
<ol>
 <li>В 1С откройте меню <b>Сервис — Обмен данными в формате CommerceML — Выгрузка пакета коммерческих предложений</b></li>
 <li>Отметьте пункт <b>Отправить на сайт</b> и нажмите на многоточие (<b>...</b>)
 <li>В диалоговом окне нажмите <b>Новая строка</b>, введите наименование сайта.
     <br>В поле <b>Адрес</b> укажите:
     <br><b style='background:#DFDFDF'>%s</b>
     <br>Поля <b>Имя пользователя</b> и <b>Пароль доступа</b> оставьте пустыми.
</ol>
<b>Обратите внимание:</b> вновь созданные в 1С разделы не будут добавлены на
сайт, пока Вы снова не загрузите файл вручную через данный интерфейс.
Подробнее см. в документации к модулю.";

const NETCAT_MODULE_NETSHOP_IMPORT_1C8_LINK = "Для автоматической выгрузки этого источника данных на сайт из 1С:
<ol>
 <li>В 1С8 откройте меню <b>Сервис</b> — <b>Обмен данными с WEB-сайтом</b> — <b>Настройка обмена данными с WEB-сайтом</b>;</li>
 <li>Отметьте пункт <b>Создать новую настройку обмена с WEB-сайтом</b> и нажмите <b>Далее</b>;</li>
 <li>В диалоговом окне укажите желаемые настройки обмена данными:
     <br>В поле <b>Адрес сайта</b> укажите:
     <br><b style='background:#DFDFDF'>%s</b>
     <br>Поля <b>Пользователь</b> и <b>Пароль</b> заполните в соответствии с настройками модуля Интернет-магазин (<b>SECRET_NAME</b> и <b>SECRET_KEY</b>).</li>
</ol>
<b>Обратите внимание:</b> вновь созданные в 1С8 разделы не будут добавлены на
сайт, пока Вы снова не загрузите файл вручную через данный интерфейс.
Подробнее см. в документации к модулю.";

const NETCAT_MODULE_NETSHOP_DISCOUNT_EDIT = 'Редактирование скидки';
const NETCAT_MODULE_NETSHOP_DISCOUNT_MANUAL = 'Размер скидки был указан оператором вручную';
const NETCAT_MODULE_NETSHOP_APPLIES_TO_GOODS = 'к отдельным товарам';
const NETCAT_MODULE_NETSHOP_APPLIES_TO_CART = 'ко всей корзине';

const NETCAT_MODULE_NETSHOP_DISCOUNT_SELECT_FIELD = 'выберите поле...';

const NETCAT_MODULE_NETSHOP_CUSTOMER = 'Заказчик';
const NETCAT_MODULE_NETSHOP_ORDER_EDIT_TITLE = 'Заказ №%s от %%d.%%m.%%Y';
const NETCAT_MODULE_NETSHOP_SHOW_ORDER_STATUS = 'Показать только заказы со статусом';
const NETCAT_MODULE_NETSHOP_ORDER_NEW = 'новый';
const NETCAT_MODULE_NETSHOP_ORDER_ANY = 'любой';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER = 'Фильтр заказов';
const NETCAT_MODULE_NETSHOP_ORDER_SEARCH = 'Номер, клиент, телефон или e-mail';
const NETCAT_MODULE_NETSHOP_ORDER_NO_INFOBLOCK = 'На выбранном сайте нет ни одного раздела с инфоблоком «Заказ»';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_FILTER = 'Способ доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_ALL = 'любой';
const NETCAT_MODULE_NETSHOP_DATE_FILTER = 'Дата';
const NETCAT_MODULE_NETSHOP_DATE_FILTER_FROM = 'с';
const NETCAT_MODULE_NETSHOP_DATE_FILTER_TO = 'по';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER = 'Сумма';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER_FROM = 'от';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER_TO = 'до';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_SUBMIT = 'Искать';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_RESET = 'Очистить форму';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_RESET_CONFIRM = 'Вы уверены, что хотите очистить форму?';
const NETCAT_MODULE_NETSHOP_ORDER_BACK_TO_LIST = 'К списку заказов';
const NETCAT_MODULE_NETSHOP_ORDER_DUPLICATE = 'Продублировать заказ';
const NETCAT_MODULE_NETSHOP_ORDER_CREATE = 'Добавить заказ';
const NETCAT_MODULE_NETSHOP_ORDER_EDIT = 'Редактировать заказ';
const NETCAT_MODULE_NETSHOP_ORDER_REMOVE_ITEM = 'Удалить товар из заказа';
const NETCAT_MODULE_NETSHOP_ORDER_REMOVE_ITEM_CONFIRM = 'Удалить «%s» из заказа?';
const NETCAT_MODULE_NETSHOP_ORDER_ADD_ITEM = 'Добавить товар в заказ';
const NETCAT_MODULE_NETSHOP_ORDER_DELETE_SELECTED = 'Удалить отмеченные';
const NETCAT_MODULE_NETSHOP_ORDER_DELETE_SELECTED_CONFIRM = 'Удалить отмеченные заказы?';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SELECTED = 'Объединить отмеченные';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE = 'Объединение заказов';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_CANCEL = 'Отмена';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SUBMIT = 'Продолжить';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_DESCRIPTION = 'Будет создан новый заказ, содержащий все товары из выбранных заказов.';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_BASE = 'Заказ, из которого будут взяты контактные данные, способ оплаты и доставки:';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SET_STATUS = 'Установить статус для объединяемых заказов:';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_NO_STATUS_CHANGE = 'не менять';

const NETCAT_MODULE_NETSHOP_EQUALS = 'равно';
const NETCAT_MODULE_NETSHOP_MULTIPLY = 'умножить';
const NETCAT_MODULE_NETSHOP_ADD = 'прибавить';
const NETCAT_MODULE_NETSHOP_SUBSTRACT = 'вычесть';

const NETCAT_MODULE_NETSHOP_OR = 'или';


const NETCAT_MODULE_NETSHOP_ITEM_MINIMAL_PRICE_REACHED = 'При расчете скидки достигнут предел минимальной цены товара (%s)';
const NETCAT_MODULE_NETSHOP_CART_MINIMAL_PRICE_REACHED = 'При расчете скидки достигнут предел минимальной стоимости товаров в корзине (%s)';


const NETCAT_MODULE_NETSHOP_SHOP_SETTINGS = 'Настройки интернет-магазина';
const NETCAT_MODULE_NETSHOP_DEPARTMENT_SETTINGS = 'Настройки раздела интернет-магазина';
const NETCAT_MODULE_NETSHOP_CURRENCY_SETTINGS = 'Курсы валют';

// Эти настройки по умолчанию (применяются, если не указаны соотв. настройки валют)
const NETCAT_MODULE_NETSHOP_CURRENCY_FORMAT = '%s #'; // # - знак валюты
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMALS = 2; // количество знаков после запятой
const NETCAT_MODULE_NETSHOP_CURRENCY_DEC_POINT = ','; // разделитель целой и дробной части числа
const NETCAT_MODULE_NETSHOP_CURRENCY_THOUSAND_SEP = ''; // разделитель групп разрядов (оставьте пустым!)
// скрипт получения курсов валют:
const NETCAT_MODULE_NETSHOP_CURRENCY_VAR_NOT_SET = 'Не указано значение переменной %s';
const NETCAT_MODULE_NETSHOP_CURRENCY_NOTHING_TO_FETCH = 'Все курсы валют определены вручную';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_NOTFOUND = 'Не удалось получить источник курсов валют';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_PARSING_ERROR = 'Курсы валют не получены (ошибка при обработке источника)';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_OK = 'Получены курсы валют: %s';

const NETCAT_MODULE_NETSHOP_ERROR_CART_EMPTY = 'Невозможно оформить заказ, поскольку корзина пуста';

const NETCAT_MODULE_NETSHOP_EMAIL_TO_MANAGER_HEADER = 'Заказ с сайта %s';


const NETCAT_MODULE_NETSHOP_PAYMENT_NO_SETTINGS = 'Не указаны настройки платежной системы %s';
const NETCAT_MODULE_NETSHOP_PAYMENT_NO_CURRENCY = 'Не указана валюта магазина';
// №, название магазина
const NETCAT_MODULE_NETSHOP_PAYMENT_DESCRIPTION = 'Оплата заказа №%s (%s)';
const NETCAT_MODULE_NETSHOP_PAYMENT_SUBMIT = 'Оплатить';

// название платежной системы, сумма, дата, номер транзакции, id покупателя
const NETCAT_MODULE_NETSHOP_PAYMENT_LOG = 'Оплачено через %s: %s %s (ID транзакции: %s, ID покупателя: %s)';
const NETCAT_MODULE_NETSHOP_PAYED_ON = 'Оплачено %d.%m.%Y';
const NETCAT_MODULE_NETSHOP_PAYMENT_DOCUMENT = 'платежный документ № ';


const NETCAT_MODULE_NETSHOP_CART_EMPTY = 'Ваша корзина пуста';
const NETCAT_MODULE_NETSHOP_CART_CONTENTS = "<a href='%s'>в Вашей корзине</a>: %s на сумму <b>%s</b>";
const NETCAT_MODULE_NETSHOP_CART_CHECKOUT = 'Оформить заказ';

const NETCAT_MODULE_NETSHOP_NO_RIGTHS = 'У Вас нет прав для доступа к данной информации';

const NETCAT_MODULE_NETSHOP_SOURCES = 'Источники';
const NETCAT_MODULE_NETSHOP_SOURCES_NOT_EXISTS_SOURCE = 'Выбран несуществующий источник';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_NOT_SELECTED = 'Вы не выбрали ни одного источника';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_DELETED = 'Источники успешно удалены';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_DELETE_ERROR = 'Произошла ошибка при удалении источников';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_SAVED = 'Настройки сохранены';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_NOT_SAVED = 'Произошла ошибка при сохранении настроек';
const NETCAT_MODULE_NETSHOP_SOURCES_MAPPING_SAVED = 'Соответствия сохранены';
const NETCAT_MODULE_NETSHOP_SOURCES_MAPPING_NOT_SAVED = 'Произошла ошибка при сохранении соответствий';
const NETCAT_MODULE_NETSHOP_SOURCES_NOT_EXISTS_STORE = 'Выбран несуществующий склад';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_NAME = 'Название источника';
const NETCAT_MODULE_NETSHOP_SOURCES_CATALOGUE_ID = 'ID сайта';
const NETCAT_MODULE_NETSHOP_SOURCES_GOODS_IMPORTED = 'Импортировано товаров';
const NETCAT_MODULE_NETSHOP_SOURCES_STORES_IMPORTED = 'Импортировано складов';
const NETCAT_MODULE_NETSHOP_SOURCES_LAST_SYNC = 'Последняя синхронизация';
const NETCAT_MODULE_NETSHOP_SOURCES_EDIT_MAPPING = 'Редактировать<br>соответствия';
const NETCAT_MODULE_NETSHOP_SOURCES_EDIT = 'Редактировать';
const NETCAT_MODULE_NETSHOP_SOURCES_FIELD_NOT_SELECTED = 'Не выбрано';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_SOURCE = 'Удалить источник';
const NETCAT_MODULE_NETSHOP_SOURCES_NO_SOURCES = 'Нет источников';
const NETCAT_MODULE_NETSHOP_SOURCES_NO_SOURCES_MESSAGE = 'На этой странице отображаются созданные источники обмена данными с 1С, МойСклад и другими системами, поддерживающими обмен данными в формате CommerceML.<br>
Для создания нового источника перейдите в раздел: ';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_SELECTED = 'Удалить выбранные';
const NETCAT_MODULE_NETSHOP_SOURCES_SAVE = 'Сохранить';
const NETCAT_MODULE_NETSHOP_SOURCES_REALLY_WANT_TO_DELETE_SOURCES = 'Вы действительно желаете удалить следующие источники?';
const NETCAT_MODULE_NETSHOP_SOURCES_BACK = 'Назад';
const NETCAT_MODULE_NETSHOP_SOURCES_CANCEL = 'Отмена';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_CONFIRM = 'Подтвердить удаление';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE = 'Источник';
const NETCAT_MODULE_NETSHOP_SOURCES_SETTINGS = 'Настройки';
const NETCAT_MODULE_NETSHOP_SOURCES_MANUAL_SYNC = 'Ссылки для ручной синхронизации';
const NETCAT_MODULE_NETSHOP_SOURCES_OWNER = 'Владелец';
const NETCAT_MODULE_NETSHOP_SOURCES_ID = 'Идентификатор';
const NETCAT_MODULE_NETSHOP_SOURCES_NAME = 'Наименование';
const NETCAT_MODULE_NETSHOP_SOURCES_OFFICIAL_NAME = 'Официальное наименование';
const NETCAT_MODULE_NETSHOP_SOURCES_ADDRESS = 'Адрес';
const NETCAT_MODULE_NETSHOP_SOURCES_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_SOURCES_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_SOURCES_INFORMATION_NOT_AVAILABLE = 'Информация недоступна';
const NETCAT_MODULE_NETSHOP_SOURCES_INFORMATION = 'Информация';
const NETCAT_MODULE_NETSHOP_SOURCES_IMPORTED_STORES = 'Импортированные склады';
const NETCAT_MODULE_NETSHOP_SOURCES_STORE_NAME = 'Название склада';
const NETCAT_MODULE_NETSHOP_SOURCES_1C_ID = 'Идентификатор CommerceML';
const NETCAT_MODULE_NETSHOP_SOURCES_REMAIN_GOODS = 'Остаток товаров';
const NETCAT_MODULE_NETSHOP_SOURCES_VIEW_GOODS = 'Посмотреть товары';
const NETCAT_MODULE_NETSHOP_SOURCES_STORES_NOT_IMPORTED = 'Не импортировано ни одного склада';
const NETCAT_MODULE_NETSHOP_SOURCES_GO_BACK = 'Вернуться назад';
const NETCAT_MODULE_NETSHOP_SOURCES_STORE_REMAIN = 'Остатки по складу';
const NETCAT_MODULE_NETSHOP_SOURCES_ITEM = 'Товар';
const NETCAT_MODULE_NETSHOP_SOURCES_REMAIN = 'Остаток';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_CATALOGUE = 'Экспортировать каталог в файл CommerceML2';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_OFFERS = 'Экспортировать предложения в файл CommerceML2';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_ORDERS = 'Экспортировать заказы в файл CommerceML2';

const NETCAT_MODULE_NETSHOP_SETUP = 'Установка модуля на сайт';
const NETCAT_MODULE_NETSHOP_SETUP_ON_SITE = 'На какой сайт Вы хотите установить интернет-магазин?';
const NETCAT_MODULE_NETSHOP_SETUP_EVERYWHERE = 'Интернет-магазин установлен на всех сайтах в системе.';
const NETCAT_MODULE_NETSHOP_SETUP_SHOP_SETTINGS_REDIRECT = 'После нажатия кнопки &laquo;OK&raquo; вы будете переадресованы на страницу редактирования настроек интернет-магазина. Пожалуйста, заполните все необходимые поля и нажмите кнопку &laquo;Добавить&raquo;, иначе модуль не будет работать на указанном сайте.';

const NETCAT_MODULE_NETSHOP_PREV_ORDERS_SUM = 'Сумма пред. покупок';
const NETCAT_MODULE_NETSHOP_NOT_REGISTERED_USER = 'Незарегистрированный пользователь';

const NETCAT_MODULE_NETSHOP_NETSHOP = 'Интернет-магазин';
const NETCAT_MODULE_NETSHOP_GOODS_CATALOGUE = 'Каталог товаров';
const NETCAT_MODULE_NETSHOP_CART = 'Корзина';
const NETCAT_MODULE_NETSHOP_MAKE_ORDER = 'Оформление заказа';
const NETCAT_MODULE_NETSHOP_EURO = 'евро, евро, евро, M';
const NETCAT_MODULE_NETSHOP_EUROCENT = 'евроцент, евроцента, евроцентов, M';
const NETCAT_MODULE_NETSHOP_USD = 'доллар, доллара, долларов, M';
const NETCAT_MODULE_NETSHOP_CENT = 'цент, цента, центов, M';
const NETCAT_MODULE_NETSHOP_RUR = 'рубль, рубля, рублей, M';
const NETCAT_MODULE_NETSHOP_COPECK = 'копейка, копейки, копеек, F';
const NETCAT_MODULE_NETSHOP_CB_RATES = 'Курсы валют ЦБ';
const NETCAT_MODULE_NETSHOP_PRICE_GROUPS = 'Цены для разных групп пользователей';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHODS = 'Способы доставки';
const NETCAT_MODULE_NETSHOP_BY_COURIER = 'Курьером';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHODS = 'Способы оплаты';
const NETCAT_MODULE_NETSHOP_CREDIT_CARD = 'Пластиковая карта';
const NETCAT_MODULE_NETSHOP_CREDIT_CARD_DESCRIPTION = 'VISA, MasterCard, EuroCard, JCB, DCL (через систему ASSIST)';
const NETCAT_MODULE_NETSHOP_YANDEX_MONEY = 'Яндекс.Деньги';
const NETCAT_MODULE_NETSHOP_RBK_MONEY = 'RBK Money';
const NETCAT_MODULE_NETSHOP_WEBMONEY = 'Webmoney';
const NETCAT_MODULE_NETSHOP_CASHLESS = 'Безналичный расчет';
const NETCAT_MODULE_NETSHOP_SBERBANK = 'Через Сбербанк';
const NETCAT_MODULE_NETSHOP_CASH = 'Наличными';
const NETCAT_MODULE_NETSHOP_EMAIL_TEMPLATES = 'Шаблоны писем';
const NETCAT_MODULE_NETSHOP_ORDER_EMAIL_HEADER = 'Ваш заказ в %SHOP_SHOPNAME%';
const NETCAT_MODULE_NETSHOP_STORES = 'Склады';
const NETCAT_MODULE_NETSHOP_MAIN_STORE = 'Основной склад';

const NETCAT_MODULE_NETSHOP_UNITS = 'Единицы измерения';
const NETCAT_MODULE_NETSHOP_PCS = 'шт';
const NETCAT_MODULE_NETSHOP_ORDER_STATUS = 'Статус заказа';
const NETCAT_MODULE_NETSHOP_ACCEPTED = 'принят';
const NETCAT_MODULE_NETSHOP_REJECTED = 'отклонен';
const NETCAT_MODULE_NETSHOP_PAYED = 'оплачен';
const NETCAT_MODULE_NETSHOP_DONE = 'завершен';

const NETCAT_MODULE_NETSHOP_FULL_NAME = 'ФИО';


const NETCAT_MODULE_NETSHOP_ORDER_EMAIL_BODY = 'Уважаемый %CUSTOMER_CONTACTNAME%!

Ваш заказ принят к обработке.

%CART_CONTENTS%
%CART_DISCOUNTS%
%CART_DELIVERY%%CART_PAYMENT%

ИТОГО: %CART_COUNT% на сумму %CART_SUM%

Для того, чтобы уточнить Ваш заказ, с Вами в самое ближайшее время свяжутся
наши менеджеры.


С уважением,                     Тел.: %SHOP_PHONE%
%SHOP_SHOPNAME%';


const NETCAT_MODULE_NETSHOP_NO_PREV_ORDERS_STATUS_ID = 'В настройках модуля &quot;Интернет-магазин&quot; не установлен параметр PREV_ORDERS_SUM_STATUS. Подробнее см. в документации по модулю.';

const NETCAT_MODULE_NETSHOP_MONTHS_GENITIVE = '/января/февраля/марта/апреля/мая/июня/июля/августа/сентября/октября/ноября/декабря';

const NETCAT_MODULE_NETSHOP_1C_ID = 'Ид';
const NETCAT_MODULE_NETSHOP_1C_CLASSIFICATOR_ID = 'ИдКлассификатора';
const NETCAT_MODULE_NETSHOP_1C_NAME = 'Наименование';
const NETCAT_MODULE_NETSHOP_1C_PRICE = 'Цена';
const NETCAT_MODULE_NETSHOP_1C_PRICES = 'Цены';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TYPE = 'ТипЦены';
const NETCAT_MODULE_NETSHOP_1C_PRICES_TYPE = 'ТипыЦен';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TAG_UNIT = 'Единица';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TAG_COEFFICIENT = 'Коэффициент';
const NETCAT_MODULE_NETSHOP_1C_STORES = 'Склады';
const NETCAT_MODULE_NETSHOP_1C_STORE = 'Склад';
const NETCAT_MODULE_NETSHOP_1C_STORE_ID = 'СкладИД';
const NETCAT_MODULE_NETSHOP_1C_STORE_QTY = 'КоличествоОстаток';
const NETCAT_MODULE_NETSHOP_1C_STORE_ID_2 = 'ИдСклада';
const NETCAT_MODULE_NETSHOP_1C_STORE_QTY_2 = 'КоличествоНаСкладе';
const NETCAT_MODULE_NETSHOP_1C_STORE_REMAIN = 'ОстаткиПоСкладам';
const NETCAT_MODULE_NETSHOP_1C_REMAIN = 'Остаток';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TYPE_ID = 'ИдТипаЦены';
const NETCAT_MODULE_NETSHOP_1C_PRICE_UNIT = 'ЦенаЗаЕдиницу';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY = 'Валюта';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY_DEFAULT = 'руб';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY_DEFAULT_2 = 'р';
const NETCAT_MODULE_NETSHOP_1C_GROUP = 'Группа';
const NETCAT_MODULE_NETSHOP_1C_GROUPS = 'Группы';
const NETCAT_MODULE_NETSHOP_1C_PRODUCT_CHARS = 'ХарактеристикиТовара';
const NETCAT_MODULE_NETSHOP_1C_PRODUCT_CHAR = 'ХарактеристикаТовара';
const NETCAT_MODULE_NETSHOP_1C_VALUE = 'Значение';
const NETCAT_MODULE_NETSHOP_1C_REC_VALUES = 'ЗначенияРеквизитов';
const NETCAT_MODULE_NETSHOP_1C_REC_VALUE = 'ЗначениеРеквизита';
const NETCAT_MODULE_NETSHOP_1C_PROPERTIES_VALUES = 'ЗначенияСвойств';
const NETCAT_MODULE_NETSHOP_1C_PROPERTIES_VALUE = 'ЗначенияСвойства';
const NETCAT_MODULE_NETSHOP_1C_TAX = 'СтавкаНалога';
const NETCAT_MODULE_NETSHOP_1C_TAXES = 'СтавкиНалогов';
const NETCAT_MODULE_NETSHOP_1C_RATE = 'Ставка';
const NETCAT_MODULE_NETSHOP_1C_BASE_UNIT = 'БазоваяЕдиница';
const NETCAT_MODULE_NETSHOP_1C_IMG = 'Картинка';
const NETCAT_MODULE_NETSHOP_1C_QTY = 'Количество';
const NETCAT_MODULE_NETSHOP_1C_OFFICIAL_NAME = 'ОфициальноеНаименование';
const NETCAT_MODULE_NETSHOP_1C_ADDRESS = 'ЮридическийАдрес';
const NETCAT_MODULE_NETSHOP_1C_ADDRESS_VIEW = 'Представление';
const NETCAT_MODULE_NETSHOP_1C_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_1C_KPP = 'КПП';

const NETCAT_MODULE_NETSHOP_RESPONSE_STAT_MESSAGE = 'Статус заказа в системе';
const NETCAT_MODULE_NETSHOP_RESPONSE_COMMENT = 'пользовательский комментарий';
const NETCAT_MODULE_NETSHOP_ORDERS_NUMBER = 'Заказ №';
const NETCAT_MODULE_NETSHOP_TRANSACTION_NUMBER = 'номер транзакции в системе';
const NETCAT_MODULE_NETSHOP_TELEPHONE_NUMBER = 'Введите номер Вашего кошелька в системе QIWI';
const NETCAT_MODULE_NETSHOP_NO_PAYMENT_SYSTEM = 'Платежная система не найдена';

const NETCAT_MODULE_NETSHOP_ERROR_ASSIST = 'Введите идентификатор в ASSIST';
const NETCAT_MODULE_NETSHOP_ERROR_PAYPAL_MAIL = 'Заполните поле Paypal Log-in Email и выберите валюту магазина';
const NETCAT_MODULE_NETSHOP_ERROR_PAYPAL_RATES = 'Необходимо получить котировки валют';
const NETCAT_MODULE_NETSHOP_ERROR_QIWI = 'Укажите номер магазина и пароль в системе QIWI';
const NETCAT_MODULE_NETSHOP_ERROR_MAIL = 'Укажите номер магазина, ключ магазина и криптографический хэш от ключа в системе Деньги@mail.ru';
const NETCAT_MODULE_NETSHOP_ERROR_ROBOKASSA = 'Укажите логин, пароль #1 и пароль #2 в системе Robokassa';
const NETCAT_MODULE_NETSHOP_ERROR_WEBMONEY = 'Укажите кошелек продавца и secret key в системе Webmoney';
const NETCAT_MODULE_NETSHOP_ERROR_YANDEX = 'Заполните настройки Яндекс-Деньги';
const NETCAT_MODULE_NETSHOP_ERROR_PAYMASTER = 'Укажите идентификатор магазина и секретное слово в системе Paymaster';

const NETCAT_MODULE_NETSHOP_SBERBANK_PRINT_BILL = 'Распечатать квитанцию';
const NETCAT_MODULE_NETSHOP_SBERBANK_NOTICE = 'ИЗВЕЩЕНИЕ';
const NETCAT_MODULE_NETSHOP_SBERBANK_CASHIER = 'Кассир';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYMENT_RECEIVER = 'Получатель платежа';
const NETCAT_MODULE_NETSHOP_SBERBANK_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_SBERBANK_RS = 'Р/c';
const NETCAT_MODULE_NETSHOP_SBERBANK_KS = 'Корр.сч.';
const NETCAT_MODULE_NETSHOP_SBERBANK_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_SBERBANK_BIK = 'БИК';
const NETCAT_MODULE_NETSHOP_SBERBANK_NAME_ADDR = 'фамилия, и. о., адрес';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYMENT_TYPE = 'Вид платежа';
const NETCAT_MODULE_NETSHOP_SBERBANK_DATE = 'Дата';
const NETCAT_MODULE_NETSHOP_SBERBANK_AMOUNT = 'Сумма';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYER = 'Плательщик';
const NETCAT_MODULE_NETSHOP_SBERBANK_RECEIPT = 'КВИТАНЦИЯ';

const NETCAT_MODULE_NETSHOP_BANK_PRINT_BILL = 'Распечатать счет';
const NETCAT_MODULE_NETSHOP_BANK_ADDRESS = 'Адрес';
const NETCAT_MODULE_NETSHOP_BANK_PHONE = 'тел.';
const NETCAT_MODULE_NETSHOP_BANK_EXAMPLE = 'Образец заполнения платежного поручения';
const NETCAT_MODULE_NETSHOP_BANK_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_BANK_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_BANK_BILL = 'Сч.';
const NETCAT_MODULE_NETSHOP_BANK_RECEIVER = 'Получатель';
const NETCAT_MODULE_NETSHOP_BANK_RECEIVER_BANK = 'Банк получателя';
const NETCAT_MODULE_NETSHOP_BANK_BIK = 'БИК';
const NETCAT_MODULE_NETSHOP_BANK_BILL_FULL = 'СЧЕТ';
const NETCAT_MODULE_NETSHOP_BANK_BILL_SUFFIX = '/И';
const NETCAT_MODULE_NETSHOP_BANK_FROM = 'от';
const NETCAT_MODULE_NETSHOP_BANK_YEAR = 'г.';
const NETCAT_MODULE_NETSHOP_BANK_CUSTOMER = 'Заказчик';
const NETCAT_MODULE_NETSHOP_BANK_PAYER = 'Плательщик';
const NETCAT_MODULE_NETSHOP_BANK_GOODS_TITLE = 'Наименование<br>товара';
const NETCAT_MODULE_NETSHOP_BANK_UNIT = 'Единица<br>измерения';
const NETCAT_MODULE_NETSHOP_BANK_AMOUNT = 'Количество';
const NETCAT_MODULE_NETSHOP_BANK_PRICE = 'Цена';
const NETCAT_MODULE_NETSHOP_BANK_SUM = 'Сумма';
const NETCAT_MODULE_NETSHOP_BANK_SHIPPING = 'Доставка';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL = 'Итого';
const NETCAT_MODULE_NETSHOP_BANK_VAT_INCLUDED = 'В том числе НДС';
const NETCAT_MODULE_NETSHOP_BANK_VAT_NOT_INCLUDED = 'НДС не предусмотрен';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL_SUM = 'Всего к оплате';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL_TITLES = 'Всего наименований';
const NETCAT_MODULE_NETSHOP_BANK_WITH_SUM = 'на сумму';
const NETCAT_MODULE_NETSHOP_BANK_TIP = 'Оплата в рублях по курсу ЦБ РФ на день выставления счета';

const NETCAT_MODULE_NETSHOP_CHECKOUT_ORDER_DATA_SECTION = 'Контактные данные и адрес доставки';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CUSTOMER_DATA_SECTION = 'Данные заказчика';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CUSTOMER_ADDRESS_SECTION = 'Адрес доставки';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ITEMS_SECTION = 'Состав заказа';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_METHOD_SECTION = 'Способ доставки';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_METHOD_SECTION = 'Способ оплаты';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_AND_PAYMENT_METHOD_SECTION = 'Способы доставки и оплаты';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_DELIVERY_METHODS = 'Не удалось подобрать способ доставки вашего заказа по указанному адресу. Для уточнения способа доставки с вами свяжется сотрудник нашего магазина.';
const NETCAT_MODULE_NETSHOP_ADMIN_NO_AVAILABLE_DELIVERY_METHODS = 'Не удалось подобрать способ доставки заказа по указанному адресу';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR = 'Не удалось вычислить стоимость и сроки доставки';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR_NO_RESPONSE = 'не получен ответ от сервера';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_PRICE = 'Стоимость: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_PRICE_UNKNOWN = 'неизвестно';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_DATE = 'Ожидаемая дата доставки: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_DATES = 'Ожидаемые даты доставки: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_LOADING = ' (данные загружаются) ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_PAYMENT_METHODS = 'Не удалось подобрать способ оплаты для вашего заказа. Для уточнения способа оплаты с вами свяжется сотрудник нашего магазина.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_PAYMENT_METHODS_ADMIN = 'Нет подходящего способа оплаты';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_EXTRA_CHARGE = 'Дополнительный сбор: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CONFIRMATION_SECTION = 'Подтверждение заказа';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PLEASE_REVIEW_ORDER = 'Пожалуйста, проверьте правильность указанных данных.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_TOTALS_SECTION = 'Итого';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CART_TOTALS = 'Стоимость товаров: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ITEM_TOTALS = 'Стоимость всех товаров';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ORDER_TOTALS = 'Общая сумма к оплате: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_BUTTON = 'Оформить заказ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PREV_PAGE_BUTTON = 'Назад';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NEXT_PAGE_BUTTON = 'Далее';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CHANGE_BUTTON = 'Изменить';

const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_INCORRECT_METHOD = 'Ошибка: выбран недоступный для вашего заказа способ доставки';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_DELIVERY_METHOD = 'Способ доставки заказа: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_DELIVERY_POINT = 'Пункт выдачи заказа: ';

const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_INCORRECT_METHOD = 'Ошибка: выбран недоступный для вашего заказа способ оплаты';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_PAYMENT_METHOD = 'Способ оплаты заказа: ';

const NETCAT_MODULE_NETSHOP_CHECKOUT_BOOLEAN_FIELD_YES = 'да';
const NETCAT_MODULE_NETSHOP_CHECKOUT_BOOLEAN_FIELD_NO = 'нет';

const NETCAT_MODULE_NETSHOP_CHECKOUT_INCORRECT_DELIVERY_METHOD = 'Указан недопустимый способ доставки.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_INCORRECT_PAYMENT_METHOD = 'Указан недопустимый способ оплаты.';

const NETCAT_MODULE_NETSHOP_ITEM_CANNOT_BE_ORDERED = 'Товар «%s» в настоящее время недоступен для заказа.';
const NETCAT_MODULE_NETSHOP_ITEM_QTY_CHANGED = 'Количество товара «%s» в вашей корзине было изменено, так как количество товара на складе менее выбранного вами.';

const NETCAT_MODULE_NETSHOP_NO_PAYMENT_MODULE = 'Интеграция с платёжными системами отключена, поскольку в вашей редакции системы отсутствует модуль «Приём платежей»';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_PAYMENT_SYSTEM = 'Платёжная система';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_NO_PAYMENT_SYSTEM_OPTION = '-- нет --';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_EXTRA_CHARGE_ABSOLUTE = 'Дополнительный сбор (абсолютная величина)';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_EXTRA_CHARGE_RELATIVE = 'Дополнительный сбор (процент от общей стоимости заказа)';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_DELIVERY = 'возможность и стоимость оплаты при получении определяет служба доставки';

const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD = 'Способ доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE = 'Способ автоматического расчёта стоимости доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_NO_SERVICE_OPTION = '-- нет --';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_EXTRA_CHARGE_ABSOLUTE = 'Дополнительный сбор (абсолютная величина)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_EXTRA_CHARGE_RELATIVE = 'Дополнительный сбор (процент от общей стоимости заказа)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_COST = 'Стоимость';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_CALCULATED = 'Автоматический расчёт';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MIN_DAYS = 'Минимальное число дней для доставки (если срок доставки рассчитывается автоматически, прибавляется к нему)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MAX_DAYS = 'Максимальное число дней для доставки (если срок доставки рассчитывается автоматически, прибавляется к нему)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SHIPMENT_DAYS = 'Дни, по которым производится отправка';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SAME_DAY_SHIPMENT_TIME = 'Время, до которого возможна отправка в тот же день';

const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FROM_CITY = 'Город отправки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_REGION = 'Регион (область) доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_DISTRICT = 'Район региона доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_CITY = 'Город доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ADDRESS = 'Адрес доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ZIP_CODE = 'Индекс получателя';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_STREET = 'Улица (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSE = 'Дом (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSING = 'Корпус (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_BUILDING = 'Строение (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_FLAT = 'Квартира/Офис (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FULL_NAME = 'Ф.И.О. клиента';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_LAST_NAME = 'Фамилия клиента (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FIRST_NAME = 'Имя клиента (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_MIDDLE_NAME = 'Отчество клиента (если такое поле есть)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_INCORRECT_ID = 'указан некорректный способ доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_INCORRECT_METHOD_ID = 'указан некорректный способ доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_WEIGHT = 'вес посылки вне допустимых значений';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_RECIPIENT_ADDRESS = 'не удалось найти адрес доставки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_SENDER_ADDRESS = 'не удалось найти адрес отправки';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_REMOTE_SERVER_RESPONSE = 'ошибка в ответе удалённого сервера';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_NO_REMOTE_SERVER_RESPONSE = 'не получен ответ от удалённого сервера';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MISSING_SETTING = 'в настройках способа доставки не указано значение «%s»';

const NETCAT_MODULE_NETSHOP_DELIVERY_FREE_OF_CHARGE = 'бесплатно';
const NETCAT_MODULE_NETSHOP_DELIVERY_DISCOUNT_STRING = '(скидка: %s)';


const NETCAT_MODULE_NETSHOP_GENITIVE_DAY_FORMAT = 'j'; // English: "jS"  (format as specified for the date() function)
const NETCAT_MODULE_NETSHOP_DATE_RANGE_FORMAT = '%s %s — %s %s'; // day 1, month1, day 2, month 2. English: '%2$s, %1$2 to %3$s %2$s'
const NETCAT_MODULE_NETSHOP_DATE_RANGE_FORMAT_ONE_MONTH = '%s&#x200A;—&#x200A;%s %s'; // day 1, day 2, month. English: '%3$s, %1$s – %3$s, %2$s'
const NETCAT_MODULE_NETSHOP_DAY_AND_MONTH_FORMAT = '%s %s'; // day, month. English: '%2$s, %1$s'
const NETCAT_MODULE_NETSHOP_SHORT_DAY_OF_WEEK_RANGE = '%s–%s'; // dow-dow
const NETCAT_MODULE_NETSHOP_DATE_TODAY = 'сегодня';
const NETCAT_MODULE_NETSHOP_DATE_TOMORROW = 'завтра';

// (Common)

const NETCAT_MODULE_NETSHOP_DATETIME_FORMAT = 'd.m.Y H:i';
const NETCAT_MODULE_NETSHOP_DATE_FORMAT = 'd.m.Y';

const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS = 'Варианты товара';
const NETCAT_MODULE_NETSHOP_ADD_ITEM_VARIANT = 'Добавить один';
const NETCAT_MODULE_NETSHOP_ADD_ITEM_VARIANTS = 'Добавить несколько';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ENABLE_ALL = 'Включить все';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_DISABLE_ALL = 'Выключить все';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_EDIT_ALL = 'Редактировать все';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_DELETE_ALL = 'Удалить все варианты';
const NETCAT_MODULE_NETSHOP_ITEM_PARENT = 'Основной вариант товара';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_PRIORITY = 'Перетащите для изменения порядка, в котором выводятся варианты';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_PRICE_RANGE = "от&nbsp;<span class='tpl-value'>%s</span> до&nbsp;<span class='tpl-value'>%s</span>";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ADD_MULTIPLE_HEADER = 'Добавление вариантов товара «%s»';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ADD_MULTIPLE_DESCRIPTION =
    "Выберите поля, по которым отличаются варианты товара, и укажите значения для выбранных полей через точку с запятой.<br>
    Если выбрано несколько полей, будут созданы товары со всеми возможными сочетаниями указанных характеристик.<br>
    Если у поля указано только одно значение, оно будет установлено у всех создаваемых вариантов товара.<br>
    Остальные значения полей будут наследоваться от основного варианта товара.<br>
    Названия вариантов будут сгенерированы автоматически на основе выбранных значений полей (если не были указаны значения для поля «Название варианта»). Порядок полей влияет на порядок перечисления значений в названии варианта.<br>";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_SELECT_PROPERTY = 'Выберите свойство товара';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_FILL_ARTICLE = 'Заполнить поле «%s»';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_FILL_ARTICLE_COMMENT = "Значение поля «%s» у создаваемых вариантов товаров будет сформировано из значения поля «%1\$s» основного товара и порядкового номера варианта, разделённых дефисом";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_CREATE = 'Создать';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_COUNT = 'Количество создаваемых вариантов товара:';

const NETCAT_MODULE_NETSHOP_LIST_ACTIONS_HEADER = 'Действия';
const NETCAT_MODULE_NETSHOP_ACTION_EDIT = 'Редактировать';
const NETCAT_MODULE_NETSHOP_ACTION_DELETE = 'Удалить';
const NETCAT_MODULE_NETSHOP_LIST_PREVIOUS_PAGE = 'Предыдущая страница';
const NETCAT_MODULE_NETSHOP_LIST_NEXT_PAGE = 'Следующая страница';

const NETCAT_MODULE_NETSHOP_NAME_FIELD = 'Название';
const NETCAT_MODULE_NETSHOP_DESCRIPTION_FIELD = 'Описание';
const NETCAT_MODULE_NETSHOP_CONDITION_FIELD = 'Условия';
const NETCAT_MODULE_NETSHOP_NAME_AND_CONDITIONS_HEADER = 'Название, условия';
const NETCAT_MODULE_NETSHOP_UTM_FIELD = 'UTM метки';

const NETCAT_MODULE_NETSHOP_BUTTON_ADD = 'Добавить';
const NETCAT_MODULE_NETSHOP_BUTTON_BACK = 'Назад';
const NETCAT_MODULE_NETSHOP_BUTTON_SAVE = 'Сохранить';
const NETCAT_MODULE_NETSHOP_BUTTON_APPLY_FILTER = 'Применить';
const NETCAT_MODULE_NETSHOP_BUTTON_CLOSE_DIALOG = 'Закрыть';
const NETCAT_MODULE_NETSHOP_BUTTON_DELETE_SELECTED = 'Удалить выбранное';
const NETCAT_MODULE_NETSHOP_BUTTON_DELETE = 'Удалить';

const NETCAT_MODULE_NETSHOP_UNABLE_TO_SAVE_RECORD = "Ошибка при сохранении записи. <a href='javascript:history:back()'>Вернуться к редактированию</a>";

// Settings
const NETCAT_MODULE_NETSHOP_SHOP_SETTINGS_TAB = 'Организация';
const NETCAT_MODULE_NETSHOP_EXTRA_SETTINGS_TAB = 'Настройки';
const NETCAT_MODULE_NETSHOP_PRICE_RULES_TAB = 'Цены';

const NETCAT_MODULE_NETSHOP_SETTINGS_NO_CURRENCIES_ON_SITE = 'На выбранном сайте не указана ни одна валюта.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_OFFICIAL_RATES_ON_SITE = 'На выбранном сайте нет информации об официальных курсах валют.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_PRICE_RULES_ON_SITE = 'На выбранном сайте не заданы правила выбора цен.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_PAYMENT_METHODS_ON_SITE = 'На выбранном сайте не указаны способы оплаты.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_DELIVERY_METHODS_ON_SITE = 'На выбранном сайте не указаны способы доставки.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_DELIVERY_POINTS_ON_SITE = 'На выбранном сайте пункты выдачи заказов пока не добавлены.';

const NETCAT_MODULE_NETSHOP_CURRENCY = 'Валюта';
const NETCAT_MODULE_NETSHOP_CURRENCY_SETTINGS_TAB = 'Настройки';
const NETCAT_MODULE_NETSHOP_CURRENCY_RATE = 'Курс по отношению к основной валюте ЦБ (руб.)';
const NETCAT_MODULE_NETSHOP_CURRENCY_SHORT_NAME = 'Сокращённое наименование валюты';
const NETCAT_MODULE_NETSHOP_CURRENCY_FULL_NAME = 'Полное название валюты (ед.ч. им., ед.ч. род., мн.ч. род.)';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_PART_NAME = 'Наименование дробной части валюты';
const NETCAT_MODULE_NETSHOP_CURRENCY_FORMAT_RULE = 'Формат вывода';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_POINTS = 'Количество знаков после запятой';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_SEPARATOR = 'Разделитель дробной и целой части';
const NETCAT_MODULE_NETSHOP_CURRENCY_THOUSANDS_SEPARATOR = 'Разделитель групп разрядов';
const NETCAT_MODULE_NETSHOP_DAYS_TO_KEEP_CURRENCY_RATES = 'Сколько дней хранить официальные курсы валют';
const NETCAT_MODULE_NETSHOP_RULE = 'Правило';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_NAME = 'Название правила';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_PRICE_COLUMN = 'Колонка цен';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_CONFIRM_DELETE = 'Удалить правило «%s»?';
const NETCAT_MODULE_NETSHOP_ORDERS_COMPONENT = 'Компонент заказов';
const NETCAT_MODULE_NETSHOP_DEFAULT_FULL_NAME_TEMPLATE = 'Шаблон полного названия товара (FullName) по умолчанию';
const NETCAT_MODULE_NETSHOP_ORDERS_SUM_STATUS = 'Статусы заказов для расчёта суммы покупок';
const NETCAT_MODULE_NETSHOP_1C_EXPORT_ORDERS_STATUS = 'Статусы заказов для экспорта в 1С, МойСклад';
const NETCAT_MODULE_NETSHOP_PAID_ORDER_STATUS = 'Статус, в который переходит заказ в случае успешной оплаты';
const NETCAT_MODULE_NETSHOP_REJECTED_ORDER_STATUS = 'Статус, в который переходит заказ в случае отмены оплаты';

// _MAILER_

const NETCAT_MODULE_NETSHOP_MAILER_ROOT = 'Письма';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATES = 'Макеты писем';
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_MAIL = 'Письма клиентам';
const NETCAT_MODULE_NETSHOP_MAILER_MANAGER_MAIL = 'Письма менеджерам';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATES = 'Макеты'; // Макеты дизайна писем
const NETCAT_MODULE_NETSHOP_MAILER_NO_MASTER_TEMPLATES = 'Макеты писем для интернет-магазина на выбранном сайте отсутствуют.';
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_ORDER = 'Новый заказ'; // Шаблон письма клиенту при оформлении заказа
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_ORDER_REGISTER = 'Заказ и регистрация';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_CHANGE_ITEMS = 'Изменение состава';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_STATUS = 'Статус &laquo;%s&raquo;';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_STATUS_SHORT = '&laquo;%s&raquo;';

const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_HEADER_NAME = 'Название макета';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_NAME = 'Название макета';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_IS_USED = 'Невозможно удалить данный макет, поскольку он используется в шаблонах писем';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_CONFIRM_DELETE = 'Удалить макет писем «%s»?';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SUBJECT = 'Заголовок письма';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_BODY = 'Тело письма';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_PARENT_TEMPLATE = 'Макет письма';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_NO_PARENT_TEMPLATE = 'Без макета';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_IS_ENABLED = 'высылать письмо при переходе заказа в данный статус';

const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW = 'Предварительный просмотр письма';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_TO = 'Кому:';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SUBJECT = 'Тема:';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_NO_SUBJECT = 'БЕЗ ТЕМЫ';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SEND_PROMPT = "Укажите адрес, на который следует выслать копию данного письма.\n(Можно указать несколько адресов через запятую.)";
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SENT = 'Письмо отправлено';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_INSERT_CHILD_TEMPLATE = 'Дочерний шаблон';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_INSERT_VARIABLES = 'Вставить свойство...';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SITE_VARIABLES = 'Сайт';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SHOP_VARIABLES = 'Настройки магазина';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_USER_VARIABLES = 'Пользователь';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_VARIABLES = 'Заказ';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_CART_VARIABLES = 'Товары в корзине';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_COUPON_VARIABLES = 'Купон';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_URL = 'Адрес страницы товара';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_PRICE_AS_DEFINED = 'Базовая цена (как указана в поле Price товара)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_NON_FORMATTED_VALUE = ' (без форматирования)';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DATE = 'Дата заказа';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_ITEM_PRICE = 'Стоимость товаров без скидки на состав заказа';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_PRICE = 'Стоимость товаров';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_PRICE_WITHOUT_DISCOUNT = 'Стоимость товаров без скидок';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_ITEMS_DISCOUNT = 'Сумма скидки на товары';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_ORDER_DISCOUNT = 'Сумма скидок на заказ (состав, доставка)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_DISCOUNT = 'Сумма скидки на состав заказа';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_DELIVERY_DISCOUNT = 'Сумма скидки на доставку';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_PRICE = 'Сумма к оплате';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_DISCOUNT = 'Общая сумма скидки';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_METHOD_NAME = 'Название способа доставки';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_METHOD_VARIANT_NAME = 'Полное служебное название способа доставки (с названием из настроек)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_ADDRESS = 'Адрес доставки или пункта выдачи';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_NAME = 'Название пункта выдачи';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_DESCRIPTION = 'Информация о пункте выдачи';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_ADDRESS = 'Адрес пункта выдачи';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_PHONES = 'Телефоны пункта выдачи';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_SCHEDULE = 'Время работы пункта выдачи';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_DATES = 'Ожидаемые даты доставки';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_PRICE = 'Стоимость доставки без скидки';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_PRICE_WITH_DISCOUNT = 'Стоимость доставки к оплате';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_PAYMENT_METHOD_NAME = 'Название способа оплаты';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_PAYMENT_CHARGE = 'Дополнительный сбор за способ оплаты';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_ID = 'Идентификатор заказа';

const NETCAT_MODULE_NETSHOP_MAILER_RULES = 'Дополнительные адреса менеджеров';
const NETCAT_MODULE_NETSHOP_MAILER_RULE_ADDRESS = 'Адрес электронной почты';
const NETCAT_MODULE_NETSHOP_MAILER_NO_RULES_ON_SITE = 'На выбранном сайте не указано ни одно правило подбора адресов менеджеров.';
const NETCAT_MODULE_NETSHOP_MAILER_RULES_CONFIRM_DELETE = 'Удалить правило «%s»?';

// _CONDITION_

// Фрагменты для составления текстового описания условий
const NETCAT_MODULE_NETSHOP_OP_EQ = '%s';
const NETCAT_MODULE_NETSHOP_OP_EQ_IS = '— %s';
const NETCAT_MODULE_NETSHOP_OP_NE = 'не %s';
const NETCAT_MODULE_NETSHOP_OP_GT = 'более %s';
const NETCAT_MODULE_NETSHOP_OP_GE = 'не менее %s';
const NETCAT_MODULE_NETSHOP_OP_LT = 'менее %s';
const NETCAT_MODULE_NETSHOP_OP_LE = 'не более %s';
const NETCAT_MODULE_NETSHOP_OP_GT_DATE = 'позднее %s';
const NETCAT_MODULE_NETSHOP_OP_GE_DATE = 'не ранее %s';
const NETCAT_MODULE_NETSHOP_OP_LT_DATE = 'ранее %s';
const NETCAT_MODULE_NETSHOP_OP_LE_DATE = 'позднее %s';
const NETCAT_MODULE_NETSHOP_OP_CONTAINS = 'содержит «%s»';
const NETCAT_MODULE_NETSHOP_OP_NOTCONTAINS = 'не содержит «%s»';
const NETCAT_MODULE_NETSHOP_OP_BEGINS = 'начинается с «%s»';

const NETCAT_MODULE_NETSHOP_COND_QUOTED_VALUE = '«%s»';
const NETCAT_MODULE_NETSHOP_COND_OR = ', или '; // spaces are important
const NETCAT_MODULE_NETSHOP_COND_AND = '; ';
const NETCAT_MODULE_NETSHOP_COND_OR_SAME = ', ';
const NETCAT_MODULE_NETSHOP_COND_AND_SAME = ' и ';
const NETCAT_MODULE_NETSHOP_COND_DUMMY = '(тип условий, недоступный в текущей редакции модуля)';
const NETCAT_MODULE_NETSHOP_COND_CART_COUNT = 'количество наименований в заказе —';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEM = 'заказ содержит';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMCOMPONENT = 'заказ содержит';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMCOMPONENT_FROM = 'компонента';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB = 'заказ содержит';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB_FROM = 'из раздела';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB_FROM_DESCENDANTS = 'и его подразделов';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMSUB = 'заказ содержит';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMSUB_FROM = 'из раздела';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPROPERTY = 'заказ содержит';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPROPERTY_WITH = ', у которых';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYMAX = 'максимальное значение по полю «%s» в заказе —';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYMIN = 'минимальное значение по полю «%s» в заказе —';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYSUM = 'сумма по полю «%s» (с учётом количества) в заказе —';
const NETCAT_MODULE_NETSHOP_COND_CART_TOTALPRICE = 'стоимость товаров';
const NETCAT_MODULE_NETSHOP_COND_CART_SUM = 'стоимость товаров (без скидок на товары)';
const NETCAT_MODULE_NETSHOP_COND_ITEM = 'на товар';
const NETCAT_MODULE_NETSHOP_COND_ITEM_COMPONENT = 'на товары';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB = 'на товары раздела';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB_NE = 'на товары не из раздела';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB_DESCENDANTS = 'и его подразделов';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PROPERTY = 'на товары, у которых';
const NETCAT_MODULE_NETSHOP_COND_ORDER_DELIVERYMETHOD = 'способ доставки —';
const NETCAT_MODULE_NETSHOP_COND_ORDER_PAYMENTMETHOD = 'способ оплаты —';
const NETCAT_MODULE_NETSHOP_COND_ORDER_PROPERTY = 'заказы, у которых';
const NETCAT_MODULE_NETSHOP_COND_ORDER_STATUS = 'статус заказа —';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_COMPONENT = 'клиент ранее покупал товары';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_COUNT = 'количество выполненных заказов —';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_ITEM = 'клиент заказывал товар';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_ITEM_UNITS = 'шт. товаров';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUM = 'сумма заказов';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMDATES = 'сумма заказов';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD = 'сумма заказов';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_DAY = 'день дня дней';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_WEEK = 'неделя недели недель';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_MONTH = 'месяц месяца месяцев';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_YEAR = 'год года лет';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_FOR = 'за';
const NETCAT_MODULE_NETSHOP_COND_USER = 'пользователь —';
const NETCAT_MODULE_NETSHOP_COND_USER_CREATED = 'дата регистрации пользователя —';
const NETCAT_MODULE_NETSHOP_COND_USER_GROUP = 'группа пользователя —';
const NETCAT_MODULE_NETSHOP_COND_USER_PROPERTY = 'для пользователей, у которых';
const NETCAT_MODULE_NETSHOP_COND_DATE_FROM = 'с';
const NETCAT_MODULE_NETSHOP_COND_DATE_TO = 'по';
const NETCAT_MODULE_NETSHOP_COND_TIME_INTERVAL = '%s&#x200A;—&#x200A;%s';
const NETCAT_MODULE_NETSHOP_COND_BOOLEAN_TRUE = '«истина»';
const NETCAT_MODULE_NETSHOP_COND_BOOLEAN_FALSE = '«ложь»';
const NETCAT_MODULE_NETSHOP_COND_DAYOFWEEK_ON_LIST = 'в понедельник/во вторник/в среду/в четверг/в пятницу/в субботу/в воскресенье';
const NETCAT_MODULE_NETSHOP_COND_DAYOFWEEK_EXCEPT_LIST = 'кроме понедельника/кроме вторника/кроме среды/кроме четверга/кроме пятницы/кроме субботы/кроме воскресенья';
const NETCAT_MODULE_NETSHOP_COND = 'Условия: ';

const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_COMPONENT = '[НЕСУЩЕСТВУЮЩИЙ КОМПОНЕНТ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_FIELD = '[ОШИБКА В УСЛОВИИ: ПОЛЕ НЕ СУЩЕСТВУЕТ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_VALUE = '[НЕСУЩЕСТВУЮЩЕЕ ЗНАЧЕНИЕ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_SUB = '[НЕСУЩЕСТВУЮЩИЙ РАЗДЕЛ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_ITEM = '[НЕСУЩЕСТВУЮЩИЙ ТОВАР]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_USER_GROUP = '[НЕСУЩЕСТВУЮЩАЯ ГРУППА ПОЛЬЗОВАТЕЛЕЙ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_USER = '[НЕСУЩЕСТВУЮЩИЙ ПОЛЬЗОВАТЕЛЬ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_DELIVERY_METHOD = '[НЕСУЩЕСТВУЮЩИЙ СПОСОБ ДОСТАВКИ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_PAYMENT_METHOD = '[НЕСУЩЕСТВУЮЩИЙ СПОСОБ ОПЛАТЫ]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_STATUS = '[НЕСУЩЕСТВУЮЩИЙ СТАТУС ЗАКАЗА]';

// Строки, используемые в «простом» редакторе условий
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_NOTICE = 'Подбор по условиям не доступен в установленной редакции модуля.';
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_CART_TOTALPRICE_FROM = 'Сумма заказа от';
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_CART_TOTALPRICE_TO = 'до';

// Строки, используемые в редакторе условий
const NETCAT_MODULE_NETSHOP_CONDITION_NO_ADVANCED = 'Подбор по условиям не доступен в текущей редакции модуля';
const NETCAT_MODULE_NETSHOP_CONDITION_AND = 'и';
const NETCAT_MODULE_NETSHOP_CONDITION_OR = 'или';
const NETCAT_MODULE_NETSHOP_CONDITION_AND_DESCRIPTION = 'Все условия верны:';
const NETCAT_MODULE_NETSHOP_CONDITION_OR_DESCRIPTION = 'Любое из условий верно:';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_GROUP = 'Удалить группу условий';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_CONDITION = 'Удалить условие';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_ALL_CONFIRMATION = 'Удалить все условия?';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_GROUP_CONFIRMATION = 'Удалить группу условий?';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_CONDITION_CONFIRMATION = 'Удалить условие «%s»?';
const NETCAT_MODULE_NETSHOP_CONDITION_ADD = 'Добавить...';
const NETCAT_MODULE_NETSHOP_CONDITION_ADD_GROUP = 'Добавить группу условий';

const NETCAT_MODULE_NETSHOP_CONDITION_EQUALS = 'равно';
const NETCAT_MODULE_NETSHOP_CONDITION_NOT_EQUALS = 'не равно';
const NETCAT_MODULE_NETSHOP_CONDITION_LESS_THAN = 'менее';
const NETCAT_MODULE_NETSHOP_CONDITION_LESS_OR_EQUALS = 'не более';
const NETCAT_MODULE_NETSHOP_CONDITION_GREATER_THAN = 'более';
const NETCAT_MODULE_NETSHOP_CONDITION_GREATER_OR_EQUALS = 'не менее';
const NETCAT_MODULE_NETSHOP_CONDITION_CONTAINS = 'содержит';
const NETCAT_MODULE_NETSHOP_CONDITION_NOT_CONTAINS = 'не содержит';
const NETCAT_MODULE_NETSHOP_CONDITION_BEGINS_WITH = 'начинается с';
const NETCAT_MODULE_NETSHOP_CONDITION_TRUE = 'да';
const NETCAT_MODULE_NETSHOP_CONDITION_FALSE = 'нет';
const NETCAT_MODULE_NETSHOP_CONDITION_INCLUSIVE = 'включительно';

const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_CONDITION_TYPE = 'выберите тип условия';
const NETCAT_MODULE_NETSHOP_CONDITION_SEARCH_NO_RESULTS = 'Не найдено: ';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_GOODS = 'Параметры товара'; // 'Свойства товара'

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_COMPONENT = 'Компонент';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_COMPONENT = 'выберите компонент';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ITEM = 'Товар';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ITEM = 'выберите товар';
const NETCAT_MODULE_NETSHOP_CONDITION_NONEXISTENT_ITEM = '(Несуществующий товар)';
const NETCAT_MODULE_NETSHOP_CONDITION_ITEM_WITHOUT_NAME = 'Товар без названия';
const NETCAT_MODULE_NETSHOP_CONDITION_ITEM_SELECTION = 'Выбор товара';
const NETCAT_MODULE_NETSHOP_CONDITION_DIALOG_CANCEL_BUTTON = 'Отмена';
const NETCAT_MODULE_NETSHOP_CONDITION_DIALOG_SELECT_BUTTON = 'Выбрать';
const NETCAT_MODULE_NETSHOP_CONDITION_SUBDIVISION_HAS_LIST_NO_COMPONENTS_OR_OBJECTS = 'В выбранном разделе отсутствуют компоненты или объекты товаров.';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SUBDIVISION = 'Раздел';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SUBDIVISION_DESCENDANTS = 'Раздел и его подразделы';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_SUBDIVISION = 'выберите раздел';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ITEM_FIELD = 'Свойство товара';
const NETCAT_MODULE_NETSHOP_CONDITION_COMMON_FIELDS = 'Все компоненты';
const NETCAT_MODULE_NETSHOP_CONDITION_FIELD_BELONGS_TO_ALL_COMPONENTS = 'все компоненты';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ITEM_FIELD = 'выберите свойство товара';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_VALUE = '...'; // sic

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_USER = 'Параметры пользователя'; // 'Свойства пользователя'

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER = 'Пользователь';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_GROUP = 'Группа пользователя';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_CREATED = 'Дата регистрации пользователя';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_FIELD = 'Свойство пользователя';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER = 'выберите пользователя';
const NETCAT_MODULE_NETSHOP_CONDITION_NONEXISTENT_USER = 'Несуществующий пользователь';
const NETCAT_MODULE_NETSHOP_CONDITION_USER_SELECTION = 'Выбор пользователя';
const NETCAT_MODULE_NETSHOP_CONDITION_USER_LIST_NO_RESULTS = 'В выбранной группе нет пользователей';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER_GROUP = 'выберите группу пользователей';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER_PROPERTY = 'выберите поле';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_CART = 'Корзина (состав заказа)';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_SUM_WITH_ITEM_DISCOUNTS = 'Общая стоимость товаров';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_SUM = 'Общая стоимость товаров без учёта скидок на товары';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_POSITION_COUNT = 'Количество позиций';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_POSITION_COUNT = 'Количество позиций в корзине';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_COMPONENT = 'Количество товаров из компонента';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_SUBDIVISION = 'Количество товаров из раздела';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_SUBDIVISION_DESCENDANTS = 'Количество товаров из раздела и подразделов';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_COUNT = 'Количество определённого товара';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_FIELD = 'Количество товаров с определённым свойством';

const NETCAT_MODULE_NETSHOP_CONDITION_CART_CONTAINS = 'Корзина содержит';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_COMPONENT = 'шт. товаров из компонента';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_ITEMS_FROM_SUBDIVISION = 'шт. товаров из раздела';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_ITEMS_FROM_SUBDIVISION_DESCENDANTS = 'шт. товаров из раздела и подразделов';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF = 'шт. товара';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_ITEM_FIELD = 'шт. товара, у которых свойство';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_SUM = 'Сумма по полю товаров (с учётом количества)';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_SUM = 'Сумма по всем товарам в корзине по полю (с учётом количества)';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_MIN = 'Минимум по полю товаров';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_MIN = 'Минимальное значение среди всех товаров в корзине по полю';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_MAX = 'Максимум по полю товаров';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_MAX = 'Максимальное значение среди всех товаров в корзине по полю';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_ORDER = 'Параметры заказа';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_FIELD = 'Свойство заказа';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ORDER_PROPERTY = 'выберите поле';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_DELIVERY_METHOD = 'Способ доставки';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_DELIVERY_METHOD = 'выберите способ доставки';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_PAYMENT_METHOD = 'Способ оплаты';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_PAYMENT_METHOD = 'выберите способ оплаты';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_STATUS = 'Статус заказа';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ORDER_STATUS = 'выберите статус';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_ORDERS = 'Выполненные заказы';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_ALL_TIME = 'Сумма заказов за всё время';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_PERIOD = 'Сумма заказов за период';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_FOR_LAST = 'Сумма заказов за последние';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_DAYS = 'дней';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_WEEKS = 'недель';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_MONTHS = 'месяцев';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_YEARS = 'лет';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_DATES = 'Сумма заказов за даты';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_DATE_FROM = 'Сумма заказов с';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_DATE_TO = 'по';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_COUNT = 'Количество заказов';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDERS_CONTAIN_ITEM = 'Заказы содержат товар';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDERS_CONTAIN_COMPONENT = 'Заказы содержат товар из компонента';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_DATETIME = 'Дата и время';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_DATE_INTERVAL = 'Дата';
const NETCAT_MODULE_NETSHOP_CONDITION_DATE_FROM = 'Дата:    с';
const NETCAT_MODULE_NETSHOP_CONDITION_DATE_TO = 'по';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_DAY_OF_WEEK = 'День недели';
const NETCAT_MODULE_NETSHOP_CONDITION_DAY_OF_WEEK = 'День недели:';
const NETCAT_MODULE_NETSHOP_CONDITION_MONDAY = 'понедельник';
const NETCAT_MODULE_NETSHOP_CONDITION_TUESDAY = 'вторник';
const NETCAT_MODULE_NETSHOP_CONDITION_WEDNESDAY = 'среда';
const NETCAT_MODULE_NETSHOP_CONDITION_THURSDAY = 'четверг';
const NETCAT_MODULE_NETSHOP_CONDITION_FRIDAY = 'пятница';
const NETCAT_MODULE_NETSHOP_CONDITION_SATURDAY = 'суббота';
const NETCAT_MODULE_NETSHOP_CONDITION_SUNDAY = 'воскресенье';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_TIME_INTERVAL = 'Время';
const NETCAT_MODULE_NETSHOP_CONDITION_TIME_FROM = 'Время:    с';
const NETCAT_MODULE_NETSHOP_CONDITION_TIME_TO = 'до';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_VALUEOF = 'Переменные';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_COOKIE_VALUE = 'Значение cookie';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SESSION_VALUE = 'Значение переменной в сессии';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_EXTENSION = 'Расширения';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_FUNCTION = 'Результат выполнения функции';
const NETCAT_MODULE_NETSHOP_CONDITION_FUNCTION_CALL = 'Функция';
const NETCAT_MODULE_NETSHOP_CONDITION_FUNCTION_RETURNS_TRUE = 'возвращает значение «истина»';
const NETCAT_MODULE_NETSHOP_CONDITION_VALUE_REQUIRED = 'Необходимо указать значение условия или удалить условие «%s»';

// _PROMOTION_

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNTS = 'Скидки и купоны';

const NETCAT_MODULE_NETSHOP_PROMOTION_ITEM_DISCOUNTS = 'Скидки на товары';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_ITEM_DISCOUNTS = 'Скидки на товары на выбранном сайте отсутствуют';

const NETCAT_MODULE_NETSHOP_PROMOTION_CART_DISCOUNTS = 'Скидки на корзину';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_CART_DISCOUNTS = 'Скидки на корзину на выбранном сайте отсутствуют';

const NETCAT_MODULE_NETSHOP_PROMOTION_DELIVERY_DISCOUNTS = 'Скидки на доставку';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_DELIVERY_DISCOUNTS = 'Скидки на доставку на выбранном сайте отсутствуют';

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_AMOUNT = 'Скидка';
const NETCAT_MODULE_NETSHOP_PROMOTION_LIST_EDIT_HEADER = 'Изменить';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_COUPONS = 'Купоны';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_CUMULATIVE_SHORT = 'суммируется';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_ITEM_ACTIVATION_SHORT = 'активируется пользователем';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CONFIRM_DELETE = 'Удалить скидку «%s»?';

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_VALUE = 'Размер скидки';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_CUMULATIVE = 'Суммируется с другими скидками этого типа';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CONDITIONS = 'Условия применения скидки';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_COUPON_CODE = 'Применять по купону';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CREATE_COUPONS_AFTER_SAVING = 'Создать купоны после сохранения скидки';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_NUMBER_OF_COUPONS = 'Купонов: %s (действительных: %s)';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_GENERATE_COUPONS = 'Добавить купоны';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_ITEM_ACTIVATION = 'Использовать как «сиюминутное предложение»';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_ENABLED = 'Скидка активна';

const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_ITEM_HEADER = 'Купоны для скидки на товары «%s»'; // "DISCOUNT_ITEM": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_CART_HEADER = 'Купоны для скидки на корзину «%s»'; // "DISCOUNT_CART": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_DELIVERY_HEADER = 'Купоны для скидки на доставку «%s»'; // "DISCOUNT_DELIVERY": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_COUPONS = 'Купоны отсутствуют.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE = 'Код купона';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USAGES = 'Количество использований';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USAGES_OUT_OF = 'из';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_VALID_TILL = 'Срок действия';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_VALID_INDEFINITELY = 'не ограничен';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATE_COUPONS_BUTTON = 'Добавить купоны';
const NETCAT_MODULE_NETSHOP_PROMOTION_BACK_TO_DISCOUNT_LIST = 'К списку скидок';
const NETCAT_MODULE_NETSHOP_PROMOTION_BACK_TO_DEAL_LIST = 'К списку предложений';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CSV_LINK = 'Экспорт в формате CSV';


const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_SEND_CODES_TO_USERS = 'Выслать коды пользователям по электронной почте';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_USERS_SELECTION = 'Выборка пользователей';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USERS_SELECTED = 'Выбрано пользователей: ';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_SHOW_SELECTED_USERS = 'Открыть список выбранных пользователей';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NO_USERS = 'Заданным условиям не удовлетворяет ни один пользователь';
const NETCAT_MODULE_NETSHOP_PROMOTION_NUMBER_OF_COUPONS_TO_GENERATE = 'Количество купонов:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE = 'Код купона:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_PREFIX = 'Префикс кодов купонов:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_SYMBOLS = 'Символы, используемые в генерируемой части кода:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_SYMBOLS_DEFAULT_VALUE = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_LENGTH = 'Длина генерируемой части:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_TILL = 'Срок действия купона:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_INDEFINITELY = 'не ограничен';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_TILL_DATE = 'до даты';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_MAX_USAGES = 'Максимальное количество использований каждого купона:';
const NETCAT_MODULE_NETSHOP_PROMOTION_USER_EMAIL_FIELD = 'Поле пользователя с адресом электронной почты:';
const NETCAT_MODULE_NETSHOP_PROMOTION_PREVIEW_EMAIL = 'Посмотреть пример письма';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_WITH_THIS_CODE_ALREADY_EXISTS = 'Купон с таким кодом уже существует!';
const NETCAT_MODULE_NETSHOP_PROMOTION_CREATE_COUPONS = 'Создать';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_CREATE_COUPON = 'Невозможно создать купон: указан некорректный или уже существующий код';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_GENERATE_COUPONS = 'Невозможно создать требуемое количество купонов с указанными настройками.
    <ul><li>Увеличьте длину генерируемой части кода купона.</li>
    <li>Расширьте набор символов, которые могут использоваться в кодах купонов.</li>
    <li>Выберите другой префикс для кода купонов.</li>
    </ul>';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_SEND_COUPONS = 'Невозможно выслать письма пользователям. 
    Проверьте правильность указания настроек, связанных с формированием писем: тему, тело письма, поле пользователя с адресом электронной почты.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE_MAX_USAGES = 'Максимальное количество использований:';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_ENABLED = 'Купон активен';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_TITLE = 'Создание купонов';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_PLEASE_WAIT = 'Не закрывайте это окно до окончания процесса.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_1 = 'Генерация кодов';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_2 = 'Создание писем';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_FINISHED = '— &nbsp;завершено.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_ERROR_CAPTION = 'При создании купонов возникла ошибка:';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_DIALOG_CLOSE = 'Закрыть';

const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE_IS_INVALID = 'Купон &laquo;%s&raquo; не найден';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_EXPIRED = 'Срок действия купона &laquo;%s&raquo; истёк';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_NOT_VALID_ON_THIS_SITE = 'Купон &laquo;%s&raquo; не действует на текущем сайте';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_USED_UP = 'Купон &laquo;%s&raquo; уже израсходован';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_REMOVED_FROM_SESSION = 'Купон &laquo;%s&raquo; удалён';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_ONLY_ONE_OF_ITS_KIND_IS_ALLOWED = 'Купон &laquo;%s&raquo; не был добавлен, так как уже добавлен другой купон этого типа';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CANNOT_BE_APPLIED_TO_ANY_ITEM = 'Купон &laquo;%s&raquo; не действует ни на один товар в корзине';
const NETCAT_MODULE_NETSHOP_PROMOTION_REGISTERED_COUPON_CODE_IS_APPLIED_TO_CART = 'Купон &laquo;%s&raquo; применён к вашей корзине и товарам на сайте';
const NETCAT_MODULE_NETSHOP_PROMOTION_REGISTERED_COUPON_CODE_WILL_BE_APPLIED_TO_CART = 'Купон &laquo;%s&raquo; будет применён к вашей корзине и товарам на сайте';

const NETCAT_MODULE_NETSHOP_1C_SECRET_NAME = 'Имя пользователя для обмена CommerceML (1С, МойСклад)';
const NETCAT_MODULE_NETSHOP_1C_SECRET_KEY = 'Пароль для обмена CommerceML (1С, МойСклад)';
const NETCAT_MODULE_NETSHOP_SECRET_KEY = 'Секретный ключ для скрипта получения валют';

const NETCAT_MODULE_NETSHOP_EXTERNAL_ORDER_SECRET_KEY = 'Внешний заказ: секретный ключ';
const NETCAT_MODULE_NETSHOP_EXTERNAL_ORDER_IP_LIST = 'Внешний заказ: список разрешенных IP (по одному в каждой строке)';

const NETCAT_MODULE_NETSHOP_ORDER_STATUSES = 'Статусы заказов';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_CAMPAIGN_NUMBER = 'Номер кампании';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_AUTH_TOKEN = 'Авторизационный токен';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_OAUTH_APP_ID = 'ID OAuth-приложения';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_OAUTH_APP_TOKEN = 'Токен OAuth-приложения';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_CANCELLED = 'CANCELLED — заказ отменен';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_DELIVERED = 'DELIVERED — заказ получен покупателем';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_DELIVERY = 'DELIVERY — заказ передан в доставку';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_PICKUP = 'PICKUP — заказ доставлен в пункт самовывоза';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_PROCESSING = 'PROCESSING — заказ находится в обработке';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_RESERVED = 'RESERVED — заказ в резерве (ожидается подтверждение от пользователя)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_UNPAID = 'UNPAID — заказ оформлен, но еще не оплачен (если выбрана плата при оформлении)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_SETTINGS_SAVED = 'Настройки успешно сохранены';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_FILL_SETTINGS = 'Для активации функционала заказа на Яндекс.Маркете необходимо заполнить все настройки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_COMPARE_STATUSES = 'Установите соответствие внешних и внутренних статусов заказов:';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_COMPARE_PAYMENT_METHODS = 'Установите соответствие внешних и внутренних способов оплаты:';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_PREPAID = 'Предоплата на Яндекс.Маркете';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_POSTPAID_CASH = 'Постоплата (наличными при получении)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_POSTPAID_CARD = 'Постоплата (картой при получении)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_ONLINE_PAYMENT_CHECKED = 'Предоплата заказа на Яндекс.Маркете включена';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_NO_DATA_YET = '-ожидаются данные-';
const NETCAT_MODULE_NETSHOP_ORDER_STATUS_CHANGE_SEQUENCES = 'Установите правила перехода заказа из одного статуса в другой.';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_EXPORT = 'Выгрузка товаров';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_ORDERS = 'Заказ на Маркете';

const NETCAT_MODULE_NETSHOP_ALLOW_ZERO_PRICE = 'Снижать цены при применении скидок до 0';

const NETCAT_MODULE_NETSHOP_IGNORE_STOCK_UNITS_VALUE = 'Не учитывать значение поля «Остаток на складе» при добавлении товара в корзину';
const NETCAT_MODULE_NETSHOP_STOCK_RESERVE_STATUS = 'Статусы заказов, при которых происходит уменьшение значения поля «Остаток на складе»';
const NETCAT_MODULE_NETSHOP_STOCK_RETURN_STATUS = 'Статусы заказов, при которых происходит возврат товаров на склад (увеличение значения поля «Остаток на складе»)';
const NETCAT_MODULE_NETSHOP_STOCK_RESERVE_FIELD = 'Товары списаны из остатка на складе';
const NETCAT_MODULE_NETSHOP_STOCK_RETURN_FIELD = 'Товары возвращены в остаток на склад';

const NETCAT_MODULE_NETSHOP_DEFAULT_PACKAGE_SIZE = 'Размер упаковки товара по умолчанию';
const NETCAT_MODULE_NETSHOP_LENGTH_CM = 'см';

const NETCAT_MODULE_NETSHOP_ITEM_INDEX_FIELDS = 'Поля товаров, используемые для поиска в панели управления';

const NETCAT_MODULE_NETSHOP_MARKETS = 'Торговые площадки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET = 'Яндекс.Маркет';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES = 'Связки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_ADD = 'Добавление Связки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_EDIT = 'Редактирование Связки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_NAME = 'Название связки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_UPDATED = 'Изменена';
const NETCAT_MODULE_NETSHOP_YANDEX_CONFIRM_DELETE = 'Удалить связку «%s»?';

const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE = 'Тип связки';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE_SIMPLE = 'Упрощенное описание';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE_FULL = 'Произвольный товар (расширенное)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_EDIT_FIELDS = 'Редактировать соответствия';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_EXPORT_URL = 'URL для экспорта';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_DELIVERY_COURIER = 'Выберите метод доставки, информация из которого будет использова для выгрузки стоимости и сроков курьерской доставки';

const NETCAT_MODULE_NETSHOP_GOOGLE_MERCHANT = 'Google Merchant';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_NO_BUNDLES = 'Связки для экспорта в Яндекс.Маркет на выбранном сайте отсутствуют';
const NETCAT_MODULE_NETSHOP_MARKET_GOOGLE_NO_BUNDLES = 'Связки для экспорта в Google Merchant на выбранном сайте отсутствуют';

const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_NAME = 'Имя';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_UNITS = 'Единицы измерения';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_FIELD = 'Поле';

const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES = 'Связки';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_ADD = 'Добавление Связки';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_EDIT = 'Редактирование Связки';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_NAME = 'Название связки';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_UPDATED = 'Изменена';
const NETCAT_MODULE_NETSHOP_GOOGLE_CONFIRM_DELETE = 'Удалить связку «%s»?';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_TYPE = 'Тип связки';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_TYPE_SIMPLE = 'Упрощенное описание';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_EDIT_FIELDS = 'Редактировать соответствия';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_EXPORT_URL = 'URL для экспорта';

const NETCAT_MODULE_NETSHOP_MAILRU = 'Товары@Mail.Ru';
const NETCAT_MODULE_NETSHOP_MARKET_MAIL_NO_BUNDLES = 'Связки для экспорта в Товары@Mail.Ru на выбранном сайте отсутствуют';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES = 'Связки';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_ADD = 'Добавление Связки';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_EDIT = 'Редактирование Связки';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_NAME = 'Название связки';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_UPDATED = 'Изменена';
const NETCAT_MODULE_NETSHOP_MAIL_CONFIRM_DELETE = 'Удалить связку «%s»?';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_TYPE = 'Тип связки';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_TYPE_SIMPLE = 'Упрощенное описание';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_EDIT_FIELDS = 'Редактировать соответствия';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_EXPORT_URL = 'URL для экспорта';

const NETCAT_MODULE_NETSHOP_MAIL_MULTI_NAME = 'Имя';
const NETCAT_MODULE_NETSHOP_MAIL_MULTI_UNITS = 'Единицы измерения';
const NETCAT_MODULE_NETSHOP_MAIL_MULTI_FIELD = 'Поле';

const NETCAT_MODULE_NETSHOP_CONFIRM_STATUS_CHANGE = 'Подтвердите смену статуса';
const NETCAT_MODULE_NETSHOP_CONFIRM_STATUS_CHANGE_TO = 'Изменить статус заказа на «%s»?';

const NETCAT_MODULE_NETSHOP_NO_ORDERS = 'У вас нет ни одного заказа';

const NETCAT_MODULE_NETSHOP_EXCHANGE = 'Обмен данными';
const NETCAT_MODULE_NETSHOP_EXCHANGE_HAS_NO_OBJECTS = 'На выбранном сайте не настроен обмен данными! Нажмите на кнопку <b>«Добавить»</b>, чтобы запустить мастер настройки обмена.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NO_FIELD = 'Не выбрано';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NEW_FIELD = 'Новое поле';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_PARENT_FIELD = 'Поле, указывающее на родителя';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_IMPORT = 'Импорт';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_EXPORT = 'Экспорт';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MODE_MANUAL = 'Ручной/Полуавтоматический';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MODE_AUTOMATED = 'Автоматический';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_ERROR = 'Ошибка';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_CRITICAL_ERROR = 'Критическая ошибка';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_TYPE_CONVERSION = 'Преобразование типа';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_LIST_INSERTION = 'Добавление элемента в список';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REPORT_HAS_BEEN_SENT = 'Отправка отчёта на Email';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_FILE_NOT_FOUND = 'Файл не найден';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_ADDED = 'Объект добавлен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_NOT_ADDED = 'Объект не добавлен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_UPDATED = 'Объект обновлен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_NOT_UPDATED = 'Объект не обновлен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_SECTION_HAS_CHILD_WITH_THIS_KEYWORD = 'У выбранного родительского раздела уже есть подраздел с таким ключевым словом!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_HAS_COMPONENT_WITH_THIS_KEYWORD = 'Компонент с данным ключевым словом уже существует!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NEW_FIELD_CANT_BE_NAMED_AS = 'Название нового поля не может равняться «%s»!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_BASE_COMPONENT_HAS_FIELDS_WITH_THIS_NAME = 'В базовом компоненте уже существуют поля с именами: %s!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_HAS_NO_LIST_WITH_NAME = 'Такой список не существует: «%s»!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_IS_REQUIRED = 'Поле «%s» обязательно для заполнения!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_WRONG_FORMAT = 'Поле «%s» имеет неверный формат!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_DOES_NOT_MATCH_ANY = '«%s» не совпадает ни с один полем!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_ATTACH_FILES_OR_SET_URL = 'Прикрепите файлы обмена или укажите URL, откуда забрать файл';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_CHOOSE_MODE = 'Выберите режим обмена!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD_INFO_ALREADY_HAS_FILES = 'В папке обмена уже есть ранее загруженные файлы! Они будут использоваться при настройке соответствий и для обмена.<br>Если хотите загрузить новые — прикрепите архив или укажите URL файла в форме выше.<br>Иначе оставьте поля пустыми.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SETTINGS_FOR_OBJECT = 'Настройки для объекта';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SETTINGS_SAVED = 'Настройки сохранены!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUN_WIZARD = 'Запустить мастер настройки обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_PERIODICAL_RUN = 'Запускать периодически';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_FREQUENCY = 'Частота запуска обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_MINUTES = 'Минуты';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_HOURS = 'Часы';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_DAYS = 'Дни';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_DOWNLOAD_REMOTE_FILE_BY_URL = 'Забирать файл или архив перед каждым обменом с заданного URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REMOTE_FILE_URL = 'URL-адрес файла или архива';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_SAVE_OBJECT = 'Сохранить обмен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_SEND_REPORT = 'Отправлять отчёт на Email';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REPORT = 'Отчёт об обмене';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_WHEN = 'Когда отправлять отчет';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_ALWAYS = 'Всегда';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_ON_ERROR = 'При возникновении ошибок';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_NEVER = 'Никогда';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_NAME = 'Название обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_TYPE = 'Тип обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_FORMAT = 'Формат обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_STATUS = 'Статус';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_MODE = 'Режим обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_EMAIL = 'Email для отправки отчётов';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_NOT_CONFIGURED = 'Данный обмен не настроен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUNNING_EXCHANGE = 'Запуск обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUN_EXCHANGE = 'Запустить обмен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_IN_EXCHANGE_FOLDER = 'Файлы в папке обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES = 'Файлы';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MAIN_FILES = 'Основные файлы';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OTHER_FILES = 'Остальные файлы';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_FOUND = 'не найдены';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_NOT_FOUND = 'Файлы, необходимые для обмена, не были найдены.<br> Для данного обмена необходимые файлы имеют следующие расширения: <b>%s</b>';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SHOW_ALL = 'Показать все';
const NETCAT_MODULE_NETSHOP_EXCHANGE_UPLOADING_FILES = 'Загрузка файлов';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_FILES = 'Выберите файлы выбранного формата или zip-архив с файлами нужного формата';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OR_SET_FILES_URL = 'Или введите сюда URL файла';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_REMOVE_OLD_FILES = 'Удалить старые файлы';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_UPLOADED = 'Файлы успешно загружены';
const NETCAT_MODULE_NETSHOP_EXCHANGE_COMPONENT = 'Компонент';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SUBDIVISION = 'Раздел';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFOBLOCK = 'Инфоблок';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ALL_LOGS_HAVE_BEEN_DELETED = 'Логи успешно удалены';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOG = 'Лог';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS = 'Хронология обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_DATE_START = 'Дата и время начала';
const NETCAT_MODULE_NETSHOP_EXCHANGE_DATE_END = 'Дата и время конца';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS = 'Статистика обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS_ACTION = 'Событие';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS_ACTION_COUNT = 'Кол-во раз';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS_DATE_TIME = 'Дата и время';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MSG = 'Сообщение';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE = 'Файл';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS_NOT_FOUND = 'Логов для данного обмена не найдено';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD = 'Мастер настройки обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD_CURRENT_STEP = 'Текущий шаг';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_FILE_OR_ARCHIVE = 'Выберите файл выбранного формата или zip-архив с файлами нужного формата';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OR_SET_URL = 'Или введите сюда URL файла';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECTING_COMPONENT = 'Выбор компонента';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_COMPONENT_THAT_EXISTS = 'Выберите существующий компонент';
const NETCAT_MODULE_NETSHOP_EXCHANGE_CREATE_COMPONENT_BASED_ON_ANOTHER = 'Создать новый компонент на основе существующего';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_COMPONENT_NAME = 'Название нового компонента';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_COMPONENT_KEYWORD = 'Ключевое слово нового компонента';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECTING_SUBDIVISION = 'Выбор раздела';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_SUBDIVISION_THAT_EXISTS = 'Выберите существующий раздел';
const NETCAT_MODULE_NETSHOP_EXCHANGE_CREATE_SUBDIVISION = 'Создать новый раздел';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_PARENT_SUBDIVISION = 'Выберите родительский раздел для нового раздела';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_SUBDIVISION_NAME = 'Название нового раздела';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_SUBDIVISION_KEYWORD = 'Ключевое слово нового раздела';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MATCHING_FIELDS = 'Соответствие полей';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_IN_COMPONENT = ' Поле в компоненте';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIRST_STRING_IN_FILE = 'Первая строка в файле';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SECOND_STRING_IN_FILE = 'Вторая строка в файле';
const NETCAT_MODULE_NETSHOP_EXCHANGE_THIRD_STRING_IN_FILE = 'Третья строка в файле';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_FIELD = 'Новое поле';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EDIT_FIELD = 'Редактирование поля';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME = 'Название поля (латинскими буквами)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_EXAMPLE = 'Используйте префикс «Property_», если поле должно отображаться в списке характеристик. Например, Property_Size.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_DESCRIPTION = 'Описание поля';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_DESCRIPTION_EXAMPLE = 'Например: Размер';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_TYPE = 'Тип поля';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_FORMAT = 'Название списка (латинскими буквами)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_FORMAT_EXAMPLE = 'Например: Region';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_SELECT_PLACEHOLDER = 'Выберите нужные поля...';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NOT_FOUND = 'Поля по запросу не найдены';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SAVE = 'Сохранить';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANTS_FIELDS = 'Поля, отделяющие варианты товаров друг от друга';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELDS = 'Поля, по которым возможен поиск';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANTS_FIELDS_NOT_SET = 'Выбрана опция «Задать поля, отделяющие варианты товаров друг от друга», но не задано ни одно поле!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELDS_NOT_SET = 'Выбрана опция «Задать поля, по которым возможен поиск», но не задано ни одно поле!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANT_FIELD = 'Поле, отделяющее варианты товаров';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELD = 'Поле, отделяющее возможность поиска';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SET_THIS_FIELDS = 'Задать такие поля';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SET_THIS_FIELDS_IN_THE_END = '<b>Внимание!</b> Заполните эти поля в самом конце, после настройки соответствия полей с полями компонента!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_FIX_ERROR = 'Пожалуйста, устраните ошибки';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REQUIRED_FIELDS_NOT_MATCHED = 'Не настроены соответствия для важных полей';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_COMPONENT = 'Выберите компонент для данного типа товара';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_PARENT_COMPONENT = 'Выберите родительский компонент для данного типа товара';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PHASE = 'Этап';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PHASE_OUT_OF = 'из';
const NETCAT_MODULE_NETSHOP_EXCHANGE_GOOD = 'Товар';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_START = 'Начало обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_FINISH = 'Конец обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TRYING_TO_LOAD_FILES_BY_URL = 'Попытка загрузить файлы по указанному URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAILED_TO_LOAD_FILES_BY_URL = 'Не удалось загрузить файлы, или по указанному URL лежат неподходящие файлы';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_CONFIGURED = 'Обмен не настроен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_FOLDER_IS_EMPTY = 'Папка обмена пуста';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_NOT_FOUND = 'Файл не найден';
const NETCAT_MODULE_NETSHOP_EXCHANGE_START_FILE_PROCESSING = 'Начало обработки файла';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FINISH_FILE_PROCESSING = 'Конец обработки файла';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_IS_EMPTY = 'Файл пуст';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_ADDED_TO_LIST = 'Поле "%s" (список "%s"): объект был добавлен в список [%s]';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_CASTING_FOR_FIELD = 'Приведение типа для поля "%s": "%s" => "%s"';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_HAS_NOT_BEEN_FOUND = 'Поле "%s": файл не был найден [%s]';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_PATH_HAS_NOT_BEEN_FOUND = 'Поле "%s": путь к файлу не указан';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_UPDATED = 'Объект был обновлён (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_UPDATED = 'Не удалось обновить объект (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_ADDED = 'Объект был добавлен (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_ADDED = 'Не удалось добавить объект (%s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT = 'Выберите';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_PRICE = 'Цены и остатки';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_GOOD_DATA_OR_COMPONENT_NOT_MATCHED = 'Для данного раздела нет данных о товарах, либо данные есть, но не настроен компонент и его поля.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ARTICLE = 'Артикул';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ITEM_ID = 'Ид Товара';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_PRICE = 'Цена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_STOCK_UNITS = 'Количество на складе';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_DATA_FOR_SUBDIVISION = 'Для данного раздела нет данных о товарах.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_FOUND = 'Объект не был найден ни в одном товарном компоненте (%s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_GO_BACK = 'Вернуться';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SUBMIT = 'Отправить';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_NEXT = 'Далее';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_CONTINUE = 'Продолжить';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SAVE = 'Сохранить';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_FINISH = 'Завершить';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE = 'Удалить';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE_SELECTED = 'Удалить выбранные';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_RUN_EXCHANGE = 'Запустить обмен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_TYPE_AND_FORMAT = 'Формат';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_SELECTION = 'Выбор объектов для сопоставления';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_MATCHING = 'Соответствие полей';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_CML = 'Настройка автоматического обмена с 1C/МойСклад';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_FINISH = 'Завершение';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_EXCHANGE_NAME = 'Новый обмен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FOUND_NOT_FINISHED_OBJECT = 'Найден ненастроенный обмен';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_WAIT = 'Пожалуйста, подождите';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_WAIT_EXCHANGE_FINISH = 'Пожалуйста, подождите<br>окончания процесса обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ZIP_EXTENSION_NOT_FOUND = 'PHP-расширение LibZip не найдено! Использование архивов невозможно.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_UPLOAD_INFO = 'Настройки вашего сервера:<br>
— максимально возможное количество загружаемых файлов за раз: %s<br>
— максимальный суммарный размер загружаемых файлов: %s<br>
— максимальный размер одного загружаемого файла: %s<br>';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SKIP_FIRST = 'Пропустить первые';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ROWS_IN_FILE = 'строк в файле';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV = 'Файл <b>"%s"</b>';
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_PRICE', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV);
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_XLS', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV . ', лист <b>«%s»</b>');
const NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML = 'Раздел <b>«%s»</b>';
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_YML', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV . ', ' . NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML);
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_AT_LEAST_ONE_OBJECT_FOR_MATCHING = 'Выберите хотя бы один объект для сопоставления!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_MATCHED = 'Не сопоставлено';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOTIFICATION_FOR_AUTOMATED_MODE = 'В данном режиме файлы будут загружены автоматически из 1С/МойСклад.<br>На следующем шаге вам будет предложена инструкция для настройки обмена.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WARNING_LARGE_FILE_SIZE = 'Размер файла <b>«%s»</b> превышает приемлемый. При обработке данного файла, вероятно, могут возникнуть проблемы.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_1 = 'Шаг 1: Создайте обмен 1C/МойСклад с сайтом, используя следующие данные';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_URL = 'URL для 1C/МойСклад';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_LOGIN = 'Логин';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_PASSWORD = 'Пароль';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_2 = 'Шаг 2: Запустите обмен на стороне 1C/МойСклад вручную, дождитесь окончания выгрузки, затем убедитесь в том, что файлы появились на сайте';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS = 'Статус файлов обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_HAS = 'Файлы есть';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_HAS_NOT = 'Файлов пока нет';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_REFRESH = 'Обновить статус';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3 = 'Шаг 3: Продолжите прохождение мастера настройки обмена';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3_DETAILS_WAIT = 'Продолжить пока нельзя, т.к. файлы для импорта не были найдены.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3_DETAILS_CONTINUE = 'Нажмите «Далее», чтобы продолжить.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILES_NOT_FOUND_PLEASE_WAIT = 'Файлы импорта не найдены! Пожалуйста, дождитесь их появления.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_AUTOMATED_MODE_ACTIVE = 'Запускать автоматический импорт при получении файлов';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WARNINGS = 'Предупреждения';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LIMITS_WARNING = 'Настоятельно рекомендуем повысить значение характеристик <b><code>memory_limit</code></b> и <b><code>max_execution_time</code></b>.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_IN_PROCESS = 'В процессе (%s%%)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_FINISHED = 'Завершено<br> %s';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_NOT_STARTED = 'Не запущено';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFO_IMPORTING_RIGHT_NOW = 'Внимание! В данный момент происходит импортирование данных. Завершено на: %s%%.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFO_EXCHANGE_STUCK = 'Похоже, что обмен работает дольше обычного. Возможно, обмен прервался по техническим причинам. Перед новым запуском импорта необходимо сбросить состояние импорта к состоянию <i>«Не запущено»</i>.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RESET_STATUS = 'Сбросить состояние импорта';

// Название разделом, создаваемых по умолчанию
const NETCAT_MODULE_NETSHOP_CART_SUBDIVISION_NAME = 'Корзина';
const NETCAT_MODULE_NETSHOP_ORDER_SUCCESS_SUBDIVISION_NAME = 'Заказ оформлен';
const NETCAT_MODULE_NETSHOP_ORDER_LIST_SUBDIVISION_NAME = 'Мои заказы';
const NETCAT_MODULE_NETSHOP_COMPARE_SUBDIVISION_NAME = 'Сравнение товаров';
const NETCAT_MODULE_NETSHOP_FAVORITES_SUBDIVISION_NAME = 'Избранные товары'; 
const NETCAT_MODULE_NETSHOP_DELIVERY_SUBDIVISION_NAME = 'Условия доставки и возврата';