jQuery.noConflict();
(function ($) {
    $(document).ready(function () {



        //---- hide select box (brands in contact form) in single product ----------------------------------------------------------//

        if ($('.prodlist').hasClass('p3')) {
            $('.hide-in-single-product').hide();
            $('.change-to12').removeClass('col-md-6').addClass('col-md-12');
        }

        //---- heights IN PRODUCT----------------------------------------------------------//
        // Make same heights for text in product

        function heightsInProduct() {

            if (jQuery(window).width() > 768) {

                // Get an array of all element heights
                var elementHeights = $('.productText').map(function () {
                    return $(this).height();
                }).get();

                // Math.max takes a variable number of arguments
                // `apply` is equivalent to passing each height as an argument
                var maxHeight = Math.max.apply(null, elementHeights);

                // Set each height to the max height
                $('.productText').height(maxHeight);

            }

        }


        //----IMAGES IN PRODUCT----------------------------------------------------------//

        $('.productImages .row.two a').addClass('col-sm-6');
        $('.productImages .row.three a').addClass('col-sm-4');
        $('.productImages .row.four a').addClass('col-sm-3');


        //----SLIDER----------------------------------------------------------//

        $(".field-name-field-hat-image .field-items").responsiveSlides({
            auto: true,
            timeout: 4000,
            speed: 3000,
            pager: true,
        });

        //--------------------------------------------------------------//
        $('.ordernowform').hide();
        $('.openOrderFormBtn').click(
            function () {
                $('.ordernowform').slideDown();
                $('.openOrderFormBtn').hide();
            }
        );

        //--------------------------------------------------------------//


        /*---------------------------------------------------------------------------*/

        // вычисляет размер экрата и добавляет классы от бутстрапа к BODY
        var pageTransitions = [
            ['lg', 1200],
            ['md', 992],
            ['sm', 539],
            ['xs', 480],
            ['xs phone', 0]
        ]; // number shows minimum size - must be from high to low
        function resize() {
            var target = 0;
            $.each(pageTransitions, function (index, pageTransition) {
                if (jQuery(window).width() > pageTransition[1]) {
                    target = index;
                    return false;
                }
            });
            $.each(pageTransitions, function (index, pageTransition) {
                $('body').removeClass(pageTransition[0]);
            });
            $('body').addClass(pageTransitions[target][0]);
        }

        resize();
        heightsInProduct();

        // Вызывает функции при изменении размера окна
        jQuery(window).on('resize', function () {
            resize();
            heightsInProduct();
        });


        /*---------------------------------------------------------------------------*/


        //--------------------------------------------------------------//
        //--------------------------------------------------------------//


    });
})(jQuery);  