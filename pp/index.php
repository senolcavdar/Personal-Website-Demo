<?php
include './nedmin/connect.php';



$sorgu = $db->prepare("SELECT * FROM site_settings WHERE settings_id=1");
$sorgu->execute();
$bilgiyi_cek = $sorgu->fetch(PDO::FETCH_ASSOC);

$fetch_skill = $db -> prepare('SELECT*FROM about_me WHERE about_id=1');
$fetch_skill -> execute();
$fetch_s = $fetch_skill->fetch(PDO::FETCH_ASSOC);

$fetch_main = $db -> prepare('SELECT*FROM main WHERE main_id=1');
$fetch_main -> execute();
$fetch_m = $fetch_main->fetch(PDO::FETCH_ASSOC);

$fetch_contact = $db -> prepare('SELECT*FROM contact WHERE contact_id=1');
$fetch_contact -> execute();
$fetch_c = $fetch_contact->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title><?php  echo $bilgiyi_cek['site_title'];     ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="./assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="./assets/css/animate.css" rel="stylesheet">
        <link href="./assets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="./assets/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="./assets/img/logo.png"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Site içinde gezinme</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img" style="width: 100px; padding: -40px;" src="./assets/img/logo.png" alt="resim yok">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">ANA SAYFA </a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about"><?php echo $fetch_s['about_title'] ?></a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">İLETİŞİM</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-60">
                        <div class="margin-b-30">
                            <h1 class="promo-block-title"><?php echo $fetch_m['main_title'] ?> <br/> <?php echo $fetch_m['main_title2'] ?></h1>
                            <p class="promo-block-text"><?php echo $fetch_m['job_title'] ?></p>
                        </div>
                        <a target="_blank" a href="<?php echo $fetch_m['instagram'] ?>" title="Instagram">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="./assets/img/social_media/instagram.png" alt="resim yok"></a>
                        <a target="_blank" a href="<?php echo $fetch_m['twitter'] ?>" title="Twitter">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="./assets/img/social_media/twitter.png" alt="resim yok"></a>
                        <a target="_blank" a href="<?php echo $fetch_m['facebook'] ?>" title="Facebook">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="./assets/img/social_media/facebook.png" alt="resim yok"></a>
                        <a target="_blank" a href="<?php echo $fetch_m['linkedin'] ?>" title="Linkedin">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="./assets/img/social_media/linkedin.png" alt="resim yok"></a>
                        <a target="_blank" a href="<?php echo $fetch_m['github'] ?>" title="Github">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="./assets/img/social_media/github.png" alt="resim yok"></a>
                        <a target="_blank" a href="<?php echo $fetch_m['discord'] ?>" title="Discord">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="./assets/img/social_media/discord.png" alt="resim yok"></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img class="promo-block-img img-responsive" style="width: 360px ;" src="./assets/img/mockup/avatar-01.png" align="Avatar">

                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row" >
                    <div class="col-sm-5 sm-margin-b-60"  style="padding-left: -100px;">
                        <img class="full-width img-responsive" src="./assets/img/500x700/01.jpg"  alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <div class="section-seperator margin-b-50">
                            <div class="margin-b-50">
                                <div class="margin-b-30">
                                    <h2><?php echo $fetch_s['about_title'] ?></h2>
                                    <p><?php echo $fetch_s['cv_title'] ?></p>
                                    <p></p>
                                </div>
                                <a target="_blank" a href="./assets/img/cv/Şenol ÇAVDAR CV.pdf" class="btn-theme btn-theme-md btn-default-bg text-uppercase">CV'M İNDİR</a>
                            </div>
                        </div>

                        <h2><?php echo $fetch_s['skill_title'] ?></h2>
                        <!-- Progress Box -->
                        <div class="progress-box">
                            <h5><?php echo $fetch_s['first_skill'] ?> <span class="color-heading pull-right"><?php echo $fetch_s['first_counter'] ?>%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['first_counter'] ?>"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5><?php echo $fetch_s['second_skill'] ?> <span class="color-heading pull-right"><?php echo $fetch_s['second_counter'] ?>%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['second_counter'] ?>"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5><?php echo $fetch_s['third_skill'] ?> <span class="color-heading pull-right"><?php echo $fetch_s['third_counter'] ?>%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['third_counter'] ?>"></div>
                            </div>
                        </div>
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Promo Banner -->
        <div class="promo-banner parallax-window" data-parallax="scroll" data-image-src="./assets/img/1920x1080/01.jpg" style="padding-top: 200px">
            <div class="container-sm content-lg" >
                <h2 class="promo-banner-title"></h2>
                <p class="promo-banner-text"></p>
            </div>
        </div>
        <!-- End Promo Banner -->
        

        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                           <h2><?php echo $fetch_c['contact_title'] ?></h2>
                            <p><?php echo $fetch_c['content'] ?></p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row">
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>YERLEŞKE</h4>
                            <a target="_blank" a href="<?php echo $fetch_c['addresss_link'] ?>"><?php echo $fetch_c['addresss'] ?></a>
                        </div>
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>TELEFON</h4>
                            <a href="tel:+905073856542"><?php echo $fetch_c['gsm'] ?></a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>E-POSTA</h4>
                            <a href="mailto:<?php echo $fetch_c['email'] ?>"><?php echo $fetch_c['email'] ?></a>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
        
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer" style="margin-top: -35px"> 
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" style="width: 120px; padding: -50px ; margin-top: 15px;" src="./assets/img/logo.png" alt="resim yok">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left" style="margin-top: 38px">
                        <p class="margin-b-0"><a class="fweight-700" ><?php echo $fetch_m['main_title'] ?> <?php echo $fetch_m['main_title2'] ?></a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top" style="margin: 20px; padding-right: 48px">Yukarı</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="./assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="./assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="./assets/vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="./assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="./assets/js/layout.min.js" type="text/javascript"></script>
        <script src="./assets/js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="./assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="./assets/js/components/wow.min.js" type="text/javascript"></script>
            
    </body>
    <!-- END BODY -->
</html>

