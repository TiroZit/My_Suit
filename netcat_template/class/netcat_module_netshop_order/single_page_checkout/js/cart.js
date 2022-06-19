document.addEventListener("DOMContentLoaded", function() {

    $(document).on('ncNetshopCartDeliveryNeedToUpdate', function(){
        var params = {
            nc_ctpl: 'single_page_checkout_delivery',
            f_City: $('input[name="f_City"]').val(),
            f_Address: $('input[name="f_Address"]').val(),
            f_Zip: $('input[name="f_Zip"]').val()
            //delivery_point_id: $('select[name="delivery_point_id"]').val(),
            //delivery_variant_id: $('input[name="delivery_variant_id"]:checked').val()
        }
        nc_partial_load(
            [ [ cc , { nc_ctpl: 'single_page_checkout_delivery' }, params ] ],
        function(){dropDown()}
        )
    });

    $(document).on('ncNetshopCartPaymentNeedToUpdate', function(){
        var params = {
            nc_ctpl: 'single_page_checkout_payment',
            f_City: $('input[name="f_City"]').val(),
            f_Address: $('input[name="f_Address"]').val(),
            f_Zip: $('input[name="f_Zip"]').val(),
            delivery_point_id: $('select[name="delivery_point_id"]').val(),
            delivery_variant_id: $('input[name="delivery_variant_id"]:checked').val()
        }
        nc_partial_load(
            [ [ cc , { nc_ctpl: 'single_page_checkout_payment' }, params ] ]
        )
    })

    $(document).on('click', '.js-cart-submit', function(){
        $('.js-cart').submit()
        console.log('submit')
    })

    dropDown();
    nc_netshop_cart_change_quantity();
    nc_netshop_cart_remove();
    nc_netchop_cart_update();
    nc_netshop_cart_validate_form();
    nc_netshop_cart_coupon_add();
    nc_netshop_cart_coupon_remove();
},false)

