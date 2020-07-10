<?php
require_once 'PageSettings.php';
require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect;
// Exclude tablets.

if( $detect->isMobile() && !$detect->isTablet() ){
    include $GLOBALS['srcMobileConsecuencias'];

}elseif( $detect->isTablet() ){
    include $GLOBALS['srcTableronsecuencias'];
}else{
    include $GLOBALS['srcDesktopConsecuencias'];
}

?>
