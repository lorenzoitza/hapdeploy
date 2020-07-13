$(document).ready(function() {


    $('#fullpage').fullpage({
        // licenseKey: 'F33D191A-30EF449F-B9750C26-DE7A9366',
        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
        lockAnchors: true,
        anchors: ['section0', 'section1', 'section2', 'section3'],

        //Desplazamiento
        css3: true,
        scrollingSpeed: 730,
        autoScrolling: true,
        fitToSection: false,
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
            var loadedSection = this;
            if (loadedSection.index == 0 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");
                $(".fxInRightCC").addClass("fadeInRightCC");

            } else if (loadedSection.index == 0 && direction == 'up') {
                $(".fx").removeClass("animated");
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                // $(".logoScrollTop").removeClass("logo-bg");
                // $(".bg-div").removeClass("bg-arena");
                $(".fxInRightC").removeClass("fadeInRightC");

            } else if (loadedSection.index == 1 && direction == 'down') {
                $(".fx").removeClass("animated");
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $("#indexlogo").attr("src", "media/Logo_HAP.png");
                // $(".navbar").removeClass("navbar-dark");
                // $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                // $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                $(".fxInUpC").addClass("fadeInUpC");
                $(".fxInDownC").addClass("fadeInDownC");
                $(".fxInLeftC").addClass("fadeInLeftC");
                $(".fxInRightC").removeClass("fadeInRightC");




            } else if (loadedSection.index == 1 && direction == 'up') {
                $(".fx").removeClass("animated");
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                $(".logoScrollTop").removeClass("logo-bg");
                $(".bg-div").removeClass("bg-arena");
                $(".fxInUpC").removeClass("fadeInUpC");
                $(".fxInDownC").removeClass("fadeInDownC");
                $(".fxInLeftC").removeClass("fadeInLeftC");
                $(".fxInRightC").removeClass("fadeInRightC");
                $(".fxInRightCC").removeClass("fadeInRightCC");


            } else if (loadedSection.index == 2 && direction == 'down') {
                $(".fx").removeClass("animated");
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".logoScrollTop").removeClass("logo-bg");
                $(".bg-div").removeClass("bg-arena");




            } else if (loadedSection.index == 2 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");
                $(".fx").addClass("animated");
                $(".fxInRightCC").addClass("fadeInRightCC");




            } else if (loadedSection.index == 3 && direction == 'down') {
                $(".fx").removeClass("animated");
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                $(".logoScrollTop").removeClass("logo-bg");
                $(".bg-div").removeClass("bg-arena");


            } else if (loadedSection.index == 3 && direction == 'up') {
                $(".fx").removeClass("animated");
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                // $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                // $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");
                $(".fx").addClass("animated");
                $(".fxInUpC").addClass("fadeInUpC");
                $(".fxInDownC").addClass("fadeInDownC");
                $(".fxInLeftC").addClass("fadeInLeftC");

            } else if (loadedSection.index == 4 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                // $(".logoScrollTop").addClass("logo-bg");
                // $(".bg-div").addClass("bg-arena");
                $(".fx").addClass("animated");
                $(".fxInRightCC").addClass("fadeInRightCC");




            }

            // alert(loadedSection.index + " " + direction);

        },
        afterLoad: function(anchorLink, index, direction) {

            var loadedSection = this;


            if (loadedSection.index == 1 && direction == 'down') {
                $(".fxInRightCC").removeClass("fadeInRightCC");


            } else if (loadedSection.index == 2 && direction == 'up') {
                $(".fxInUpC").removeClass("fadeInUpC");
                $(".fxInDownC").removeClass("fadeInDownC");
                $(".fxInLeftC").removeClass("fadeInLeftC");
                $(".fxInRightC").removeClass("fadeInRightC");





            } else if (loadedSection.index == 2 && direction == 'down') {
                $(".fxInUpC").removeClass("fadeInUpC");
                $(".fxInDownC").removeClass("fadeInDownC");
                $(".fxInLeftC").removeClass("fadeInLeftC");
                $(".fxInRightCC").removeClass("fadeInRightCC");



            } else if (loadedSection.index == 3 && direction == 'down') {

                $(".fxInUp").addClass("fadeInUpFooter");
                $(".fxInDown").addClass("fadeInDownFooter");
                $(".fxIn").addClass("fadeInFooter");


            } else
            if (loadedSection.index == 4 && direction == 'up') {
                $(".fxInUp").removeClass("fadeInUpFooter");
                $(".fxInDown").removeClass("fadeInDownFooter");
                $(".fxIn").removeClass("fadeInFooter");

            }
        },
        afterRender: function() {
            // $(".fx").removeClass("animated");
        },
        afterResize: function() {},
        afterResponsive: function(isResponsive) {},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {

        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {

        }
    });





});