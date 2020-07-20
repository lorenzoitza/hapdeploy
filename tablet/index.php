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

$detect = new Mobile_Detect;



?>
<!DOCTYPE html>
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
    <?php loadCssFilesTable(); ?>

</head>

<body>
    <?php loadPopUp(); ?>
    <header>
        <?php LoadMenuHeader(); ?>
    </header>


    <div id="fullpage">

        <div class="section " id="section0">
            <div class="fp-bg"></div>
            <div class="fullscreen">
                <div class="content">
                    <?php indexMain(); ?>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>

        <div class="section" id="section1">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-12 bg-light prt">
                        <div class="index-consecuence-item prt">
                            <?php
                            consequenceIndexEs();
                            btnLeerMasIndexEs("consecuencias.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-12 p-0 center-block justify-content-center align-items-center m-0 bgOrange prt">
                        <img src="media/colmena.svg" class="hive fx fadeInRight" alt="hive">
                    </div>

                
                    <div class="col-md-6 bg-light lscp">
                        <div class="index-consecuence-item lscp">
                            <?php
                            consequenceIndexEs();
                            btnLeerMasIndexEs("consecuencias.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 center-block justify-content-center align-items-center bgOrange lscp">
                        <img src="media/colmena.svg" class="hive fx fadeInRight" alt="hive">
                    </div>

                </div>
            </div>
            <?php loadScrollDownBlack(); ?>
        </div>


        <div class=" section fp-noscroll" id="section2">
            <div class="fp-bg"></div>
            <div class="container-fluid">
                <div class="row ">

                    <div class="col-sm-12 prt">
                        <div class="index-consecuence-item">
                            <?php fraudIndexEs();
                            ?>
                        </div>
                        <div class="fraudMessage">
                            <?php fraudMessageIndexEs();
                            btnLeerMasIndexEs("fraude.php");
                            ?>
                        </div>
                    </div>

                    <!-- Start landscape -->

                    <div class="col-sm-6  lscp">
                        <div class="index-consecuence-item">
                            <?php fraudIndexEs();
                            btnLeerMasIndexEs("fraude.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6  lscp">
                        <div class="fraudMessage">
                            <?php fraudMessageIndexEs();
                            ?>
                        </div>
                    </div>
                </div>
                <!-- End landscape -->
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>





        <div class="section" id="section3">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-12 bgYellow-v prt">
                        <div class="index-consecuence-item-v">
                            <?php
                            honeyFraudIndexEs();
                            btnLeerMasIndexEs("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="bgCrema-v  col-sm-12  prt">
                        <div class="col-sm-6">
                            <div class="text-center item-newspaper-left-v prt">
                                <img src="media/news1.png" class="prt newspaper-padding fx fadeInRight1" alt="">
                                <img src="media/news2.png" class="prt newspaper-padding fx fadeInRight2" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-center item-newspaper-right-v prt">
                                <img src="media/news3.png" class="prt newspaper-padding fx fadeInRight3" alt="">
                                <img src="media/news4.png" class="prt newspaper-padding bottomnews paper-padding fx fadeInRight4" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Start landscape Section3 -->
                    <div class="col-sm-8 bgYellow-h lscp">
                        <div class="index-consecuence-item-h ">
                            <?php
                            honeyFraudIndexEs();
                            btnLeerMasIndexEs("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="bgCrema-h col-sm-4 center-block text-right justify-content-center align-items-center lscp">
                        <div class="text-center item-newspaper-v item-newspaper-h">
                            <img src="media/news1.png" class="newspaper-padding-1 fx fadeInRight1" alt="">
                            <img src="media/news2.png" class="newspaper-padding fx fadeInRight2" alt="">
                            <img src="media/news3.png" class="newspaper-padding fx fadeInRight3" alt="">
                            <img src="media/news4.png" class="newspaper-padding fx fadeInRight4" alt="">
                        </div>
                    </div>
                    <?php loadFooter(); ?>
                </div>
                <!-- End landscape -->

                <?php //loadScrollDownBlack(); 
                ?>
            </div>
            <?php// loadFooter(); ?>
        </div>

        <!-- End portrait Section3 - Section4 -->

        <!-- <div class="section prt" id="section3-2">
            <div class="container-fluid bgCrema  prt">
                <div class="row prt">

                    <div class="col-sm-12 center-block justify-content-center align-items-center prt">
                        <div class="text-center item-newspaper prt">
                            <img src="media/news1.png" class="prt newspaper-padding fx fadeInRight1" alt="">
                            <img src="media/news2.png" class="prt newspaper-padding fx fadeInRight2" alt="">
                            <img src="media/news3.png" class="prt newspaper-padding fx fadeInRight3" alt="">
                            <img src="media/news4.png" class="prt newspaper-padding bottomnews paper-padding fx fadeInRight4" alt="">
                        </div>
                    </div>
                </div> 
                
            </div>
            <?php //loadFooter(); 
            ?>
        </div> -->
        <!-- End portrait Section3 - Section4 -->






    </div>
    <?php loadJsMobile(); ?>
    <script src="js/scripts/index-tablet.js ">
    </script>
</body>

</html>