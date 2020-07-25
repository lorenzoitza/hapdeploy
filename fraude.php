<?php
require_once 'PageSettings.php';
require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect;
// Exclude tablets.

if( $detect->isMobile() && !$detect->isTablet() ){
    include $GLOBALS['srcMobileFraude'];
}elseif( $detect->isTablet() ){
    include $GLOBALS['srcTabletFraude'];
}else{
    include $GLOBALS['srcDesktopFraude'];
}

?>
