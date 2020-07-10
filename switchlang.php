<?php
if (!isset($_SESSION)) {
    session_start();
  }
$langsite = "es";
$_SESSION['varHTML_Lang'] = $langsite;
     if( isset($_POST ['langsite']) ) {
        $langsite = $_POST ['langsite'];
     }
     $_SESSION['varHTML_Lang'] = $langsite;

     
?>