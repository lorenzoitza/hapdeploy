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
        <?php LoadMenuHeader(); ?>
    </header>

    <div id="fullpage">

        <div class="section" id="section0-consecuence">
            <div class="fp-bg"></div>
            <div class="fullscreen center-block">
                <div class="row align-items-center">
                    <div class="col-xs-12 center-col bg-darky text-center">
                        <?php
                        affectationsEs();
                        affectationsFr();
                        affectationsEn();
                        ?>
                    </div>
                </div>
            </div>

            <?php loadScrollDownWhite(); ?>

        </div>


        <div class="section  fp-auto-height-responsive" id="section1-consecuence">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-6">
                        <div class="testimonial-item-consecuence-page">
                            <?php
                            lowPricesAffectationsRow1();
                            ?>
                        </div>
                    </div>
                </div>
                <?php loadScrollDownBlack();
                ?>

            </div>
        </div>

        <div class="section  fp-auto-height-responsive" id="section2-consecuence">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-6">
                        <div class="testimonial-item-consecuence-page">
                            <?php
                            lowPricesAffectationsRow2();
                            ?>
                        </div>
                    </div>
                </div>
                <?php loadScrollDownBlack();
                ?>

            </div>
        </div>


        <div class="section  fp-auto-height-responsive" id="section3-consecuence">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-12 bgYellow">
                        <div class="testimonial-item22">

                            <div class="row">

                                <div class="col-sm-12 tabletconsecuencetext">
                                    <p class="text-consecuence font3 es">Precio de importación de la miel de origen chino como porcentaje del promedio del precio de la miel importada del resto del mundo</p>
                                    <p class="text-consecuence font3 fr">Prix ​​à l&apos;importation du miel d&apos;origine chinoise en pourcentage du prix moyen du miel importé du reste du monde</p>
                                    <p class="text-consecuence font3 en">Import price of honey of Chinese origin as a percentage of the average price of honey imported from the rest of the world</p>
                                </div>
                                <div class="col-sm-12  img-consecuence">
                                    <img src="media/consecuencias/Sector2Page2-fr.svg" width="55%" class="fr img-consecuence topposition fxInRightCC " alt="">
                                    <img src="media/consecuencias/Sector2Page2-en.svg" width="55%" class="en img-consecuence topposition fxInRightCC " alt="">
                                    <img src="media/consecuencias/Sector2Page2-es.svg" width="55%" class="es img-consecuence topposition fxInRightCC " alt="">

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 bgCrema">
                        <div class="long item2">
                            <?php
                            honeySpendsAffectationsEs();
                            honeySpendsAffectationsFr();
                            honeySpendsAffectationsEn();
                            ?>
                        </div>
                        <?php loadScrollDownBlack();
                        ?>
                    </div>


                </div>
            </div>
        </div>





        <div class="section  fp-auto-height-responsive" id="section4-consecuence">

            <div class="container-fluid">
                <div class="row bgGraph bg-dark">

                    <div class="col-sm-12 sector">

                        <div class="testimonial-item-graph item">
                            <img src="media/consecuencias/Sector3_1Page2-fr.svg" class="fr fxInDownC--delete " alt="">
                            <img src="media/consecuencias/Sector3_1Page2-en.svg" class="en fxInDownC--delete " alt="">
                            <img src="media/consecuencias/Sector3_1Page2-es.svg" class="es fxInDownC--delete " alt="">
                        </div>

                    </div>
                    <div class="col-sm-12 sector">

                        <div class="testimonial-item-graph graph1 item">
                            <img src="media/consecuencias/Sector3_2Page2-fr.svg" class="fr fxInUp--deleteC" alt="">
                            <img src="media/consecuencias/Sector3_2Page2-en.svg" class="en fxInUpC--delete" alt="">
                            <img src="media/consecuencias/Sector3_2Page2-es.svg" class="es fxInUpC--delete" alt="">
                        </div>

                    </div>
                    <div class="col-sm-12 sector">

                        <div class="testimonial-item-grap2 graph2 item ">
                            <img src="media/consecuencias/graph-3-section2-fr.svg" class="fr fxInLeftC--delete " alt="">
                            <img src="media/consecuencias/graph-3-section2-en.svg" class="en fxInLeftC--delete " alt="">
                            <img src="media/consecuencias/graph-3-section2-es.svg" class="es fxInLeftC--delete " alt="">
                        </div>

                    </div>

                </div>

                <?php loadScrollDownWhite();
                ?>

            </div>

        </div>















        <div class="section fp-auto-height-responsive" id="section5-consecuence">

            <div class="container-fluid">
                <div class="row ">

                    <div class="col-sm-12  section3bg">
                        <div class="item-consecuenciasbeekeeper">

                        </div>
                    </div>

                    <div class="col-sm-12  p-0 bgOrange">
                        <div class="item-consecuencias">
                            <?php
                            txtGuardiansEs();
                            txtGuardiansFr();
                            txtGuardiansEn();
                            ?>
                        </div>
                    </div>

                </div>
            </div>
            <?php loadFooter();
            ?>

        </div>



    </div>
    <?php loadJsIndexFiles(); ?>
    <script src="js/scripts/consecuencias-mobile.js "></script>
</body>

</html>