$ = jQuery.noConflict();


/*
$('a#btn_Clic').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang);

});*/

$(document).ready(function() {


    $('#fullpage').fullpage({
        licenseKey: 'F33D191A-30EF449F-B9750C26-DE7A9366',
        lockAnchors: true,
        anchors: ['section0', 'section1', 'section2', 'section3'],

        //Desplazamiento
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        dragAndMove: false,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: true,
        scrollOverflowReset: true,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        bigSectionsDestination: null,

        //Accesibilidad
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Diseno
        controlArrows: true,
        parallax: true,
        parallaxOptions: { type: 'reveal', percentage: 62, property: 'translate' },

        //Custom selectors
        sectionSelector: '.section',


        lazyLoading: true,

        //events
        onLeave: function(index, nextIndex, direction) {
            var leavingSection = this;

            //después de abandonar la sección 2
            if (origin.index == 2 && direction == 'down') {
                alert("Me estoy moviendo a la sección 3!");
            } else if (origin.index == 2 && direction == 'up') {
                alert("Me estoy moviendo a la sección 1!");
            }

            // if (destination.index == 2) {
            //     alert("First");
            //     $("#indexlogo").attr("src", "media/Logo_HAP_Dark.svg");
            // } else {
            //     $("#indexlogo").attr("src", "media/Logo_HAP.svg");
            // }

        },
        afterLoad: function(anchorLink, index, direction) {

            var loadedSection = this;

            //using index
            // if (loadedSection.index == 2 && direction == 'down') {
            //     $("#indexlogo").attr("src", "media/Logo_HAP_Dark.svg");
            //     $(".navbar").addClass("navbar-dark");

            // } else {
            //     $("#indexlogo").attr("src", "media/Logo_HAP.svg");
            //     $(".navbar").removeClass("navbar-dark");
            // }
        },
        afterRender: function() {
            //using anchorLink
            // if (origin.anchor == 'section2') {
            //     var wow = new WOW({
            //         boxClass: 'wow', // animated element css class (default is wow)
            //         animateClass: 'animated', // animation css class (default is animated)
            //         offset: 0, // distance to the element when triggering the animation (default is 0)
            //         mobile: true, // trigger animations on mobile devices (default is true)
            //         live: true, // act on asynchronously loaded content (default is true)
            //         callback: function(box) {
            //             // the callback is fired every time an animation is started
            //             // the argument that is passed in is the DOM node being animated
            //         },
            //         scrollContainer: null, // optional scroll container selector, otherwise use window,
            //         resetAnimation: true, // reset animation on end (default is true)
            //     });
            //     wow.init();
            // }
        },
        afterResize: function() {},
        afterResponsive: function(isResponsive) {},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {

        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {

        }
    });

    // Change logo on sections
    // var $changeDarkLogo = $("#section0").height() + $("#section1").height() + $("#section2").height();
    // $(window).on("scroll", function() {
    //     if ($(this).scrollTop() > $changeDarkLogo) {
    //         $("#indexlogo").attr("src", "media/Logo_HAP_Dark.svg");
    //     } else {
    //         $("#indexlogo").attr("src", "media/Logo_HAP.svg");
    //     }
    // });





});





$('a#btn_ClicEs').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang),

        $(".translateEs").removeClass("opacity03"),
        $(".translateFr").removeClass("opacity03"),
        $(".translateEn").removeClass("opacity03"),

        $(".translateEs").removeClass("opacity1"),
        $(".translateFr").removeClass("opacity1"),
        $(".translateEn").removeClass("opacity1"),

        $(".translateEs").addClass("opacity03"),
        $(".translateFr").addClass("opacity1"),
        $(".translateEn").addClass("opacity1"),

        $(".translateEs").removeClass("imgZoom"),
        $(".translateFr").removeClass("imgZoom"),
        $(".translateEn").removeClass("imgZoom"),
        $(".translateFr").addClass("imgZoom"),
        $(".translateEn").addClass("imgZoom");

});

