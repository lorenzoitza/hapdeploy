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
    <header>
        <?php LoadMenuHeader(); ?>
        
    </header>


    <div id="fullpage">

        <div class="section fp-noscroll" id="section0">
            <div class="fp-bg"></div>
            <div class="fullscreen center-block">
                <div class="row align-items-center ">
                    <div class="col col-center text-center">
                        <?php indexMain(); ?>
                    </div>
                </div>
            </div>
            <?php loadScrollDownWhite(); ?>
        </div>


        <div class="section fp-noscroll" id="section1">
            <div class="container-fluid">
            <?php loadScrollUpBlack(); ?>
                <div class="row">
                    <div class="col-md-6 bg-light">
                        <div class="index-consecuence-item">
                            <?php
                            consequenceIndexEs();
                            btnLeer("consecuencias.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 center-block justify-content-center align-items-center m-0 bgOrange">
                        <img src="media/index/colmena.svg" class="hive fx fadeInRight" alt="">

                    </div>

                </div>
                <?php loadScrollDownBlack(); ?>
            </div>
        </div>


        <div class="section fp-noscroll" id="section2">
            <div class="fp-bg"></div>
            <div class="container-fluid">
            <?php loadScrollUpWhite(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="index-consecuence-item">
                            <?php fraudIndexEs();
                            btnLeer("fraude.php");  ?>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative ">
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
                    <div class="col-md-6 bgYellow ">
                        <div class="index-consecuence-item ">
                            <?php
                            honeyFraudIndexEs();
                            btnLeer("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 center-block text-right justify-content-center align-items-center ">
                        <div class="text-right pt-1">
                            <p class="p-0 m-0 "><img src="media/index/news1.png" class="newspaper-padding fx fadeInRight1" alt=""> </p>
                            <p class="p-0 m-0"><img src="media/index/news2.png" class="newspaper-padding fx fadeInRight2" alt=""> </p>
                            <p class="p-0 m-0"><img src="media/index/news3.png" class="newspaper-padding fx fadeInRight3" alt=""> </p>
                            <p class="p-0 m-0"><img src="media/index/news4.png" class="newspaper-padding fx fadeInRight4" alt=""> </p>
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