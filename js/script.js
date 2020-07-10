$ = jQuery.noConflict();

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
        $(".translateEn").addClass("imgZoom"),
        $.ajax({
            type: "POST",
            url: "switchlang.php",
            data: {
                'langsite': $('html').prop('lang')
            },
            success: function(data) {
                // alert(lang);
            }
        });

    document.getElementById("titleform").innerHTML = "Contáctanos";
    $('#first_name').attr('placeholder', 'Nombre:');
    $('#last_name').attr('placeholder', 'Apellido:');
    $('#email').attr('placeholder', 'Email:');
    $('#phone').attr('placeholder', 'Número:');
    $('#message').attr('placeholder', 'Mensaje');
    document.getElementById("sendbutton").innerHTML = "Enviar";

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
        $(".translateEn").addClass("imgZoom"),
        $.ajax({
            type: "POST",
            url: "switchlang.php",
            data: {
                'langsite': $('html').prop('lang')
            },
            success: function(data) {
                // alert(lang);
            }
        });

    document.getElementById("titleform").innerHTML = "Contactez nous";
    $('#first_name').attr('placeholder', 'Nom:');
    $('#last_name').attr('placeholder', 'Le nom:');
    $('#email').attr('placeholder', 'Courriel:');
    $('#phone').attr('placeholder', 'Le phone:');
    $('#message').attr('placeholder', 'Menssage');
    document.getElementById("sendbutton").innerHTML = "Envoyer";

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
        $(".translateFr").addClass("imgZoom"),
        $.ajax({
            type: "POST",
            url: "switchlang.php",
            data: {
                'langsite': $('html').prop('lang')
            },
            success: function(data) {
                // alert(lang);
            }
        });

    document.getElementById("titleform").innerHTML = "Contact Us";
    $('#first_name').attr('placeholder', 'First Name:');
    $('#last_name').attr('placeholder', 'Last Name:');
    $('#email').attr('placeholder', 'Email:');
    $('#phone').attr('placeholder', 'Phone:');
    $('#message').attr('placeholder', 'Menssage');
    document.getElementById("sendbutton").innerHTML = "Send";


});


if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").mouseenter(function() {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"),
                $("#close_side_menu").fadeIn(700);
            $(".fxInUpMenu").addClass("fadeInUpFooter");
            $(".fxInDownMenu").addClass("fadeInDownFooter");
            $(".fxInMenu").addClass("fadeInFooter")
        }),
        $("#close_side_menu").on("clic", function() {
            $(".side-menu").removeClass("side-menu-active"),
                $(this).fadeOut(200),
                $(".pushwrap").removeClass("active");
            $(".fxInUpMenu").removeClass("fadeInUpFooter");
            $(".fxInDownMenu").removeClass("fadeInDownFooter");
            $(".fxInMenu").removeClass("fadeInFooter")
        }),
        $(".side-nav .navbar-nav .nav-link").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"),
                $("#close_side_menu").fadeOut(200),
                $(".pushwrap").removeClass("active");
            $(".fxInUpMenu").removeClass("fadeInUpFooter");
            $(".fxInDownMenu").removeClass("fadeInDownFooter");
            $(".fxInMenu").removeClass("fadeInFooter")
        }),
        $(".side-menu").mouseleave(function() {
            $(".side-menu").removeClass("side-menu-active"),
                $("#close_side_menu").fadeOut(200),
                $(".pushwrap").removeClass("active");
            $(".fxInUpMenu").removeClass("fadeInUpFooter");
            $(".fxInDownMenu").removeClass("fadeInDownFooter");
            $(".fxInMenu").removeClass("fadeInFooter")
        });


}

