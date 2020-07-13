// $ = jQuery.noConflict();


$(document).ready(function() {





    $('#fullpage').fullpage({
        licenseKey: 'F33D191A-30EF449F-B9750C26-DE7A9366',
        parallaxKey: 'EE9CB110-DF134EC4-A7D30434-DCB009BE',
        lockAnchors: true,
        anchors: ['section0', 'section1', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7'],

        //Desplazamiento
        css3: true,
        scrollingSpeed: 725,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 700,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: false,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: true,
        dragAndMove: false,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        normalScrollElements: '.scrollable-content',
        scrollOverflow: false,
        scrollOverflowReset: false,
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
            $("default").addClass(" fxFadeOut");
            $("default").removeClass(" fxFadeIn");

            if (loadedSection.index == 0 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");
                $("default").addClass(" fxFadeOut");
                $("default").removeClass(" fxFadeIn");

                //alert(loadedSection.index + " " + direction);



            } else if (loadedSection.index == 1 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                $(".fx").removeClass("animated");

                //alert(loadedSection.index + " " + direction);




            } else if (loadedSection.index == 2 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");


                //alert(loadedSection.index + " " + direction);



            } else if (loadedSection.index == 2 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");


                //alert(loadedSection.index + " " + direction);




            } else if (loadedSection.index == 3 && direction == 'down') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");




                //alert(loadedSection.index + " " + direction);



            } else if (loadedSection.index == 3 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".fx").removeClass("animated");
                $(".navbar").removeClass("navbar-dark");


                //alert(loadedSection.index + " " + direction);



            } else if (loadedSection.index == 4 && direction == 'up') {
                $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                $(".navbar").addClass("navbar-dark");
                $(".fx").addClass("animated");


                //alert(loadedSection.index + " " + direction);



            } else {
                $("#indexlogo").attr("src", "media/Logo_HAP.png");
                $(".navbar").removeClass("navbar-dark");
                $(".fx").removeClass("animated");



                // alert(loadedSection.index + " " + direction);


            }

        },
        afterLoad: function(anchorLink, index, direction) {


            $("default").removeClass(" fxFadeOut");
            $("default").addClass(" fxFadeIn");

            var loadedSection = this;

            if (loadedSection.index == 3 && direction == 'down') {
                // $("#indexlogo").attr("src", "media/Logo_HAP.png");
                // $(".navbar").removeClass("navbar-dark");
                $(".fxInUp").addClass("fadeInUpFooter");
                $(".fxInDown").addClass("fadeInDownFooter");
                $(".fxIn").addClass("fadeInFooter");


            } else if (loadedSection.index == 4 && direction == 'up') {
                // $("#indexlogo").attr("src", "media/Logo_HAP_Dark.png");
                // $(".navbar").addClass("navbar-dark");
                $(".fxInUp").removeClass("fadeInUpFooter");
                $(".fxInDown").removeClass("fadeInDownFooter");
                $(".fxIn").removeClass("fadeInFooter");

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