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
    <?php loadCssFiles(); ?>
</head>

<body>

    <?php loadPopUp(); ?>
    <header> <?php LoadMenuHeaderBlack(); ?> </header>

    <div id="fullpage">

        <div class="section active" id="section0-fraud">
            <div class="fp-bg"></div>
            <div class="fullscreen center-block">
                <div class="col-xs-12 text-center center-col shadowText">
                    <?php
                    fraudHome()
                    ?>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>

        </div>

        <div class="section fp-noscroll" id="section1-fraud">
            <div class="container-fluid">
                <div class="row bg-light">

                    <div class="col-md-6 ">
                        <div class="testimonial-item-fraud-page-col-1 item">
                            <?php
                            factorsCol1FraudEs();
                            factorsCol1FraudFr();
                            factorsCol1FraudEn();
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="testimonial-item-fraud-page-col-2 item">
                            <?php
                            factorsCol2FraudEs();
                            factorsCol2FraudFr();
                            factorsCol2FraudEn();
                            ?>
                        </div>
                    </div>
                </div>
                <?php loadScrollDownBlack(); ?>

            </div>
        </div>

        <div class="section  fp-noscroll" id="section2-fraud">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6 bg-import-export">
                        <div class="testimonial-item-Fraud-Page">
                            <?php
                            backgroundFraudEs();
                            backgroundFraudFr();
                            backgroundFraudEn();
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="col-md-12 bgYellow">
                            <div class="testimonial-item-graph">
                                <img src="media/fraude/Recurso_14_1-fr.svg" alt="" class="fr  fxInRight ">
                                <img src="media/fraude/Recurso_14_1-en.svg" alt="" class="en  fxInRight ">
                                <img src="media/fraude/Recurso_14_1-es.svg" alt="" class="es  fxInRight ">

                            </div>
                        </div>

                        <div class="col-md-12 bg-fraud2">
                            <div class="testimonial-item-graph-2">
                                <img src="media/fraude/Recurso_14_2-fr.svg" alt="" class="fr  fxInRight ">
                                <img src="media/fraude/Recurso_14_2-en.svg" alt="" class="en  fxInRight ">
                                <img src="media/fraude/Recurso_14_2-es.svg" alt="" class="es  fxInRight ">
                            </div>
                        </div>

                    </div>


                </div>
                <?php loadFooter(); ?>
            </div>

        </div>

    </div>
    <?php loadJsIndexFiles(); ?>
    <script src="js/scripts/fraude.js "></script>

</body>

</html>