$('a#btn_ClicFr').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang),

        $(".translateEs").removeClass("opacity03"),
        $(".translateFr").removeClass("opacity03"),
        $(".translateEn").removeClass("opacity03"),

        $(".translateEs").removeClass("opacity1"),
        $(".translateFr").removeClass("opacity1"),
        $(".translateEn").removeClass("opacity1"),

        $(".translateFr").addClass("opacity03"),
        $(".translateEs").addClass("opacity1"),
        $(".translateEn").addClass("opacity1"),

        $(".translateEs").removeClass("imgZoom"),
        $(".translateFr").removeClass("imgZoom"),
        $(".translateEn").removeClass("imgZoom"),
        $(".translateEs").addClass("imgZoom"),
        $(".translateEn").addClass("imgZoom");

});

$('a#btn_ClicEn').on('click', function() {

    var lang = $(this).data('lang');

    $('html').prop('lang', lang),

        $(".translateEs").removeClass("opacity03"),
        $(".translateFr").removeClass("opacity03"),
        $(".translateEn").removeClass("opacity03"),

        $(".translateEs").removeClass("opacity1"),
        $(".translateFr").removeClass("opacity1"),
        $(".translateEn").removeClass("opacity1"),

        $(".translateEn").addClass("opacity03"),
        $(".translateEs").addClass("opacity1"),
        $(".translateFr").addClass("opacity1"),

        $(".translateEs").removeClass("imgZoom"),
        $(".translateFr").removeClass("imgZoom"),
        $(".translateEn").removeClass("imgZoom"),
        $(".translateEs").addClass("imgZoom"),
        $(".translateFr").addClass("imgZoom");

});

if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").on("hover", function() {
        $(".pushwrap").toggleClass("active");
        $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
    }), $("#close_side_menu").on("hover", function() {
        $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
    }), $(".side-nav .navbar-nav .nav-link").on("hover", function() {
        $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
    }), $("#btn_sideNavClose").on("hover", function() {
        $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
    });

}
if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").mouseenter(function() {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"),
                $("#close_side_menu").fadeIn(700)
        }),
        $("#close_side_menu").on("clic", function() {
            $(".side-menu").removeClass("side-menu-active"),
                $(this).fadeOut(200),
                $(".pushwrap").removeClass("active")
        }),
        $(".side-nav .navbar-nav .nav-link").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"),
                $("#close_side_menu").fadeOut(200),
                $(".pushwrap").removeClass("active")
        }),
        $(".side-menu").mouseleave(function() {
            $(".side-menu").removeClass("side-menu-active"),
                $("#close_side_menu").fadeOut(200),
                $(".pushwrap").removeClass("active")
        });

}

$(document).on('click', '.scroll-down-section', function() {

    fullpage_api.moveSectionDown();

});

$(document).on('click', '.logoScrollTop', function() {

    fullpage_api.moveTo(1);

});






/* =====================================
          Parallax
   ====================================== */

if ($(window).width() > 992) {
    $(".parallax").parallaxie({
        speed: 0.55,
        offset: 0,
    });
}


jQuery(function($) {


    "use strict";


    /* ===================================
            Scroll
    ====================================== */


    // $(window).on('scroll', function () {
    //     if ($(this).scrollTop() > 220) { // Set position from top to add class
    //         $('header').addClass('header-appear');
    //     } else {
    //         $('header').removeClass('header-appear');
    //     }
    // });



    //scroll to appear
    // $(window).on('scroll', function () {
    //     if ($(this).scrollTop() > 500)
    //         $('.scroll-top-arrow').fadeIn('slow');
    //     else
    //         $('.scroll-top-arrow').fadeOut('slow');
    // });



    //  fixing bottom nav to top on scrolliing
    // var $fixednav = $(".bottom-nav");
    // $(window).on("scroll", function () {
    //     var $heightcalc = $(window).height() - $fixednav.height();
    //     if ($(this).scrollTop() > $heightcalc) {
    //         $fixednav.addClass("navbar-bottom-top");
    //     } else {
    //         $fixednav.removeClass("navbar-bottom-top");
    //     }
    // });

    //Click event to scroll to top
    // $(document).on('click', '.scroll-top-arrow', function () {
    //     $('html, body').animate({ scrollTop: 0 }, 800);
    //     return false;
    // });






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




    // if ($(".side-right-btn").length) {

    //     $(".side-right-btn").click(function () {
    //         $(".navbar.navbar-right").toggleClass('show');
    //     }),
    //         $(".navbar.navbar-right .navbar-nav .nav-link").click(function () {
    //             $(".navbar.navbar-right").toggleClass('show');
    //         });

    // }







    /* =====================================
          Wow
     ======================================== */


});