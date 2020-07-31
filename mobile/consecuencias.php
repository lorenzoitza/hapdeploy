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
    <?php LoadLogoGrey(); ?>
    <?php LoadMenuHeader(); ?>

    <div id="fullpage">

        <div class="section fp-noscroll" id="section0-consecuence">
            <div class="fp-bg"></div>
            <div class="fullscreen">
                <div class="bg-darky">
                    <?php
                    affectationsEs();
                    affectationsFr();
                    affectationsEn();
                    ?>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>


        <div class="section" id="section1-consecuence">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="testimonial-item-consecuence-page">
                            <?php
                            lowPricesAffectationsRow1();
                            lowPricesAffectationsRow2();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php loadScrollDownBlack(); ?>
        </div>

        <div class="section fp-noscroll" id="section1-consecuence-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 bgYellow">
                        <div class="testimonial-item2">
                            <div class="col-sm-6">
                                <div class="tabletconsecuencetext">
                                    <p class="text-consecuence font3 es">Precio de importación de la miel de origen chino como porcentaje del promedio del precio de la miel importada del resto del mundo</p>
                                    <p class="text-consecuence font3 fr">Prix ​​à l&apos;importation du miel d&apos;origine chinoise en pourcentage du prix moyen du miel importé du reste du monde</p>
                                    <p class="text-consecuence font3 en">Import price of honey of Chinese origin as a percentage of the average price of honey imported from the rest of the world</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="img-consecuence">
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
                    </div>
                </div>

            </div>
            <?php loadScrollDownBlack(); ?>
        </div>

        <div class="section fp-noscroll" id="section2-consecuence">

            <div class="container-fluid">
                <div class="row bgGraph bg-dark">
                    <!-- Start portrait -->
                    <!-- <id="section4-consecuence"> -->
                    <div class="col-sm-12 sector prt">

                        <div class="testimonial-item-graph item">
                            <img src="media/consecuencias/Sector3_1Page2-fr.svg" class="fr fxInDownC " alt="">
                            <img src="media/consecuencias/Sector3_1Page2-en.svg" class="en fxInDownC " alt="">
                            <img src="media/consecuencias/Sector3_1Page2-es.svg" class="es fxInDownC " alt="">
                        </div>

                    </div>
                    <div class="col-sm-12 sector prt">

                        <div class="testimonial-item-graph graph1 item">
                            <img src="media/consecuencias/Sector3_2Page2-fr.svg" class="fr fxInUpC" alt="">
                            <img src="media/consecuencias/Sector3_2Page2-en.svg" class="en fxInUpC" alt="">
                            <img src="media/consecuencias/Sector3_2Page2-es.svg" class="es fxInUpC" alt="">
                        </div>

                    </div>
                    <div class="col-sm-12 sector prt">

                        <div class="testimonial-item-grap2 graph2 item ">
                            <img src="media/consecuencias/graph-3-section2-fr.svg" class="fr fxInLeftC " alt="">
                            <img src="media/consecuencias/graph-3-section2-en.svg" class="en fxInLeftC " alt="">
                            <img src="media/consecuencias/graph-3-section2-es.svg" class="es fxInLeftC " alt="">
                        </div>

                    </div>
                    <!-- End Portrait -->

                    <!-- Start Landscape -->
                    <div class="col-sm-6">

                        <div class="testimonial-item-graph-h lscp">
                            <img src="media/consecuencias/Sector3_1Page2-fr.svg" class="fr fxInDownC " alt="">
                            <img src="media/consecuencias/Sector3_1Page2-en.svg" class="en fxInDownC " alt="">
                            <img src="media/consecuencias/Sector3_1Page2-es.svg" class="es fxInDownC " alt="">
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="testimonial-item-grap2-h graph2 lscp">
                            <img src="media/consecuencias/graph-3-section2-fr.svg" class="fr fxInLeftC " alt="">
                            <img src="media/consecuencias/graph-3-section2-en.svg" class="en fxInLeftC " alt="">
                            <img src="media/consecuencias/graph-3-section2-es.svg" class="es fxInLeftC " alt="">
                        </div>

                    </div>
                    <div class="col-sm-12 sector">

                        <div class="testimonial-item-graph-h graph1 lscp">
                            <img src="media/consecuencias/Sector3_2Page2-fr.svg" class="fr fxInUpC" alt="">
                            <img src="media/consecuencias/Sector3_2Page2-en.svg" class="en fxInUpC" alt="">
                            <img src="media/consecuencias/Sector3_2Page2-es.svg" class="es fxInUpC" alt="">
                        </div>

                    </div>

                    <!-- End Landscape -->

                </div>
                <?php loadScrollDownWhite(); ?>
            </div>


        </div>



        <div class="section fp-noscroll" id="section3-consecuence">
            <div class="container-fluid ">
                <div class="row bgOrange ">
                    <!-- Start Portrait -->
                    <!-- id="section5-consecuence"> -->
                    <div class="col-sm-12 ">
                        <div class="item-consecuenciasbeekeeper prt">
                            <img src="media/consecuencias/bg-sector3V.jpg" alt="">

                        </div>
                    </div>

                    <div class="col-sm-12 bgOrange prt">
                        <div class="item-consecuencias">
                            <?php
                            txtGuardiansEs();
                            txtGuardiansFr();
                            txtGuardiansEn();
                            ?>
                        </div>
                    </div>
                    <!-- End Portrait -->
                    <!-- Start Landscape -->
                    <div class="col-sm-4 section3bg lscp">
                        <div class="item-consecuenciasbeekeeper">

                        </div>
                    </div>

                    <div class="col-sm-8 bgOrange lscp">
                        <div class="item-consecuencias">
                            <?php
                            txtGuardiansEs();
                            txtGuardiansFr();
                            txtGuardiansEn();
                            ?>
                        </div>
                    </div>
                    <!-- End Landscape -->
                </div>
            </div>
            <?php loadFooterMobile(); ?>
        </div>

    </div>
    <?php loadJsMobile(); ?>
    <script src="js/scripts/consecuencias-mobile.js "></script>
</body>

</html>