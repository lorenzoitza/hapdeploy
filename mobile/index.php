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
<html lang="<?php echo $_SESSION['varHTML_Lang']; ?>" <head>
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

        <div class="section " id="section0">
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



        <div class="section" id="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 bg-light">
                        <div class="index-consecuence-item">
                            <?php
                            consequenceIndexEs();
                            btnLeerMasIndexEs("consecuencias.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0 center-block justify-content-center align-items-center m-0 bgOrange">
                    <img src="media/colmena.svg" class="hive fx fadeInRight" alt="hive">
                    </div>

                </div>
                <?php loadScrollDownBlack(); ?>
            </div>
        </div>


        <div class=" section" id="section2">
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
            <?php loadScrollDownWhite();
            ?>
        </div>





        <div class="section fp-auto-height-responsive" id="section3">
            <div class="container-fluid bgCrema  ">
                
            
            <div class="row">
                    <div class="col-sm-12 bgYellow prt">
                        <div class="index-consecuence-item ">
                            <?php
                            honeyFraudIndexEs();
                            btnLeerMasIndexEs("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <!-- <div class="col-sm-12 center-block justify-content-center align-items-center prt">
                        <div class="text-right item-newspaper">
                        <div class="col-sm-6">
                            <img src="media/news1.png" class="newspaper-padding-left fx fadeInRight1" alt="">
                            <img src="media/news2.png" class="newspaper-padding-left fx fadeInRight2" alt="">
                            </div>
                        <div class="col-sm-6">
                            <img src="media/news3.png" class="newspaper-padding-right fx fadeInRight3" alt=""> 
                            <img src="media/news4.png" class="newspaper-padding-right bottomnews paper-padding fx fadeInRight4" alt=""> 
                            </div>
                        </div>
                    </div>            -->

                <!-- Start landscape Section3 -->
                    <div class="col-sm-8 bgYellow lscp">
                        <div class="index-consecuence-item ">
                            <?php
                            honeyFraudIndexEs();
                            btnLeerMasIndexEs("importaciones_exportaciones.php");
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4 center-block text-right justify-content-center align-items-center lscp">
                        <div class="text-center item-newspaper">
                            <img src="media/news1.png" class="newspaper-padding-1 fx fadeInRight1" alt="">
                            <img src="media/news2.png" class="newspaper-padding fx fadeInRight2" alt="">
                            <img src="media/news3.png" class="newspaper-padding fx fadeInRight3" alt="">
                            <img src="media/news4.png" class="newspaper-padding fx fadeInRight4" alt="">
                        </div>
                    </div>
                </div>
                <!-- End landscape -->                
            </div>
            <?php loadFooter(); ?>
        </div>

        <!-- End portrait Section3 - Section4 -->





        
    </div>
    <?php loadJsMobile(); ?> 
    <script src="js/scripts/index-mobile.js ">
    </script>
</body>

</html>