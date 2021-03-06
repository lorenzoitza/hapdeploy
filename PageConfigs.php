<?php
require_once('PageSettings.php');

$version = "?1.0";
$cssAnimate =           "css/animate.css"; // . $version;
$cssBootstrapReboot =   "css/bootstrap-reboot.css"; // . $version;
$cssBootstrapCSS =      "css/bootstrap.css"; // . $version;
$cssFontAwesome =       "css/font-awesome.min.css"; // . $version;
$cssFullPage =          "css/fullpage.css"; // . $version;
$cssStyleSheet =        "css/style.css"; // . $version;
$cssMobile =            "css/stylemobile.css"; // . $version;
$cssTablet =            "css/styletablet.css"; // . $version;

// $version = "?3.2";
// $cssAnimate = "css/animate.css" . $version;
// $cssBootstrapReboot = "css/bootstrap-reboot.min.css" . $version;
// $cssBootstrapCSS = "css/bootstrap.css" . $version;
// $cssFontAwesome = "css/font-awesome.min.css" . $version;
// $cssStyleSheet = "css/style.css" . $version;
// $cssCustomFont = "css/font-style.css" . $version;
// $cssViewPorts = "css/viewports.css" . $version;


function btnLeer($linkPageSrc)
{
    echo '<div class="btn-image ordermb  ">
                <div class="contenedorBtnLeer">
                <a class="animsition-link es" href="' . $linkPageSrc . '"><img src="media/btn/leer_mas2.svg" /></a>
                <a class="animsition-link es" href="' . $linkPageSrc . '"><img class="top" src="media/btn/leer_mas.svg" /></a>
                <a class="animsition-link fr" href="' . $linkPageSrc . '"><img src="media/btn/LirePlus2.svg" /></a>
                <a class="animsition-link fr" href="' . $linkPageSrc . '"><img class="top" src="media/btn/LirePlus.svg" /></a>
                <a class="animsition-link en" href="' . $linkPageSrc . '"><img src="media/btn/ReedMore2.svg" /></a>
                <a class="animsition-link en" href="' . $linkPageSrc . '"><img class="top" src="media/btn/ReedMore.svg" /></a>
                </div>
               
            </div>';
}

function btnLeerMasIndexInvertEs($linkPageSrc)
{
    echo '<div class="btn-image  ">
                <div class="contenedorBtnLeer">
                <a class="animsition-link" href="' . $linkPageSrc . '"><img src="media/leer_mas.svg" /></a>
                <a class="animsition-link" href="' . $linkPageSrc . '"><img class="top" src="media/leer_mas2.svg" /></a>
                </div>
                
            </div>';
}

function loadScrollDownWhite()
{
    echo '<a class="scroll-down scroll-down-section" href="javascript:void(0)"> <i>' . file_get_contents("css/chevron_down.svg") . '</i></a>';
}

function loadScrollDownBlack()
{
    echo '<a class="scroll-down-black scroll-down-section" href="javascript:void(0)"> <i>' . file_get_contents("css/chevron_down.svg") . '</i></a>';
}

function loadScrollUpWhite()
{
    echo '<a class="scroll-up scroll-up-section" href="javascript:void(0)"> <i>' . file_get_contents("css/chevron_up.svg") . '</i></a>';
}

function loadScrollUpBlack()
{
    echo '<a class="scroll-up-black scroll-up-section" href="javascript:void(0)"> <i>' . file_get_contents("css/chevron_up.svg") . '</i></a>';
}


function loadCssFiles()
{
    // echo '<script src="js/EventEmitter.min.js"></script>';
    // echo '<script src="js/lethargy.min.js"></script>';
    // echo '<script src="js/martscroll.min.js"></script>';
    // echo '<link rel="stylesheet" href="' . $GLOBALS['cssAnimate'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapReboot'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapCSS'] . '">';
    // echo '<link rel="stylesheet" href="' . $GLOBALS['cssFontAwesome'] . '">';
    // echo '<link rel="stylesheet" href="' . $GLOBALS['cssStyleSheet'] . '">';
    // echo '<link rel="stylesheet" href="' . $GLOBALS['cssCustomFont'] . '">';
    /* ----------- iPad 1, 2, Mini and Air -webkit-min-device-pixel-ratio: 1 iPad 3, 4 and Pro 9.7" -webkit-min-device-pixel-ratio: 2 ----------- */
    echo '<link rel="stylesheet" media="screen and (min-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 1 " href="' . $GLOBALS['cssTablet'] . '" />';
    /* ----------- iPad 3, 4 and Pro 9.7" ----------- */
    echo '<link rel="stylesheet" media="screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2)" href="' . $GLOBALS['cssTablet'] . '" />';
    /* ----------- iPad Pro 10.5" ----------- */
    echo '<link rel="stylesheet" media="screen and (min-device-width: 834px) and (max-device-width: 1112px) and (-webkit-min-device-pixel-ratio: 2)" href="' . $GLOBALS['cssTablet'] . '" />';
    /* ----------- iPad Pro 12.9" ----------- */
    echo '<link rel="stylesheet" media="screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (-webkit-min-device-pixel-ratio: 2)" href="' . $GLOBALS['cssTablet'] . '" />';
    echo '<link rel="stylesheet" media="screen and (min-width: 1000px)" href="' . $GLOBALS['cssStyleSheet'] . '" />';
}

