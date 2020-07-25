<?php
require_once 'PageSettings.php';
require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect;
// Exclude tablets.

if( $detect->isMobile() && !$detect->isTablet() ){
    include $GLOBALS['srcMobileImportaciones_exportaciones'];
}elseif( $detect->isTablet() ){
    include $GLOBALS['srcTabletImportaciones_exportaciones'];
}else{
    include $GLOBALS['srcDesktopImportaciones_exportaciones'];
}

?>