if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").on("click", function() {
        $(".pushwrap").toggleClass("active");
        $(".side-menu").addClass("side-menu-active"),
            $("#close_side_menu").fadeIn(700);
        $(".fxInUpMenu").addClass("fadeInUpFooter");
        $(".fxInDownMenu").addClass("fadeInDownFooter");
        $(".fxInMenu").addClass("fadeInFooter")
    }), $("#close_side_menu").on("click", function() {
        $(".side-menu").removeClass("side-menu-active"),
            $(this).fadeOut(200),
            $(".pushwrap").removeClass("active");
        $(".fxInUpMenu").removeClass("fadeInUpFooter");
        $(".fxInDownMenu").removeClass("fadeInDownFooter");
        $(".fxInMenu").removeClass("fadeInFooter")
    }), $(".side-nav .navbar-nav .nav-link").on("click", function() {
        $(".side-menu").removeClass("side-menu-active"),
            $("#close_side_menu").fadeOut(200),
            $(".pushwrap").removeClass("active");
        $(".fxInUpMenu").removeClass("fadeInUpFooter");
        $(".fxInDownMenu").removeClass("fadeInDownFooter");
        $(".fxInMenu").removeClass("fadeInFooter")
    }), $("#btn_sideNavClose").on("click", function() {
        $(".side-menu").removeClass("side-menu-active"),
            $("#close_side_menu").fadeOut(200),
            $(".pushwrap").removeClass("active");
        $(".fxInUpMenu").removeClass("fadeInUpFooter");
        $(".fxInDownMenu").removeClass("fadeInDownFooter");
        $(".fxInMenu").removeClass("fadeInFooter")
    });
}

/* ===================================
      Side Menu
  ====================================== */


if ($(".side-right-btn").length) {

    $(".side-right-btn").click(function() {
            $(".navbar.navbar-right").toggleClass('show');
        }),
        $(".navbar.navbar-right .navbar-nav .nav-link").click(function() {
            $(".navbar.navbar-right").toggleClass('show');
        });

}

$(document).on('click', '.scroll-down-section', function() {

    fullpage_api.moveSectionDown();

});

$(document).on('click', '.logoScrollTop', function() {

    fullpage_api.moveTo(1);

});

//Contact Us
$("#submit_btn").click(function() {

    //disable submit button on click
    $("#submit_btn").attr("disabled", "disabled");
    $("#submit_btn span").text('Sending');
    $("#submit_btn i").removeClass('d-none');

    var user_name = $('input[name=first_name]').val() + ' ' + $('input[name=last_name]').val();
    var user_email = $('input[name=email]').val();
    var user_phone = $('input[name=phone]').val();
    var user_message = $('textarea[name=message]').val();

    //simple validation at client's end
    var post_data, output;
    var proceed = true;
    if (user_name == "") {
        proceed = false;
    }
    if (user_email == "") {
        proceed = false;
    }
    // if (user_phone == "") {
    //proceed = false;
    // }

    if (user_message == "") {
        proceed = false;
    }
    //everything looks good! proceed...
    if (proceed) {

        //data to be sent to server
        post_data = {
            'userName': user_name,
            'userEmail': user_email,
            'userPhone': user_phone,
            'userMessage': user_message
        };

        //Ajax post data to server
        $.post('contact.php', post_data, function(response) {

            //load json data from server and output message
            if (response.type == 'error') {
                output = '<div class="alert-danger" style="padding:10px; margin-bottom:30px;">' + response.text + '</div>';
            } else {
                output = '<div class="alert-success" style="padding:10px; margin-bottom:30px;">' + response.text + '</div>';

                //reset values in all input fields
                $('.contact-form input').val('');
                $('.contact-form textarea').val('');
            }

            $("#result").hide().html(output).slideDown();

            // enable submit button on action done
            $("#submit_btn").removeAttr("disabled");
            $("#submit_btn span").text('Contact Now');
            $("#submit_btn i").addClass('d-none');

        }, 'json');

    } else {
        output = '<div class="alert-danger" style="padding:10px; margin-bottom:30px;">Please provide the missing fields.</div>';
        $("#result").hide().html(output).slideDown();

        // enable submit button on action done
        $("#submit_btn").removeAttr("disabled");
        $("#submit_btn span").text('Contact Now');
        $("#submit_btn i").addClass('d-none');
    }

});