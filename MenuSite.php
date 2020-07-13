<?php
require_once 'PageSettings.php';

$pathFileImage =  'media/Logo_HAP.png';
$pathFileImageBlack =  'media/Logo_HAP_Dark.png';

$OpacityEs = 'opacity1';
$OpacityFr = 'opacity1';
$OpacityEn = 'opacity1';

$ZoomEs = 'imgZoom';
$ZoomFr = 'imgZoom';
$ZoomEn = 'imgZoom';


function menuLangOpacity(){
    if ($_SESSION['varHTML_Lang'] == 'es'){
        $GLOBALS['OpacityEs'] = 'opacity03';
        $GLOBALS['ZoomEs'] = " ";
    }elseif ($_SESSION['varHTML_Lang'] == 'fr') {
        $GLOBALS['OpacityFr'] = 'opacity03';
        $GLOBALS['ZoomFr'] = " ";
    }elseif ($_SESSION['varHTML_Lang'] == 'en') {
        $GLOBALS['OpacityEn'] = 'opacity03';
        $GLOBALS['ZoomEn'] = " ";
    }
    
}

function LoadMenuHeader()
{
    menuLangOpacity();

    echo ' 
        <nav class="navbar navbar-expand-md navbar-side d-flex justify-content-end">
            <div class="mr-auto">
                <a id ="indexlogo_page" href="index.php" title="Logo" class="logo logoScrollTop">
                    <img id="indexlogo" src="' . $GLOBALS['pathFileImage'] . ' " class="logo-light default" alt="logo light">
                </a>
            </div>';
            
            headerflags();
    echo '         </nav>

        <div class="side-menu">
            <div class="inner-wrapper FiraSansThinWhite05rem">
                <span class="btn-close d-lg-none d-xl-none" id="btn_sideNavClose"><i></i><i></i></span>';
                menu_items();
                menuFooter();
                echo '
            </div>
        </div>
        <a class="d-lg-none d-xl-none" id="close_side_menu" href="javascript:void(0);"></a>';
}



function LoadMenuHeaderBlack()
{

    menuLangOpacity();

    echo ' 
        <nav class="navbar navbar-expand-md navbar-side d-flex justify-content-end navbar-dark">
        <div class="mr-auto">
            <a id ="indexlogo_page" href="index.php" title="Logo" class="logo logoScrollTop">
                <img id="indexlogo" src="' . $GLOBALS['pathFileImageBlack'] . ' " class="logo-light default" alt="logo light">
            </a>
        </div>';
        
        headerflags();

    echo ' </nav>

        <div class="side-menu">
            <div class="inner-wrapper FiraSansThinWhite05rem">
                <span class="btn-close d-lg-none d-xl-none" id="btn_sideNavClose"><i></i><i></i></span>';
                menu_items();
                menuFooter();
                echo '

            </div>
        </div>
        <a class="d-lg-none d-xl-none" id="close_side_menu" href="javascript:void(0);"></a>';
}


function headerflags(){
    echo '
            <div class="p-2">
                <a href="#" class="d-inline-block translateFr '.$GLOBALS['OpacityFr'].' '.$GLOBALS['ZoomFr'].' clicLang" data-lang="fr" id="btn_ClicFr" >
                    <img src="css/flags/fr.svg" id="imgFlagFr">
                </a>
            </div>
            <div class="p-2">
                <a href="#" class="d-inline-block translateEn '. $GLOBALS['OpacityEn'].' '.$GLOBALS['ZoomEn'].' clicLang" data-lang="en" id="btn_ClicEn">
                    <img src="css/flags/gb-nir.svg" id="imgFlagEn">
                </a>
            </div>
            <div class="p-2">
                <a href="#" class="d-inline-block translateEs '. $GLOBALS['OpacityEs'] .' '.$GLOBALS['ZoomEs'].' clicLang" data-lang="es" id="btn_ClicEs">
                    <img src="css/flags/es.svg" id="imgFlagEs">
                </a>
            </div>
            <div class="p-2">
                <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span class="menu-ico">'. file_get_contents("css/flags/menu.svg") . '</span>
                </a>
            </div>';

}

function menu_items(){
    echo '  <div class="es">
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id ="index_page" class="nav-link " href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a id ="consecuencias_page" class="nav-link " href="consecuencias.php">Consecuencias</a>
                        </li>
                        <li class="nav-item">
                            <a id ="fraude_page" class="nav-link " href="fraude.php">El Fraude</a>
                        </li>
                        <li class="nav-item">
                            <a id ="importaciones_exportaciones_page" class="nav-link" href="importaciones_exportaciones.php">Importaciones y Exportaciones</a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div class="fr">
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id ="index_page" class="nav-link " href="index.php">Début</a>
                        </li>
                        <li class="nav-item">
                            <a id ="consecuencias_page" class="nav-link " href="consecuencias.php">Conséquences</a>
                        </li>
                        <li class="nav-item">
                            <a id ="fraude_page" class="nav-link " href="fraude.php">La fraude</a>
                        </li>
                        <li class="nav-item">
                            <a id ="importaciones_exportaciones_page" class="nav-link" href="importaciones_exportaciones.php">Importations et exportations</a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div class="en">
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id ="index_page" class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id ="consecuencias_page" class="nav-link " href="consecuencias.php">Consequences</a>
                        </li>
                        <li class="nav-item">
                            <a id ="fraude_page" class="nav-link " href="fraude.php">The fraud</a>
                        </li>
                        <li class="nav-item">
                            <a id ="importaciones_exportaciones_page" class="nav-link" href="importaciones_exportaciones.php">Imports and exports</a>
                        </li>
                    </ul>
                </nav>
            </div>';
}

function menuFooter(){
    echo '
    <div class="side-footer text-white w-100">
        <ul class="social-icons-simple">
            <li>
                <a class="fx InUpMenu " href="' . $GLOBALS['facebookLink'] . '">
                    <i class="socialicon">'. file_get_contents("css/iconos/fb-white.svg") .'</i>
                </a>
            </li>
            <li>
                <a class="fx InDownMenu " href=" ' . $GLOBALS['twitterLink'] . '">
                    <i class="socialicon">'. file_get_contents("css/iconos/tw-white.svg") .'</i>
                </a>                        
            </li>
            <li>
                <a class="fx InUpMenu " href="' . $GLOBALS['instagramLink'] . '">
                    <i class="socialicon">'. file_get_contents("css/iconos/ig-white.svg") .'</i>
                </a>
            </li>
            <li>
                <a class="fx InDownMenu "  data-toggle="modal"  data-target="' . $GLOBALS['mailLink'] . '">
                    <i class="socialicon">'. file_get_contents("css/iconos/mail-white.svg") .'</i>
                </a>
            </li>
            <li>
                <a class="fx InUpMenu" " href="' . $GLOBALS['youTubeLink'] . '">
                    <i class="socialicon">'. file_get_contents("css/iconos/yt-white.svg") .'</i>
                </a>
            </li>
            <li>
                <a class="fx InDownMenu" " href="' . $GLOBALS['linkedInLink'] . '">
                    <i class="socialicon">'. file_get_contents("css/iconos/in-white.svg") .'</i>
                </a>
            </li>
        </ul>
        <p class="company-about fx InMenu ">' . $GLOBALS['aboutTxt'] . '</p>
    </div>';
}