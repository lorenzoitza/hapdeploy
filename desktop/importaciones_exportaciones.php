<?php
require_once 'PageConfigs.php';
require_once 'MenuSite.php';
require_once 'LangFileStrings.php';

if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['varHTML_Lang'])) {
    $_SESSION['varHTML_Lang'] = "es";
  }

?>

<!doctype html>
<html lang="<?php echo $_SESSION['varHTML_Lang'];?>">


    <head>
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<meta http-equiv="cache-control" content="no-cache" />


        <title>
            <?php echo $TittlePageEs; ?>
        </title>
        <link rel="icon" href="media/favicon.ico">
        <?php loadCssFiles(); ?>
        <link rel="stylesheet" href="css/parallax/importexport.css">
        <link rel="stylesheet" href="css/style/importexport.css">
    </head>

    <body>
    <?php loadPopUp(); ?>
        <header>
            <?php LoadMenuHeaderBlack(); ?>
        </header>

        <div id="fullpage">

            <div class="section fp-noscroll" id="section0-io">
                <div class="fp-bg"></div>
                <div class="fullscreen">
                    <div class="row align-items-center ">
                        <div
                            class="col-12 col-center text-center">
                            <?php 
                            importExportEs(); 
                            importExportFr();
                            importExportEn();  
                            ?> 
                        </div>
                    </div>
                </div>

                <?php loadScrollDownBlack(); ?>

            </div>

            <div class="section  fp-noscroll" id="section1-io">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-8">

                            <div class="laudering">
                                <?php 
                                lauderingHeaderImportExportEs(); 
                                lauderingHeaderImportExportFr(); 
                                lauderingHeaderImportExportEn(); 
                                ?>
                            </div>

                            <div class="row">
                                <?php 
                                lauderingImportExportEs(); 
                                lauderingImportExportFr(); 
                                lauderingImportExportEn(); 
                                ?>
                            </div>

                        </div>

                        <div class="col-md-4 bgOrange">

                            <div class="row">
                                <div class="col-md-12 message-import-export-sector2">
                                    <?php 
                                    messageImportExportEs(); 
                                    messageImportExportFr();
                                    messageImportExportEn();  
                                    ?>
                                </div>
                                <div class="col-md-12">
                                    <img src="media/importexport/Recurso_17-fr.svg" alt="" class="fr img86">
                                    <img src="media/importexport/Recurso_17-en.svg" alt="" class="en img86">
                                    <img src="media/importexport/Recurso_17-es.svg" alt="" class="es img86">
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php loadScrollDownBlack(); ?>

                </div>

            </div>
            <div class="bg-import-export section  fp-noscroll" id="section2-io">

                <div class="container-fluid">
                    <div class="row  ">
                        <div class="col-12  text-center fx fadeInDownBig">
                            <?php 
                            impactImportExportEs();
                            impactImportExportFr();
                            impactImportExportEn();
                            ?>
                        </div>
                   
                        <div class="col-md-6">
                            <div class="testimonial-item-graph">
                                <img src="media/importexport/graph-import-export1-fr.svg" class="fr img85 bg-import-export fx fadeInDown "
                                    alt="">
                                    <img src="media/importexport/graph-import-export1-en.svg" class="en img85 bg-import-export fx fadeInDown "
                                    alt="">
                                    <img src="media/importexport/graph-import-export1-es.svg" class="es img85 bg-import-export fx fadeInDown "
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-6 align-items-riht">
                            <div class="testimonial-item-graph ">
                                <img src="media/importexport/graph-import-export-2-fr.svg" class="fr img85 fx fadeInUp " alt="">
                                <img src="media/importexport/graph-import-export-2-en.svg" class="en img85 fx fadeInUp " alt="">
                                <img src="media/importexport/graph-import-export-2-es.svg" class="es img85 fx fadeInUp " alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <?php loadFooter(); ?>
            </div>
            

            <?php loadJsIndexFiles(); ?>
            <script src="js/scripts/importexport.js "></script>
    </body>

</html>