function loadCssFilesMobile()
{
    // echo '<script src="js/EventEmitter.min.js"></script>';
    // echo '<script src="js/lethargy.min.js"></script>';
    // echo '<script src="js/martscroll.min.js"></script>';
    // echo '<link rel="stylesheet" href="' . $GLOBALS['cssAnimate'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssFullPage'] . '" />';
    // echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapReboot'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapCSS'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssMobile'] . '">';
}
function loadCssFilesTablet()
{
    echo '<script src="js/EventEmitter.min.js"></script>';
    echo '<script src="js/lethargy.min.js"></script>';
    echo '<script src="js/martscroll.min.js"></script>';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssAnimate'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapReboot'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapCSS'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssTablet'] . '">';
}

function loadJsIndexFiles()
{
    echo '<script src="js/debounce.js"></script> ';
    echo '<script src="js/jquery-3.5.0.min.js "></script> ';
    echo '<script src="js/bootstrap.min.js "></script> ';
    echo '<script src="js/jquery.appear.js "></script> ';
    echo '<script src="js/script.js "></script> ';
    echo '<script type="text/javascript" src="js/fullpage.js"></script>';
    echo '<script type="text/javascript" src="js/fullpage.extensions.min.js"></script>';
    echo '<script type="text/javascript" src="js/scrolloverflow.js"></script>';
    echo '<script type="text/javascript" src="js/fullpage.parallax.min.js"></script>';
    // echo "<script>
    // $(window).scroll($.debounce( 250, true, function(){

    // }));

    // </script> ";



}

function loadJsMobile()
{
    // echo '<script src="js/debounce.js"></script> ';
    echo '<script type="text/javascript" src="js/jquery-3.5.0.min.js "></script> ';
    echo '<script type="text/javascript" src="js/bootstrap.min.js "></script> ';
    echo '<script type="text/javascript" src="js/jquery.appear.js "></script> ';
    echo '<script type="text/javascript" src="js/script-mobile.js "></script> ';
    echo '<script type="text/javascript" src="vendors/scrolloverflow.min.js"></script> ';
    echo '<script type="text/javascript" src="js/fullpage.js"></script> ';
    echo '<script type="text/javascript" src="js/fullpage.extensions.min.js"></script>';
    echo '<script type="text/javascript" src="js/fullpage.parallax.min.js"></script> ';
}


function loadFooter()
{
    echo '<div class="footerpage">
                <div class="footer-social ">
                    <ul class="list-unstyled ">
                        <li>
                            <a class="animated  fadeInUp " href="' . $GLOBALS['facebookLink'] . '">
                            <img src="css/iconos/fb-white.svg"/>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " href="' . $GLOBALS['twitterLink'] . '">
                            <img src="css/iconos/tw-white.svg"/>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInUp " href="' . $GLOBALS['instagramLink'] . '">
                            <img src="css/iconos/ig-white.svg"/>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " data-toggle="modal"  data-target="' . $GLOBALS['mailLink'] . '">
                            <img src="css/iconos/mail-white.svg"/>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " href="' . $GLOBALS['youTubeLink'] . '">
                            <img src="css/iconos/yt-white.svg"/>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " href="' . $GLOBALS['linkedInLink'] . '">
                            <img src="css/iconos/in-white.svg"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="company-about animated   fadeIn ">' . $GLOBALS['aboutTxt'] . '</p>
            </div>';
}

function loadFooterMobile()
{
    echo '<div class="footerpage">
                <p class="company-about animated   fadeIn ">' . $GLOBALS['aboutTxt'] . '</p>
            </div>';
}





function loadPopUp()
{
    if ($_SESSION['varHTML_Lang'] == 'es') {
        $arrayform = ['Contáctanos', 'Nombre:', 'Apellido:', 'Email:', 'Número:', 'Mensaje', 'Enviar'];
    } elseif ($_SESSION['varHTML_Lang'] == 'fr') {
        $arrayform = ['Contactez nous', 'Nom:', 'Le nom:', 'Courriel:', 'Le phone:', 'Menssage', 'Envoyer'];
    } elseif ($_SESSION['varHTML_Lang'] == 'en') {
        $arrayform = ['Contact Us', 'First Name:', 'Last Name:', 'Email:', 'Phone:', 'Menssage', 'Send'];
    }

    echo ' 
   <div class="modal fade" id="contactMail" tabindex="-1" role="dialog" aria-labelledby="contactMailTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header align-middle">
                    <h2 class="FiraSansThin38Modal" id="titleform">';
    echo $arrayform[0];
    echo '</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="contact-form ">
                        <div class="row ">

                            <div class="col-sm-12 " id="result"></div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="';
    echo $arrayform[1];
    echo '" required="" id="first_name" name="first_name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="';
    echo $arrayform[2];
    echo '" required="" id="last_name" name="last_name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="';
    echo $arrayform[3];
    echo '" required="" id="email" name="email">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="';
    echo $arrayform[4];
    echo '" id="phone" name="phone">
                                </div>     
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control messageplaceholder" placeholder="';
    echo $arrayform[5];
    echo '" id="message" name="message"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-large btn-gradient btn-rounded mt-4" id="submit_btn">
                                    <i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> 
                                    <span id="sendbutton">';
    echo $arrayform[6];
    echo '</span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>';
}
