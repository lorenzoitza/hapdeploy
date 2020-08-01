<?php
require_once 'PageConfigs.php';
require_once 'MenuSite.php';
require_once 'LangFileStrings.php';

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['varHTML_Lang'])) {
    $_SESSION['varHTML_Lang'] = "en";
}

$detect = new Mobile_Detect;


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
    <?php LoadLogoGrey(); ?>
    <?php LoadMenu(); ?>


    <div id="fullpage">

        <div class="section fp-noscroll" id="section0">
            <div class="fp-bg"></div>
            <div class="fullscreen">
                <div class="content">
                    <?php indexMain(); ?>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>


        <div class="section fp-noscroll" id="section1">
            <div class="container-fluid">
                <?php loadScrollUpBlack(); ?>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 bg-light prt">
                        <div class="index-consecuence-item  prt">
                            <?php
                            consequenceIndexEs();
                            btnLeer("consecuencias.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12  center-block justify-content-center align-items-center m-0 bgOrange">
                        <img data-src="media/index/colmena.svg" class="hive fx fadeInRight" alt="">
                    </div>

                    <div class="col-md-6 bg-light lscp">
                        <div class="index-consecuence-item lscp">
                            <?php
                            consequenceIndexEs();
                            btnLeer("consecuencias.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 center-block justify-content-center align-items-center bgOrange lscp">
                        <img data-src="media/index/colmena.svg" class="hive fx fadeInRight" alt="hive">
                    </div>

                </div>

            </div>
            <?php loadScrollDownBlack(); ?>
        </div>


        <div class="section fp-noscroll" id="section2">
            <div class="fp-bg"></div>
            <div class="container-fluid">
                <?php loadScrollUpWhite(); ?>
                <div class="row">
                    <div class="col-sm-12 prt">
                        <div class="index-consecuence-item">
                            <?php fraudIndexEs();
                            ?>
                        </div>
                        <div class="fraudMessage">
                            <?php fraudMessageIndexEs();
                            btnLeer("fraude.php");
                            ?>
                        </div>
                    </div>

                    <!-- Start landscape -->

                    <div class="col-sm-6  lscp">
                        <div class="index-consecuence-item">
                            <?php fraudIndexEs();
                            btnLeer("fraude.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6  lscp">
                        <div class="fraudMessage">
                            <?php fraudMessageIndexEs();
                            ?>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="index-consecuence-item">
                            <?php fraudIndexEs();
                            btnLeer("fraude.php");  ?>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="fraudMessage">
                            <?php fraudMessageIndexEs(); ?>
                        </div>
                    </div>






                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>

        <div class="section fp-noscroll" id="section3">
            <div class="container-fluid bgCrema">
                <?php loadScrollUpBlack(); ?>
                <div class="row">

                    <div class="col-sm-12 bgYellow-v prt">
                        <div class="index-consecuence-item-v">
                            <?php
                            honeyFraudIndexEs();
                            btnLeer("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="bgCrema-v  col-sm-12  prt">
                        <div class="col-sm-6">
                            <div class="text-center item-newspaper-left-v prt">
                                <img data-src="media/index/news1.png" class="prt newspaper-padding fx fadeInRight1" alt="">
                                <img data-src="media/index/news2.png" class="prt newspaper-padding fx fadeInRight2" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-center item-newspaper-right-v prt">
                                <img data-src="media/index/news3.png" class="prt newspaper-padding fx fadeInRight3" alt="">
                                <img data-src="media/index/news4.png" class="prt newspaper-padding bottomnews paper-padding fx fadeInRight4" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Start landscape Section3 -->
                    <div class="col-sm-8 bgYellow-h lscp">
                        <div class="index-consecuence-item-h ">
                            <?php
                            honeyFraudIndexEs();
                            btnLeer("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="bgCrema-h col-sm-4 center-block text-right justify-content-center align-items-center lscp">
                        <div class="text-center item-newspaper-v item-newspaper-h">
                            <img data-src="media/index/news1.png" class="newspaper-padding-1 fx fadeInRight1" alt="">
                            <img data-src="media/index/news2.png" class="newspaper-padding fx fadeInRight2" alt="">
                            <img data-src="media/index/news3.png" class="newspaper-padding fx fadeInRight3" alt="">
                            <img data-src="media/index/news4.png" class="newspaper-padding fx fadeInRight4" alt="">
                        </div>
                    </div>


                    <div class="col-lg-6 bgYellow ">
                        <div class="index-consecuence-item ">
                            <?php
                            honeyFraudIndexEs();
                            btnLeer("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 center-block text-right justify-content-center align-items-center ">
                        <div class="text-right pt-1">
                            <p class="p-0 m-0 "><img data-src="media/index/news1.png" class="newspaper-padding fx fadeInRight1" alt=""> </p>
                            <p class="p-0 m-0"><img data-src="media/index/news2.png" class="newspaper-padding fx fadeInRight2" alt=""> </p>
                            <p class="p-0 m-0"><img data-src="media/index/news3.png" class="newspaper-padding fx fadeInRight3" alt=""> </p>
                            <p class="p-0 m-0"><img data-src="media/index/news4.png" class="newspaper-padding fx fadeInRight4" alt=""> </p>
                        </div>
                    </div>
                </div>






                <?php loadFooter();  ?>

            </div>
        </div>
    </div>
    <?php loadJsIndexFiles(); ?>
    <script src="js/scripts/index.js "></script>
</body>

</html>