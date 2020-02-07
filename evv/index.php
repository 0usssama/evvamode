<!DOCTYPE html>
<?php require_once('../includes/config.php') ;?>

<html lang="Fr">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>Evvamode</title>
    <meta name="keywords" content="HTML5 " />
    <meta name="description" content="evvamode HTML5">
    <meta name="author" content="etheme.com">
    <link rel="shortcut icon" href="nvlog.png">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External Plugins CSS -->
    <link rel="stylesheet" href="external/slick/slick.css">
    <link rel="stylesheet" href="external/slick/slick-theme.css">
    <link rel="stylesheet" href="external/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="external/rs-plugin/css/settings.css" media="screen" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style-layout10.css">
    <!-- Icon Fonts  -->
    <link rel="stylesheet" href="font/style.css">

</head>

<body class="index" style="text-align: left;">
    <span style="text-align: center"></span>
    <div id="loader-wrapper">

    </div>
    <!-- Back to top couleur de background -->
    <div class="back-to-top"> <span class="icon-keyboard_arrow_up"></span></div>
    <!-- /Back to top -->
    <!-- mobile menu -->
    <div class="hidden">
        <nav id="off-canvas-menu">
            <ul class="expander-list">
                <li>
                    <span class="name">
                        <span class="expander">-</span>
                        <a href="index.php"><span class="act-underline">Accueil</span></a>
                    </span>

                </li>

                <li>
                    <span class="name"><span class="expander">-</span>
                        <a href="Apropos.php"><span class="act-underline">À propos</span></a>
                    </span>

                </li>

                <li>

                    <span class="name">
                        <span class="expander">-</span>
                        <a href="moderne.php"><span class="act-underline">Haute coture</span></a>

                        <ul class="dropdown-menu megamenu image-links-layout" role="menu">
                            <li><a href="moderne.php">Moderne</a></li> <br>
                            <li><a href="traditionnel.php">Traditionnel</a></li>
                        </ul>

                    </span>


                </li>
                <li>

                    <span class="name">
                        <span class="expander">-</span>
                        <a href="evenement.php"><span class="act-underline">Evenement</span></a>
                    </span>

                </li>
                <li>
                    <span class="name">
                        <span class="expander">-</span>
                        <a href="soldes.php"><span class="act-underline">Soldes<span
                                    class="badge badge--menu badge--color">SALE</span></span></a>
                    </span>
                </li>

                <li>
                    <span class="name">
                        <span class="expander">-</span>
                        <a href="contact.php"><span class="act-underline">Contact</span></a>
                    </span>

                </li>

            </ul>



        </nav>
    </div>
    <!-- /mobile menu -
		<!-- HEADER section -->
    <div class="header-wrapper">
        <header id="header" class="header-layout-03 fill-bg-dark">
            <div class="container">
                <div class="row">

                    <div class="col-sm- col-md-9 col-lg-12 col-xl-9 text-right">
                        <!-- espace pour inscrire-->
                        <div class="account-row-list pull-right mobile-menu-off">

                            <ul>
                                <li><a href="point_pv.php"><span class="icon icon-place"></span> <b>Nos point de
                                            vent</b></a></li>
                                <li><a href="loginouss.php"><span class="icon icon-person"></span><b>espace
                                            client</b></a></li>
                            </ul>
                        </div>
                        <!-- /fin de menu inscrire -->
                    </div>
                </div>
            </div>


            <div class="stuck-nav">
                <div class="container">
                    <div class="row">
                        <div class="pull-left col-sm-10 col-md-10 col-lg-10 col-xl-11">

                            <nav class="navbar navbar-color-white">
                                <div class="responsive-menu mainMenu">

                                    <!-- Mobile menu Bouton-->

                                    <div class="col-xs-2 visible-mobile-menu-on">
                                        <div class="expand-nav compact-hidden">
                                            <a href="#off-canvas-menu" class="off-canvas-menu-toggle">
                                                <div class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="menu-text">MENU</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- //fin Mobile menu Bouton -->
























                                    <ul class="nav navbar-nav">
                                        <li class="dl-close"><a href="#"><span class="icon icon-close">fremer</span></a>
                                        </li>


                                        <li class="dropdown dropdown-mega-menu">
                                            <a href="index.php">
                                                <img src="log.png" width="80" height="100">
                                            </a>
                                        </li>


                                        <li class="dropdown dropdown-mega-menu">
                                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="act-underline">Accueil</span></a>

                                        </li>

                                        <li class="dropdown dropdown-mega-menu dropdown-two-col">
                                            <span class="dropdown-toggle extra-arrow"></span>
                                            <a href="Apropos.php" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="act-underline">À propos</span></a>

                                        </li>


                                        <li class="dropdown dropdown-mega-menu">
                                            <span class="dropdown-toggle extra-arrow"></span>
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="act-underline">Haute coture</span></a>

                                            <ul class="dropdown-menu megamenu image-links" role="menu">
                                                <li><a href="moderne.php">Moderne</a></li> <br><br>
                                                <li><a href="traditionnel.php">Traditionnel</a></li>

                                            </ul>
                                        </li>

                                        <li class="dropdown dropdown-mega-menu">
                                            <span class="dropdown-toggle extra-arrow"></span>
                                            <a href="soldes.php" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="act-underline">Soldes<span
                                                        class="bdge badge--menu badge--color">solde</span></span></a>

                                        </li>

                                        <li class="dropdown dropdown-mega-menu">
                                            <span class="dropdown-toggle extra-arrow"></span>
                                            <a href="evenement.php" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="act-underline">Evenement</span></a>

                                        </li>


                                        <li class="dropdown dropdown-mega-menu">
                                            <span class="dropdown-toggle extra-arrow"></span>
                                            <a href="contact.php" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="act-underline">Contact</span>
                                            </a>

                                        </li>

                                    </ul>
                                </div>

                            </nav>

                        </div>


                    </div>
                </div>
            </div>
        </header>

    </div>




    <!-- fin HEADER section -->
    <!-- Slider section -->
    <section class="content offset-top-0 tp-banner-button1 slider-layout-3" id="slider">
        <!--
			
			<!--  SLIDER  -->
        <h2 class="hidden">Slider Section</h2>
        <div class="tp-banner-container">

            <div class="tp-banner">
                <ul>
                    <!-- SLIDE -1 -->
                    <?php
								$sql = "SELECT * FROM slider";
								if($pdo->query($sql)){
									foreach  ($pdo->query($sql) as $row) {
							?>
                    <li data-transition="fade" data-masterspeed="10" data-saveperformance="on" data-title="Slide">
                        <!-- MAIN IMAGE -->
                        <img width="2048" height="855"
                            src="<?php echo '../admin/ajouter/uploads/'.$row['url_img_slider'] ;?>">

                        <div class="tp-caption lfl stb" data-x="205" data-y="center" data-voffset="60" data-speed="600"
                            data-start="700" data-easing="Power1.easeOut" data-endeasing="Power1.easeIn" style="z-index: 2;
								">

                            <div class="tp-caption1--wd-3">EvvaMode <br>groube de styliste</div>

                        </div>
                    </li>
                    <?php }
            }; ?>
                </ul>
            </div>


        </div>
    </section>
    <!-- END REVOLUTION SLIDER -->
    <!-- CONTENT section -->
    <div id="pageContent">
        <div class="content">
            <div class="container">
                <!-- title -->
                <div class="title-with-button">
                    <span class="btn-next"></span> </div>
                <h2 class="text-center text-uppercase title-under" style="color: #000000">la Mode </h2>
                <p
                    style="color: #000000; font-size: 20px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: center;">
                    Des stylistes algériens de la haute couture décline dans les matiéres les plus noble et les plus
                    rares,les collections precieuse a portée dans la mode traditionnelle et moderne qui fait de
                    l'elegance une harmonie qui s'ambolise la femme </p>



                <div class="row">
                    <div class="category-carousel">

                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <a href="moderne.php" class="banner zoom-in">

                                <span class="figure">
                                    <img height="600" src="caaa.jpg" alt="" />
                                    <span class="figcaption">
                                        <span class="block-table" style="background-color: rgba(0,0,0,0.4);">
                                            <span class="block-table-cell">
                                                <span class="banner__title size5">Modernne</span>

                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <a href="traditionnel.php" class="banner zoom-in">
                                <span class="figure">
                                    <img height="600" src="carak.jpg" alt="" />
                                    <span class="figcaption">
                                        <span class="block-table" style="background-color: rgba(0,0,0,0.4);">
                                            <span class="block-table-cell">
                                                <span class="banner__title size5">Traditionnel</span>

                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>





    </div>



    <!--=== box-baners ===-->
    <div class="container box-baners content">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-with-button" style="color: #fff">
                    <h2 class="text-center text-uppercase title-under"><strong>top modele</strong></h2>
                </div>
                <!-- banner des top modele-->
                <div class="content carusel--parallax" data-image="images/custom/layout11/tof.jpg">
                    <div class="title-with-button">
                        <h2 class="text-center text-uppercase title-under"></h2>


                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- title -->

                            <!-- /title -->
                            <!-- carousel-new -->
                            <div class="carousel-products row" id="postsCarousel">


                                <?php 
							$sql = "
							SELECT  
		article.nom_art,
		article.prix_art,
		article.descri_art,
		article.id_styls, 
		article.id_catg,
		article.id_styl,
        article.id_art
       , article.url_img_art
       
       , ( SELECT AVG(voter.nbr_etoile) 
           FROM voter
           WHERE voter.id_art = article.id_art
         )
         AS moyen_nbr_etoile 
     FROM
      article
         
     GROUP BY
         article.id_art
         ORDER BY moyen_nbr_etoile DESC LIMIT 4  
							";
							foreach ($pdo->query($sql) as $row) {
							
							?>
							
                                <!-- slide-->
                                <div class="col-sm-3 col-xl-6">
								
                                    <!--  -->
                                    <div class="recent-post-box">
									<a href="<?php if($row['id_styl'] == 1){ echo 'moderne.php';}else{echo 'moderne.php';} ?>" >
										<div class="col-lg-12 col-xl-6">

                                            <span class="figure">
											
                                                <img src="../admin/ajouter/uploads/<?php echo $row['url_img_art']; ?>"
                                                    alt="">
                                                <span class="figcaption label-top-left">
                                                    <span>
                                                        <b>top</b>
                                                        <em>model</em>
                                                    </span>
                                                </span>
                                            </span>

                                        </div>
										</a>
                                        <div class="col-lg-12 col-xl-6">
										
                                            <div class="recent-post-box__text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / -->
                                </div>
                                <!-- /slide -->
								
                                <?php 
							}
							
							?>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- /banner  fin de top modele-->



    <!--=== /box-baners ===-->
    <!-- brands-carousel nos partenaire -->
    <br><br>
    <div class="title-with-button">
        <span class="btn-next"></span> </div>
    <h2 class="text-center text-uppercase title-under" style="color: #000000">Nos stylistes </h2>
    <div class="content section-indent-bottom">
        <div class="brands-carousel">

            <?php
                         $sql = "SELECT url_logo_styls FROM styliste ";
                      	 ?>
            <?php 
         			     if($pdo->query($sql)){
          				  foreach  ($pdo->query($sql) as $row) { ?>
            <div>
                <img width="120" height="120" src="<?php echo '../admin/ajouter/uploads/'.$row['url_logo_styls'] ;?>"
                    alt="">

            </div>

            <?php  } }?>

        </div>

    </div>

    <!-- /brands-carousel -->
    <!--	
			
		
		<!- End CONTENT section -->
    <!-- FOOTER section -->

    <footer class="layout-4 fill-bg">
        <!-- footer-data -->
        <div class="container inset-bottom-60">
            <div class="row">

                <div class="col-sm-8 col-md-4">
                    <!--  -->
                    <div class="mobile-collapse">
                        <h4 class="text-left text-uppercase  title-under  mobile-collapse__title">Menu </h4>
                        <div class="v-links-list mobile-collapse__content">
                            <a href="index.php"><span class="act-underline">Accueil</span></a> <br>

                            <a href="Apropos.php"><span class="act-underline">Apropos</span></a> <br>

                            <a href="moderne.php"><span class="act-underline">Haute couture</span></a><br>

                            <a href="evenement.php"><span class="act-underline">Evenement</span></a><br>

                            <a href="soldes.php"><span class="act-underline">Soldes</span></a> <br>

                            <a href="contact.php"><span class="act-underline">Contact</span></a> <br>

                            <a href="cgv.html"><span class="act-underline">CGV</span></a>
                        </div>
                    </div>
                    <!-- / -->
                </div>





                <div class="col-sm-8 col-md-4">
                    <!-- -->
                    <div class="mobile-collapse">
                        <h4 class="text-left text-uppercase  title-under  mobile-collapse__title text-uppercase">
                            Contactez nous</h4>
                        <div class=" mobile-collapse__content">
                            <!-- address -->
                            <address class="box-address">
                                <span class="icon icon-home">Rue des Frères Bouadou,<br> Bir Mourad Raïs,
                                    Algérie</span><a class="color link" href=""></a> <br>
                                <span class="icon icon-call"> 0554225202</span> <br>
                                <span class="icon icon-markunread">
                                    <a class="tp" href="mailto:info@mydomain.com">info@mydomain.com</a>
                                </span>
                            </address>
                            <!-- /address -->
                        </div>
                    </div>
                </div>





                <div class="divider divider--lg visible-sm"></div>
                <div class="col-sm-8 col-md-4">
                    <!-- -->
                    <div class="mobile-collapse">
                        <h4 class="text-left text-uppercase  title-under  mobile-collapse__title text-uppercase">
                            information</h4>
                        <div class=" mobile-collapse__content">
                            <!-- address -->
                            <address class="box-address">
                                <span> evvamode c'est un groupe choisi par des stylistes pour exposer leurs
                                    modeles de vètments traditionnel et moderne </span><br>

                            </address>
                            <!-- /address -->
                        </div>
                    </div>
                </div>

            </div>



            <!-- /footer-data -->

            <!-- footer-copyright -->

            <div class="container footer-copyright">
                <div class="row">
                    <a href="index.html"><span>&copy; 2019. tous les droit sont réservers.EvvaMode. </span></a>
                    <!-- /footer-copyright -->
                    <span style="color: #cd111a"><a href="#" class="btn btn--ys btn--full visible-xs"
                            id="backToTop">Back to top </a> </span>


                    <!-- END FOOTER section -->
                </div>
            </div>
        </div>

    </footer>
    <!-- jQuery 1.10.1-->
    <script src="external/jquery/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap 3-->
    <script src="external/bootstrap/bootstrap.min.js"></script>
    <!-- boot -->
    <script src="external/slick/slick.min.js"></script>
    <script src="external/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="external/countdown/jquery.plugin.min.js"></script>
    <script src="external/countdown/jquery.countdown.min.js"></script>
    <script src="external/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="external/isotope/isotope.pkgd.min.js"></script>
    <script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="external/colorbox/jquery.colorbox-min.js"></script>
    <!-- SLIDER  SCRIPTS  -->
    <script type="text/javascript" src="external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
    <script src="js/js-index-10.js"></script>
</body>

</html>