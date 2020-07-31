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
<html lang="<?php echo $_SESSION['varHTML_Lang']; ?>">

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
    <?php loadCssFilesTablet(); ?>
</head>

<body>

    <?php loadPopUp(); ?>
    <?php LoadLogoBlack(); ?>
    <?php LoadMenuHeaderBlack(); ?>

    <div id="fullpage">

        <div class="section fp-noscroll" id="section0-fraud">
            <div class="fp-bg"></div>
            <div class="fullscreen ">
                <div class="content">
                    <?php fraudHome(); ?>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>

        <div class="section fp-auto-height" id="section1-fraud">
            <div class="container-fluid">
                <div class="row bg-light">
                    <div class="col-sm-12 ">
                        <div class="item-fraud-page ">
                            <?php
                            factorsCol1Row1();
                            factorsCol1Row2();
                            factorsCol2Row1();
                            factorsCol2Row2();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php loadScrollDownBlack(); ?>
        </div>

        <div class="section fp-noscroll" id="section2-fraud">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 bg-import-export prt">
                        <div class="testimonial-item-Fraud-Page prt">
                            <?php
                            backgroundFraudEs();
                            backgroundFraudFr();
                            backgroundFraudEn();
                            ?>
                        </div>
                    </div>

                    <!-- start portrait -->
                    <div class="col-md-12 prt">
                        <div class="col-md-6 bgYellow-v prt">
                            <div class="testimonial-item-graph">
                                <img data-src="media/fraude/Recurso_14_1-fr.svg" alt="" class="fr  fxInRight--delete">
                                <img data-src="media/fraude/Recurso_14_1-en.svg" alt="" class="en  fxInRight--delete ">
                                <img data-src="media/fraude/Recurso_14_1-es.svg" alt="" class="es  fxInRight--delete ">

                            </div>
                        </div>

                        <div class="col-md-6 bg-fraud-v prt">
                            <div class="testimonial-item-graph-2">
                                <img data-src="media/fraude/Recurso_14_2-fr.svg" alt="" class="fr  fxInRight ">
                                <img data-src="media/fraude/Recurso_14_2-en.svg" alt="" class="en  fxInRight ">
                                <img data-src="media/fraude/Recurso_14_2-es.svg" alt="" class="es  fxInRight ">
                            </div>
                        </div>
                    </div>
                    <!-- end portrait -->
                    <div class="col-md-8 bg-import-export lscp">
                        <div class="testimonial-item-Fraud-Page lscp">
                            <?php
                            backgroundFraudEs();
                            backgroundFraudFr();
                            backgroundFraudEn();
                            ?>
                        </div>
                    </div>
                    <!-- start landscape -->
                    <div class="col-md-4 lscp">
                        <div class="col-md-12 bgYellow-h lscp">
                            <div class="testimonial-item-graph lscp">
                                <img data-src="media/fraude/Recurso_14_1-fr.svg" alt="" class="fr  fxInRight">
                                <img data-src="media/fraude/Recurso_14_1-en.svg" alt="" class="en  fxInRight">
                                <img data-src="media/fraude/Recurso_14_1-es.svg" alt="" class="es  fxInRight">
                            </div>
                        </div>

                        <div class="col-sm-12 bg-fraud-h lscp">
                            <div class="testimonial-item-graph estimonial-item-graph-2  lscp">
                                <img data-src="media/fraude/Recurso_14_2-fr.svg" alt="" class="fr  fxInRight ">
                                <img data-src="media/fraude/Recurso_14_2-en.svg" alt="" class="en  fxInRight ">
                                <img data-src="media/fraude/Recurso_14_2-es.svg" alt="" class="es  fxInRight ">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end landscape -->
            </div>
            <?php loadFooter(); ?>
        </div>
    </div>
    <?php loadJsMobile(); ?>
    <script src="js/scripts/fraude-tablet.js "></script>
</body>

</html>