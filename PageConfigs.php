<?php
require_once('PageSettings.php');

$version = "?1.0";
$cssAnimate = "css/animate.css"; // . $version;
$cssBootstrapReboot = "css/bootstrap-reboot.min.css";// . $version;
$cssBootstrapCSS = "css/bootstrap.css";// . $version;
$cssFontAwesome = "css/font-awesome.min.css";// . $version;
$cssStyleSheet = "css/style.css";// . $version;
$cssMobile = "css/stylemobile.css";// . $version;
$cssTablet = "css/styletablet.css";// . $version;

// $version = "?3.2";
// $cssAnimate = "css/animate.css" . $version;
// $cssBootstrapReboot = "css/bootstrap-reboot.min.css" . $version;
// $cssBootstrapCSS = "css/bootstrap.css" . $version;
// $cssFontAwesome = "css/font-awesome.min.css" . $version;
// $cssStyleSheet = "css/style.css" . $version;
// $cssCustomFont = "css/font-style.css" . $version;
// $cssViewPorts = "css/viewports.css" . $version;


function btnLeerMasIndexEs($linkPageSrc)
{
    echo '<div class="btn-image ordermb  ">
                <div class="contenedorBtnLeer">
                <a class="animsition-link es" href="' . $linkPageSrc . '"><img src="media/leer_mas2.svg" /></a>
                <a class="animsition-link es" href="' . $linkPageSrc . '"><img class="top" src="media/leer_mas.svg" /></a>
                <a class="animsition-link fr" href="' . $linkPageSrc . '"><img src="media/LirePlus2.svg" /></a>
                <a class="animsition-link fr" href="' . $linkPageSrc . '"><img class="top" src="media/LirePlus.svg" /></a>
                <a class="animsition-link en" href="' . $linkPageSrc . '"><img src="media/ReedMore2.svg" /></a>
                <a class="animsition-link en" href="' . $linkPageSrc . '"><img class="top" src="media/ReedMore.svg" /></a>
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

function loadScrollDownWhite(){
    echo '<a class="scroll-down scroll-down-section" href="javascript:void(0)"> <i>'. file_get_contents("css/chevron_down.svg") .'</i></a>';
}

function loadScrollDownBlack(){
    echo '<a class="scroll-down-black scroll-down-section" href="javascript:void(0)"> <i>'. file_get_contents("css/chevron_down.svg") .'</i></a>';
}

    
function loadCssFiles()
{
    echo '<script src="js/EventEmitter.min.js"></script>';
    echo '<script src="js/lethargy.min.js"></script>';
    echo '<script src="js/martscroll.min.js"></script>';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssAnimate'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapReboot'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapCSS'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssStyleSheet'] . '">';

}
function loadCssFilesMobile()
{
    echo '<script src="js/EventEmitter.min.js"></script>';
    echo '<script src="js/lethargy.min.js"></script>';
    echo '<script src="js/martscroll.min.js"></script>';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssAnimate'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapReboot'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssBootstrapCSS'] . '">';
    echo '<link rel="stylesheet" href="' . $GLOBALS['cssMobile'] . '">';

}
function loadCssFilesTable()
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
    echo '<script src="js/script-mobile.js "></script> ';
    echo '<script type="text/javascript" src="js/scrolloverflow.js"></script>';
    echo '<script type="text/javascript" src="js/fullpage.js"></script>';
    echo '<script type="text/javascript" src="js/fullpage.extensions.min.js"></script>';
    echo '<script type="text/javascript" src="js/fullpage.parallax.min.js"></script>';
    // echo "<script>
    // $(window).scroll($.debounce( 250, true, function(){
       
    // }));
      
    // </script> ";
    


}


function loadFooter()
{
    echo '
        <div class="row">
            <div class="col-md-12 text-center  bg-import-export footerpage  ">
                <div class="footer-social ">
                    <ul class="list-unstyled ">
                        <li>
                            <a class="animated  fadeInUp " href="' . $GLOBALS['facebookLink'] . '">
                                <i class="socialicon">'. file_get_contents("css/iconos/fb-white.svg") .'</i>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " href="' . $GLOBALS['twitterLink'] . '">
                                <i class="socialicon">'. file_get_contents("css/iconos/tw-white.svg") .'</i>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInUp " href="' . $GLOBALS['instagramLink'] . '">
                                <i class="socialicon">'. file_get_contents("css/iconos/ig-white.svg") .'</i>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " data-toggle="modal"  data-target="' . $GLOBALS['mailLink'] . '">
                                <i class="socialicon">'. file_get_contents("css/iconos/mail-white.svg") .'</i>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " data-toggle="modal"  data-target="' . $GLOBALS['youTubeLink'] . '">
                                <i class="socialicon">'. file_get_contents("css/iconos/yt-white.svg") .'</i>
                            </a>
                        </li>
                        <li>
                            <a class="animated  fadeInDown " data-toggle="modal"  data-target="' . $GLOBALS['linkedInLink'] . '">
                                <i class="socialicon">'. file_get_contents("css/iconos/in-white.svg") .'</i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="company-about animated   fadeIn ">' . $GLOBALS['aboutTxt'] . '</p>
            </div>
    </div> ';
}




function loadPopUp()
{
    if ($_SESSION['varHTML_Lang'] == 'es'){
        $arrayform = ['Contáctanos','Nombre:','Apellido:','Email:','Número:','Mensaje','Enviar'];
    }elseif ($_SESSION['varHTML_Lang'] == 'fr') {
        $arrayform = ['Contactez nous','Nom:','Le nom:','Courriel:','Le phone:','Menssage','Envoyer'];
    }elseif ($_SESSION['varHTML_Lang'] == 'en') {
        $arrayform = ['Contact Us','First Name:','Last Name:','Email:','Phone:','Menssage','Send'];
    }

   echo' 
   <div class="modal fade" id="contactMail" tabindex="-1" role="dialog" aria-labelledby="contactMailTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header align-middle">
                    <h2 class="FiraSansThin38Modal" id="titleform">'; echo $arrayform[0]; echo '</h2>
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
                                    <input class="form-control" type="text" placeholder="'; echo $arrayform[1]; echo '" required="" id="first_name" name="first_name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="'; echo $arrayform[2]; echo '" required="" id="last_name" name="last_name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="'; echo $arrayform[3]; echo '" required="" id="email" name="email">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="'; echo $arrayform[4]; echo '" id="phone" name="phone">
                                </div>     
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control messageplaceholder" placeholder="'; echo $arrayform[5]; echo '" id="message" name="message"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-large btn-gradient btn-rounded mt-4" id="submit_btn">
                                    <i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> 
                                    <span id="sendbutton">'; echo $arrayform[6]; echo '</span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>';
}