function nc_netshop_cart_coupon_remove(){
    $(document).on('click','.js-coupon-remove', function(){
        var btn = $(this)
        var row = btn.closest('.js-coupon-holder')
        var container = $('.js-coupon')
        $.post(container.data('action'), btn.attr('name') + "=" + btn.val(), function (response) {
            row.remove();
            var all_rows = $('.js-coupon-container .js-coupon-holder');
            if( all_rows.length == 0 ){
                $('.js-coupons-active').hide();
            }
            nc_netshop_cart_update_total( response )
        }, 'json');
    })
}
function nc_netshop_cart_coupon_add(){
    $(document).on('click','.js-coupon-add', function(){
        var btn = $(this);
        var container = btn.closest('.js-coupon');
        var input = container.find('.js-coupon-add-input');
        var error = $('.js-coupon-error')
        $.post(container.data('action'), input.attr('name') + "=" + input.val(), function (response) {

            if( response.notifications[ input.val() ].type == 'error'){
                showError( response.notifications[ input.val() ].message, input, {
                    classOuter: 'cart-error',
                    classInner: 'cart-error-text',
                    timeout: 5000
                })
            }else{
                var template = $('.js-coupon-holder-template');
                var container = $('.js-coupon-container');
                container.html('')
                $.each( response.coupons , function( key, coupon ) {
                    var coupon_el = template.clone();
                    coupon_el.removeClass('template js-coupon-holder-template')
                    coupon_el.find('.tpl-block-cart-coupon-code').text( coupon.code + ' (' + coupon.amount_text + ')' );
                    coupon_el.find('.js-coupon-remove').val( coupon.code )
                    container.append( coupon_el )
                });
                $('.js-coupons-active').show();
                nc_netshop_cart_update_total( response );
            }
        }, 'json');

    })
}
function nc_netshop_cart_validate_form(){
    var $btns = $('.js-cart-stage-btn');
    var $forms = $('.js-stage-form')

    $forms.each(function(){
        var self = $(this);
        var btn = self.find('.js-cart-stage-btn');
        var nextStageId = btn.attr('data-nextStage')
        var nextStage = $(nextStageId);

        var phoneInputs = self.find('.js-input-phone');
        phoneInputs.each(function(){
            //maskPhone($(this))
        })

        btn.on('click', function(){
            var inputs = self.find('input,textarea,select')
            var nonRequiredInputsValid = validateNonRequiredInputs(inputs)
            var is_valid = true;

            // убираем возможные ошибки
            $('.cart-error').remove();

            if (!nonRequiredInputsValid) return false;

            // проверяем есть ли что-то в корзине
            var cartItems = $('.js-cart-item').filter(':not(.deleted)');
            if (cartItems.length === 0) {
                showError('Корзина пуста', self.find('.js-cart-table'), {
                    classOuter: 'cart-error',
                    classInner: 'cart-error-text',
                    timeout: 5000
                });
                return false
            }

            var requiredInputs = self.find('input,textarea,select').filter('[required]:visible, [data-required]:visible')

            if (!requiredInputs.length) {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('#nc_netshop_add_order_form').offset().top
                }, 1000);
                self.removeClass('active')
                nextStage.addClass('active');
                changeActiveStateLabel(nextStageId);
                return false
            }


            requiredInputs.on( "invalid",
                function(e) {
                    e.preventDefault();
                });

            requiredInputs.each(function(){
                var input = $(this);

                if (input.hasClass('js-input-name')
                    && input.val() === '' ){
                    showInputError(input, 'Введите имя')
                    is_valid = false;
                }
                else if (input.hasClass('js-input-city')
                    && input.val() === '' ){
                    showInputError(input, 'Выберите город')
                    is_valid = false;
                }else if( input.hasClass('js-input-email') && !validateEmail(input) ){
                    showInputError(input, 'Неправильный формат эл. почты')
                    is_valid = false;

                }else if( input.val() === '' ){
                    showInputError(input, 'Заполните поле')
                    is_valid = false;

                }
            });


            if(is_valid) {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('#nc_netshop_add_order_form').offset().top
                }, 1000);
                nextStage.addClass('active');
                self.removeClass('active')
                changeActiveStateLabel(nextStageId)
            }


        })
    })
}
function showError(message, input, config){
    var classOuter = config.classOuter,
        classInner = config.classInner
    var $input = $(input)
    if (!$input.siblings('.' + classOuter).length) {
        var error = $('<div class='+ classOuter +'><div class='+ classInner +'>'+ message +'</div></div>');
        $input.after(error);

        function hideError() {
            error.slideUp(500, function() { $(this).remove(); });
        }
        if (config.timeout) {
            setTimeout(hideError, config.timeout);
        }
        $input.one('input', hideError);
    }
}
function showInputError(name, text) {
    return showError(text, name, {
        classOuter: 'cart-error',
        classInner: 'cart-error-text'
    })
}
function changeActiveStateLabel(activeStage){
    var labels = $('.js-stage-labels');

    labels.each(function(){
        var labelItems = $(this).find('.js-stage-label');

        labelItems.each(function(){
            var self = $(this)
            var stage = self.attr('data-stage');

            if (stage == activeStage) {
                labelItems.removeClass('active');
                self.addClass('active')
            }
        })
    })
}
function validateNonRequiredInputs(inputs){
    var result = true;
    inputs.each(function(){
        var input = $(this);

        if (input.val() != '') {
            if (input.hasClass('js-input-email')
                && !validateEmail(input) ){
                showInputError(input, 'Неправильный формат e-mail')
                result = false;
            }
        }
    })

    return result;
}
function validateEmail(email){
    var email = email.val()
    return  email.indexOf('@') !== -1
        && email.indexOf('.') !== -1
        && email.lastIndexOf('.') - email.indexOf('@') > 1
        && email.lastIndexOf('.') < email.length - 1;
}
function nc_netshop_cart_remove(){
    var items = $('.js-cart-item');
    var form = items.closest('.js-cart-stage');

    items.each(function(){
        var self = $(this)
        var changeStatusBtn = self.find('.js-cart-item-changeStatus-btn');
        var status = self.find('.js-cart-item-status');
        var name = changeStatusBtn.data('name')
        var input = self.find('input[name="'+name+'"]');
        changeStatusBtn.on('click', function(){
            if (!self.hasClass('deleted')) {
                $.post(form.data('action'), name + "=0&json=1",function(response){
                    self.addClass('deleted')
                    status.val(1);
                    nc_netshop_cart_update_total( response )
                    nc_event_dispatch('ncNetshopCartUpdate',{
                        cart:response
                    });
                }, 'json');

            }

            else if (self.hasClass('deleted')) {
                $.post(form.data('action'), name + '=' + input.val() + "&json=1", function (response) {
                    self.removeClass('deleted')
                    status.val(0);
                    nc_netshop_cart_update_total( response )

                    nc_event_dispatch('ncNetshopCartUpdate', {
                        cart: response,
                        modal: (response.QuantityNotifications ? true : false)
                    });
                }, 'json');
            }
        })
    })
}
function nc_netchop_cart_update(){
    var cartItems = $('.js-cart-item:not(.hidden)')

    cartItems.each(function(){
        var self = $(this)
        var id = self.data('item_id');
        var form = self.closest('.js-cart-stage');
        var quantity = self.find('.js-cart-item-quanity-input');
        var price = self.find('.js-cart-item-price-input')
        var sumField = self.find('.js-cart-item-sum');
        var sumInput = self.find('.js-cart-item-sum-input');

        quantity.on("change", function(){
            if( !self.hasClass('deleted') ) {
                $.post(form.data('action'), $(this).attr('name') + '=' + $(this).val() + '&json=1', function (response) {
                    sumInput.val(response.Items[id].TotalPrice);
                    sumField.html(response.Items[id].TotalPriceF)
                    nc_netshop_cart_update_total( response )

                    nc_event_dispatch('ncNetshopCartUpdate', {
                        cart: response,
                        modal: (response.QuantityNotifications ? true : false)
                    });
                }, 'json');
            }



        })

    })

}
function nc_netshop_cart_update_total( data ){
    var totalSumField = $('.js-cart-item-sumTotal-input')
    var totalSumInput = $('.js-cart-item-sumTotal')

    totalSumInput.html( data.TotalItemPriceF )
    totalSumField.val( data.TotalItemPrice )
}

