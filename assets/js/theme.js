jQuery(document).ready(function ($) {
    "use strict";
    $(document).ready(function () {
        scroll();
        mobileBanner();
    });

    function scroll() {

        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('.scroll-top').fadeIn();
            } else {
                $('.scroll-top').fadeOut();
            }


        });
        $('.scroll-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });

        // Scroll Down Elements
        $('.scroll-down[href^="#"], .scroll-to-target[href^="#"]').on('click', function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    };
    
    function mobileBanner() {
        $(window).scroll(function() {
              if ($(this).scrollTop() > $(document).height() - $(window).height() - 100) {
              $('.foot').fadeOut();
            }
            else {
              $('.foot').fadeIn(200);
            }
    });
    $('a[href="#"]' ).click( function(e) {
      e.preventDefault();
    });
};


});