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
    <?php loadCssFilesMobile(); ?>
</head>

<body>

    <?php loadPopUp(); ?>
    <header>
        <?php LoadMenuHeaderBlack(); ?>
    </header>

    <div id="fullpage">

        <div class="section" id="section0-fraud">
            <div class="fp-bg"></div>
            <div class="fullscreen center-block">
                <div class="row align-items-center ">
                    <div class="col-xs-12 text-center center-col shadowText">
                        <?php
                        fraudHome()
                        ?>
                    </div>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>




        <div class="section fp-auto-height" id="section1-fraud">
            <div class="container-fluid scrollable-content">
                <!-- start portrait -->
                <div class="row bg-light prt ">
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
                <?php loadScrollDownBlack(); ?>
            </div>
        </div>


        <div class="section" id="section2-fraud">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 bg-import-export">
                        <div class="testimonial-item-Fraud-Page">
                            <?php
                            backgroundFraudEs();
                            backgroundFraudFr();
                            backgroundFraudEn();
                            ?>
                        </div>
                    </div>
                </div>
                <?php loadScrollDownWhite(); ?>
            </div>
        </div>




        <div class="section" id="section2-fraud-2">
            <div class="container-fluid">


                <div class="row">


                    <!-- start portrait -->

                    <div class="col-sm-12 bgYellow prt">
                        <div class="testimonial-item-graph prt">
                            <img src="media/fraude/Recurso_14_1-fr.svg" alt="" class="fr  fxInRight--delete">
                            <img src="media/fraude/Recurso_14_1-en.svg" alt="" class="en  fxInRight--delete ">
                            <img src="media/fraude/Recurso_14_1-es.svg" alt="" class="es  fxInRight--delete ">

                        </div>
                    </div>

                    <div class="col-sm-12 bg-fraud2 prt">
                        <div class="testimonial-item-graph-2 prt">
                            <img src="media/fraude/Recurso_14_2-fr.svg" alt="" class="fr  fxInRight ">
                            <img src="media/fraude/Recurso_14_2-en.svg" alt="" class="en  fxInRight ">
                            <img src="media/fraude/Recurso_14_2-es.svg" alt="" class="es  fxInRight ">
                        </div>
                    </div>
                    <!-- end portrait -->

                    <!-- start landscape -->
                        <div class="col-sm-6 bgYellow lscp">
                            <div class="testimonial-item-graph lscp">
                                <img src="media/fraude/Recurso_14_1-fr.svg" alt="" class="fr  fxInRight">
                                <img src="media/fraude/Recurso_14_1-en.svg" alt="" class="en  fxInRight">
                                <img src="media/fraude/Recurso_14_1-es.svg" alt="" class="es  fxInRight">
                            </div>
                        </div>

                        <div class="col-sm-6 bg-fraud lscp">
                            <div class="testimonial-item-graph estimonial-item-graph-2  lscp">
                                <img src="media/fraude/Recurso_14_2-fr.svg" alt="" class="fr  fxInRight ">
                                <img src="media/fraude/Recurso_14_2-en.svg" alt="" class="en  fxInRight ">
                                <img src="media/fraude/Recurso_14_2-es.svg" alt="" class="es  fxInRight ">
                            </div>
                        </div>
                </div>
                <!-- end landscape -->

            </div>

            <?php loadFooter(); ?>
        </div>






    </div>
    <?php loadJsMobile(); ?>
    <script src="js/scripts/fraude-mobile.js "></script>

</body>

</html>