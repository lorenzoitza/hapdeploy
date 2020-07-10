$ = jQuery.noConflict();


/*
$('a#btn_Clic').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang);

});
*/

$('#fullpage').fullpage({
    anchors: ['section0', 'section1', 'section2', 'section3', 'section4']
});


$('a#btn_ClicEs').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang);
    document.getElementById("imgFlagEs").style.opacity = "0.3";
    document.getElementById("imgFlagFr").style.opacity = "1";
    document.getElementById("imgFlagEn").style.opacity = "1";

});

$('a#btn_ClicFr').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang);
    document.getElementById("imgFlagFr").style.opacity = "0.3";
    document.getElementById("imgFlagEs").style.opacity = "1";
    document.getElementById("imgFlagEn").style.opacity = "1";

});

$('a#btn_ClicEn').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang);
    document.getElementById("imgFlagEn").style.opacity = "0.3";
    document.getElementById("imgFlagEs").style.opacity = "1";
    document.getElementById("imgFlagFr").style.opacity = "1";

});

jQuery(function($) {


    "use strict";


    /* ===================================
            Scroll
    ====================================== */


    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 220) { // Set position from top to add class
            $('header').addClass('header-appear');
        } else {
            $('header').removeClass('header-appear');
        }
    });



    //scroll to appear
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 500)
            $('.scroll-top-arrow').fadeIn('slow');
        else
            $('.scroll-top-arrow').fadeOut('slow');
    });

    // fixing bottom nav to top on scrolliing
    var $fixednav = $(".bottom-nav");
    $(window).on("scroll", function() {
        var $heightcalc = $(window).height() - $fixednav.height();
        if ($(this).scrollTop() > $heightcalc) {
            $fixednav.addClass("navbar-bottom-top");
        } else {
            $fixednav.removeClass("navbar-bottom-top");
        }
    });

    //Click event to scroll to top
    $(document).on('click', '.scroll-top-arrow', function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    $(document).on('click', '.scroll-top-arrow', function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    //scroll sections
    if ($("body").hasClass("intrective")) {
        $(".scroll").on("click", function(event) {
            event.preventDefault();
            $("html,body").animate({
                scrollTop: $(this.hash).offset().top
            }, 1200);
        });

    } else {

        $(".scroll").on("click", function(event) {
            event.preventDefault();
            $("html,body").animate({
                scrollTop: $(this.hash).offset().top - 60
            }, 1200);
        });

    }

    /* =====================================
           Parallax
    ====================================== */

    if ($(window).width() > 992) {
        $(".parallax").parallaxie({
            speed: 0.55,
            offset: 0,
        });
    }


    /* ===================================
       Side Menu
   ====================================== */
    if ($("#sidemenu_toggle").length) {
        $("#sidemenu_toggle").on("click", function() {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }), $(".side-nav .navbar-nav .nav-link").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        }), $("#btn_sideNavClose").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }

    if ($(".side-right-btn").length) {

        $(".side-right-btn").click(function() {
                $(".navbar.navbar-right").toggleClass('show');
            }),
            $(".navbar.navbar-right .navbar-nav .nav-link").click(function() {
                $(".navbar.navbar-right").toggleClass('show');
            });

    }







    /* =====================================
          Wow
     ======================================== */

    // if ($(window).width() > 767) {
    //     var wow = new WOW({
    //         boxClass: 'wow',
    //         animateClass: 'animated',
    //         offset: 0,
    //         mobile: false,
    //         live: true
    //     });
    //     new WOW().init();
    // }
});