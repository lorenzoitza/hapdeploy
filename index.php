<?php
require_once 'PageSettings.php';
require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect;
// Exclude tablets.

if( $detect->isMobile() && !$detect->isTablet() ){
    include $GLOBALS['srcMobileIndex'];
}elseif( $detect->isTablet() ){
    include $GLOBALS['srTablerIndex'];
}else{
    include $GLOBALS['srcDesktopIndex'];
}

?>