function nc_netshop_cart_change_quantity(){
    var $inputs = $('.js-quantity')

    $inputs.each(function(){

        var $btnLess = $(this).find('.js-quantity-btn--less')
        var $btnMore = $(this).find('.js-quantity-btn--more')
        var $input = $(this).find('.js-quantity-input')

        var val = +$input.val();
        var min = +$input.attr('min')
        var max = +$input.attr('max')
        var step = +$input.attr('step')

        $input.on('change', function() {
            val = +$input.val();
        })

        $btnLess.on('click', function(){
            if (val - step > min) {
                val = val - step
                $input.val(val);
                $input.trigger("change")
            }
        })

        $btnMore.on('click', function(){
            if (isNaN(max) || (val + step <= max)) {
                val = val + step;
                $input.val(val);
                $input.trigger("change")
            }
        })


    })
}

function dropDown() {

    var $sel = $('.select');
    if (!$sel.length) return false;

    $sel.each(function(){

        var $self = $(this),
            $select = $(this).find('select'),
            $value = $select.val(),
            $currentValue = $select.find('option:selected').text(),
            $name = $select.attr('name'),
            $customClass = $select.attr("data-custom-class"),

            listClass = 'select-list',
            selectClass = 'select';

        $select.attr('name', '_'+$name);

        function appendFakeSelect()	{

            var template = '<div class="'+$customClass+'-value select-val">' + $currentValue+'</div> <ul class="'+$customClass+'-list select-list"> ';

            $select.find('option').each(function(){
                var $this = $(this);
                template += '<li class="'+$customClass+'-item" value="'+$this.attr('value')+'" data-value="'+$this.attr('value')+'">'+$this.text()+'</li>';
            });

            template += '</ul>';


            $select.before(template);

        };
        appendFakeSelect();

        var $list = $self.find('.'+$customClass+'-list')
        var $fakeValue = $self.find('.'+$customClass+'-value')

        function showList() {
            $list.addClass('active');
            $self.addClass('active');
        };

        function hideList() {
            $list.removeClass('active');
            $self.removeClass('active');
        };

        function hideOther() {
            $('.'+selectClass+'.active').removeClass('active').find('.'+listClass).removeClass('active');
        };

        function changeValue($item) {
            var t = $item.text();
            var v = $item.attr('data-value');
            $fakeValue.text(t);
            $select.val(v).trigger('change');
        };


        $select.on('change', function(val){
            if (val !== $value) {
                $value = val
                var selValue = $select.find('option:selected').text()
                $fakeValue.text(selValue);
            }
        })



        $self.on('click', function(e){
            if ($(this).find('select').is(':hidden')) {
                e.preventDefault();
                if ($(e.target).closest('.'+listClass).length) {
                    changeValue($(e.target).closest('li'));
                    hideList();
                }
                else if (!$(e.target).closest('.'+selectClass).hasClass('active')) {
                    hideOther();
                    showList();
                }
                else {
                    hideList();
                }
            }
        });


        $('html').on('click', function(e){
            if (!$(e.target).closest('.'+selectClass).length) {
                hideOther();
            }
        });

    });

};