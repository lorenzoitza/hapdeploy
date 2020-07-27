<php 
/* ----------- iPad 1, 2, Mini and Air -webkit-min-device-pixel-ratio: 1 iPad 3, 4 and Pro 9.7" -webkit-min-device-pixel-ratio: 2 ----------- */
echo '<link rel="stylesheet" media="screen and (min-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 1 " href="' . $GLOBALS['cssTablet'] . '" />';
/* ----------- iPad 3, 4 and Pro 9.7" ----------- */
echo '<link rel="stylesheet" media="screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2)" href="' . $GLOBALS['cssTablet'] . '" />';
/* ----------- iPad Pro 10.5" ----------- */
echo '<link rel="stylesheet" media="screen and (min-device-width: 834px) and (max-device-width: 1112px) and (-webkit-min-device-pixel-ratio: 2)" href="' . $GLOBALS['cssTablet'] . '" />';
/* ----------- iPad Pro 12.9" ----------- */
echo '<link rel="stylesheet" media="screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (-webkit-min-device-pixel-ratio: 2)" href="' . $GLOBALS['cssTablet'] . '" />';

?>