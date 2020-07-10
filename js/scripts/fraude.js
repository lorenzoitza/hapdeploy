$ = jQuery.noConflict();


$(document).ready(function() {


    $('#fullpage').fullpage({
        licenseKey: 'F33D191A-30EF449F-B9750C26-DE7A9366',
        parallaxKey: 'EE9CB110-DF134EC4-A7D30434-DCB009BE',
        lockAnchors: true,
        anchors: ['section0', 'section1', 'section2', 'section3'],

        //Desplazamiento
        css3: true,
        scrollingSpeed: 730,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 720,
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
        touchSensitivity: 25,
        bigSectionsDestination: null,

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
            var loadedSection = this;

            if (loadedSection.index == 1 && direction == 'down') {
                $(".fxInRight").addClass("fadeInRightF");


            } else if (loadedSection.index == 1 && direction == 'up') {
                $(".fxInRight").removeClass("fadeInRightF");
                $(".fx").addClass("animated");

            } else if (loadedSection.index == 2 && direction == 'down') {

                $(".fxInRight").removeClass("fadeInRightF");

            } else if (loadedSection.index == 2 && direction == 'up') {

                $(".fxInRight").removeClass("fadeInRightF");

            } else if (loadedSection.index == 3 && direction == 'up') {

                $(".fxInRight").addClass("fadeInRightF");

            }


        },
        afterLoad: function(anchorLink, index, direction) {

            var loadedSection = this;

            //using index
            if (loadedSection.index == 0 && direction == 'down') {
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");

            } else if (loadedSection.index == 0 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");

            } else if (loadedSection.index == 1 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");


            } else if (loadedSection.index == 1 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");
                $(".fx").addClass("animated");

            } else if (loadedSection.index == 2 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");
                $(".fxInUp").addClass("fadeInUpFooter");
                $(".fxInDown").addClass("fadeInDownFooter");
                $(".fxIn").addClass("fadeInFooter");

            } else if (loadedSection.index == 2 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");




            } else if (loadedSection.index == 3 && direction == 'down') {
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");

            } else if (loadedSection.index == 3 && direction == 'up') {
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");
                $(".fxInUp").removeClass("fadeInUpFooter");
                $(".fxInDown").removeClass("fadeInDownFooter");
                $(".fxIn").removeClass("fadeInFooter");

            } else if (loadedSection.index == 4 && direction == 'up') {


            } else {


            }


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