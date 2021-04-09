<?php
include './nedmin/connect.php';



$sorgu = $db->prepare("SELECT * FROM site_settings");
$sorgu->execute();

$bilgiyi_cek = $sorgu->fetch(PDO::FETCH_ASSOC);

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
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/logo.png"/>
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
                                <img class="logo-img" style="width: 100px; padding: -40px;" src="./img/logo.png" alt="resim yok">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">ANA SAYFA </a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">HAKKIMDA</a></li>
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
                            <h1 class="promo-block-title">ŞENOL <br/> ÇAVDAR</h1>
                            <p class="promo-block-text">BİLGİSAYAR MÜHENDİSİLİĞİ ÖĞRENCİSİ</p>
                        </div>
                        <a target="_blank" a href="https://www.instagram.com/ahmetsenolcavdar/" title="Instagram">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="img/social_media/instagram.png" alt="resim yok"></a>
                        <a target="_blank" a href="https://www.instagram.com/ahmetsenolcavdar/" title="Twitter">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="img/social_media/twitter.png" alt="resim yok"></a>
                        <a target="_blank" a href="https://www.facebook.com/ahmetsenol.cavdar/" title="Facebook">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="img/social_media/facebook.png" alt="resim yok"></a>
                        <a target="_blank" a href="https://www.linkedin.com/in/%C5%9Fenol-%C3%A7avdar-3a1a18161/" title="Linkedin">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="img/social_media/linkedin.png" alt="resim yok"></a>
                        <a target="_blank" a href="https://github.com/senolcavdar" title="Github">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="img/social_media/github.png" alt="resim yok"></a>
                        <a target="_blank" a href="https://discord.gg/VfX3Aqz5" title="Discord">
                        <img class="sosyal-medya" style="width: 44px; margin: 8px;" src="img/social_media/discord.png" alt="resim yok"></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img class="promo-block-img img-responsive" style="width: 360px ;" src="img/mockup/avatar-01.png" align="Avatar">

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
                        <img class="full-width img-responsive" src="img/500x700/01.jpg"  alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <div class="section-seperator margin-b-50">
                            <div class="margin-b-50">
                                <div class="margin-b-30">
                                    <h2>HAKKIMDA</h2>
                                    <p>Ben Şenol ÇAVDAR. 7 Ağustos 2002 tarihinde Kayseri'de dünyaya geldim. Kayseri'de yaşıyorum. Eğitimime Refika Küçükçalık İlköğretim Okulu'nda başladım. Daha sonra Refika Küçükçalık Ortaokulu'nda eğitimime devam ettim. Aynı zamanda lise sınavlarına hazırlandım. Lise sınavları sonucunda Seyide Daloğlu Anadolu Lisesi'nde eğitimime devam ettim. Buradaki eğitimimi bitirip üniversite sınavlarına hazırlandım. Üniversite sınavı sonucunda İnönü Üniversitesi Bilgisayar Mühendisliği bölümünü kazandım ve burada eğitimime devam ediyorum.
                                    </p>
                                    <p></p>
                                </div>
                                <a target="_blank" a href="./img/cv/Şenol ÇAVDAR CV.pdf" class="btn-theme btn-theme-md btn-default-bg text-uppercase">CV'M İNDİR</a>
                            </div>
                        </div>

                        <h2>YETENEKLERİM</h2>
                        <!-- Progress Box -->
                        <div class="progress-box">
                            <h5>HTML <span class="color-heading pull-right">10%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="10"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Java <span class="color-heading pull-right">4%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="4"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>JavaScript <span class="color-heading pull-right">5%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="5"></div>
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
        <div class="promo-banner parallax-window" >
        <img src="./img/1920x1080/01.jpg" alt="" style="width: 60%">
         </div>
        <!-- End Promo Banner -->

        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                           <h2>İLETİŞİM</h2>
                            <p>Benimle aşağıda belirtilen şekillerle iletişime geçebilirsiniz.</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row">
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>YERLEŞKE</h4>
                            <a target="_blank" a href="https://www.google.com/maps/place/38%C2%B043'38.7%22N+35%C2%B029'36.9%22E/@38.7274049,35.4920344,17z/data=!3m1!4b1!4m14!1m7!3m6!1s0x152b0e1d3fa4a74f:0x84bd8c4d5a4c2da7!2sKayseri!3b1!8m2!3d38.720489!4d35.482597!3m5!1s0x0:0x0!7e2!8m2!3d38.7274017!4d35.4935822">Kayseri,TÜRKİYE</a>
                        </div>
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>TELEFON</h4>
                            <a href="tel:+905073856542">+90 507 385 65 42</a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>E-POSTA</h4>
                            <a href="mailto:ahmetsenolcavdar@gmail.com">ahmetsenolcavdar@gmail.com</a>
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
                        <img class="footer-logo" style="width: 120px; padding: -50px ; margin-top: 15px;" src="img/logo.png" alt="resim yok">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left" style="margin-top: 38px">
                        <p class="margin-b-0"><a class="fweight-700" >ŞENOL ÇAVDAR</a></p>
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
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
            
    </body>
    <!-- END BODY -->
</html>