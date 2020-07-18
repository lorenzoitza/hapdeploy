$(document).ready(function() {


    $('#fullpage').fullpage({
        licenseKey: 'F33D191A-30EF449F-B9750C26-DE7A9366',
        lockAnchors: true,
        anchors: ['section0', 'section1', 'section2', 'section3'],

        //Desplazamiento
        css3: true,
        scrollingSpeed: 730,
        autoScrolling: true,
        fitToSection: false,
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
        dragAndMove: true,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        normalScrollElements: '.scrollable-content',
        scrollOverflow: true,
        scrollOverflowReset: true,
        scrollOverflowOptions: null,
        touchSensitivity: 5,
        bigSectionsDestination: 'top',

        //Accesibilidad
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Diseno
        controlArrows: true,
        parallax: true,
        parallaxOptions: { type: 'cover', percentage: 62, property: 'translate' },

        //Custom selectors
        sectionSelector: '.section',


        lazyLoading: true,

        //events
        onLeave: function(index, nextIndex, direction) {
            // var loadedSection = this;
            // if (loadedSection.index == 1 && direction == 'down') {
            //     // $("#indexlogo").attr("src", "media/Logo_HAP.png");
            //     // $(".navbar").removeClass("navbar-dark");
            //     $(".logoScrollTop").removeClass("logo-bg");
            //     $(".bg-div").removeClass("bg-arena");
            //     $(".fx").addClass("animated");

            // } else if (loadedSection.index == 3 && direction == 'up') {
            //     $(".fx").addClass("animated");
            //     $(".fxInUp").removeClass("fadeInUpFooter");
            //     $(".fxInDown").removeClass("fadeInDownFooter");
            //     $(".fxIn").removeClass("fadeInFooter");

            // }

        },
        afterLoad: function(anchorLink, index, direction) {

            var loadedSection = this;

            //using index
            if (loadedSection.index == 0 && direction == 'down') {
                // $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                // $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");
                $(".fx").removeClass("animated");

            } else if (loadedSection.index == 2 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");
                $(".fx").removeClass("animated");
                $(".fxInUp").addClass("fadeInUpFooter");
                $(".fxInDown").addClass("fadeInDownFooter");
                $(".fxIn").addClass("fadeInFooter");

            } else if (loadedSection.index == 2 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");
                $(".fx").removeClass("animated");

            } else if (loadedSection.index == 3 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");
                $(".fx").addClass("animated");
            } else if (loadedSection.index == 3 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");
                $(".fx").addClass("animated");
            }

            // alert(loadedSection.index + " " + direction);

        },
        afterRender: function() {

        },
        afterResize: function() {},
        afterResponsive: function(isResponsive) {},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {

        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {

        }
    });



});