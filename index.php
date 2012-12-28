<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ГСП Београд</title>
        <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Scada:400italic,700italic,400,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
            <!-- end of google fonts -->

            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" type="text/css" href="css/styles.css" />
            <link rel="shortcut icon" href="images/icon.png" />
            <script src="js/jquery-1.7.2.min.js"></script>

            <!-- lightbox -->
            <link href="css/lightbox.css" rel="stylesheet" />	
            <script src="js/lightbox.js"></script>
            <!-- end lightbox -->

            <!-- Nivo Slider -->
            <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
            <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
            <script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
            <!-- End of Slider -->

            <!-- Glavni meni -->
            <link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
            <link href="css/dropdown/themes/default/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
            <!-- / END -->

            <link href="css/menu_assets/styles.css" rel="stylesheet" type="text/css" />

            <!-- Moji meniji -->
            <script src="js/menus.js" type="text/javascript"></script>
            <!-- End of Moji meniji -->

    </head>
    <body>
        <!-- Begin Wrapper -->
        <div id="wrapper">
            <!-- Begin Header -->
            <div id="header">
                <!-- Begin Slider -->
               	<div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <a href="index.php"><img src="images/header/slider_bus.jpg" alt="" /></a>
                        <a href="index.php"><img src="images/header/slider_trola.jpg" alt="" /></a>
                        <a href="index.php"><img src="images/header/slider_tramvaj.jpg" alt="" /></a>
                    </div>
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>

                <script type="text/javascript">
                    $(window).load(function() {
                        $('#slider').nivoSlider();
                    });
                </script>
                <!-- End Slider-->
            </div>
            <!-- End Header -->


            <!-- Begin Naviagtion -->
            <div id="navigation">
                <div id="meni">
                    <ul id="nav" class="dropdown dropdown-horizontal">
                        <li><a href="index.php">Почетна</a></li>
                        <li><a href="?strana=istorija_pocetak">О ГСП-у</a></li>
                        <li class="dir">Линије
                            <ul>
                                <li><a href="?strana=dnevne_linije">Дневне линије</a></li>
                                <li><a href="?strana=nocne_linije">Ноћне линије</a></li>
                                <!--<li><a href="skolske_linije.php">Школске линије</a></li>-->
                            </ul>
                        </li>
                        <li><a href="?strana=galerija">Галерија</a></li>
                        <li class="dir">Карте
                            <ul>
                                <li><a href="?strana=karte_i_markice">Карте и маркице</a></li>
                                <li><a href="?strana=cene">Цене</a></li>	
                            </ul>
                        </li>
                        <li class="dir">Информације
                            <ul>
                                <li><a href="?strana=promena_rezima">Промена режима</a></li>
                                <li><a href="?strana=novosti">Новости</a></li>				
                            </ul>
                        </li>
                        <li><a href="?strana=marketing">Маркетинг</a></li>
                        <li><a href="?strana=kontakt">Контакт</a></li>>
                    </ul>
                </div>
            </div>
            <!-- End Naviagtion -->

            <!-- Begin Content -->
            <div id="content">

                <?php
                error_reporting(E_ALL ^ E_NOTICE);
                include 'inc/baza.php';
                if ($_REQUEST ['strana']) {
                    include ($_REQUEST['strana'] . '.php');
                } elseif ($_REQUEST['naslov'])
                    include 'promena_rezima.php';
                else {
                    include 'home.php';
                }
                ?>
            </div>
            <!-- End Content -->

            <!-- Begin Footer -->
            <div id="footer"> 
                <ul class="footer_links">
                    <li><a href="?strana=dnevne_linije">Дневне линије</a></li>
                    <li><a href="?strana=nocne_linije">Ноћне линије</a></li>
                    <li><a href="?strana=karte_i_markice">Карте и маркице</a></li>
                    <li><a href="?strana=promena_rezima">Промене режима</a></li>
                    <li><a href="?strana=kontakt">Контакт</a></li>
                </ul>
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Wrapper -->
    </body>
</html>
