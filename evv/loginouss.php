

<!DOCTYPE html>
<?php require_once('../includes/config.php') ;?>
<?php session_start();?>

<html lang="Fr">
	<head>
  <meta charset="utf-8">
  <title>Evvamode</title>
  <meta name="keywords" content="HTML5 " />
  <meta name="description" content="evvamode HTML5">
  <meta name="author" content="etheme.com">
  <link rel="shortcut icon" href="favicon.ico">
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

  <!-- Head Libs -->	
  <!-- Modernizr -->
  <script src="external/modernizr/modernizr.js"></script>
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>login</title>

<!-- Custom fonts for this template-->
<link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template-->

<link href="../admin/css/sb-admin.css" rel="stylesheet">

	</head>
	<body class="index" style="">
		<span style="text-align: center"></span>
		
		<!-- Back to top couleur de background -->	  
		<div class="back-to-top"> <span class="icon-keyboard_arrow_up"></span></div>
	
		<div class="header-wrapper">
			<header id="header" class="header-layout-03 fill-bg-dark">
				<div class="container">
              <div class="row">					
              
                  <div class="col-sm- col-md-12 col-lg-12 col-xl-12 text-right">				
                  <!-- espace pour inscrire-->
                        <div class="account-row-list pull-right mobile-menu-off">
                          
                              <ul>
                                <li><a href="wishlist.php"><span class="icon icon-place"></span>Nos point de vente</a></li>
                                <li><a href="loginouss.php"><span class="icon icon-lock"></span>espace client</a></li>
                              </ul>
                        </div>
                    <!-- /fin de menu inscrire -->
                  </div>
              </div>
        </div>
			
	
			</header>
	
	</div>
		
		<br>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header "   style="color:#ffffff;" ><img src="log.png" width="60" height="80"  >  se connecter </div>
		
      <div class="card-body">
        <form method="post" action=" test_login.php">
          <div class="form-group">
            <div class="form-label-group">
             <input type="pseudo" id="inputEmail" name="inputEmail" class="form-control" placeholder="" required="required" autofocus="autofocus">
              <label for="inputEmail">Email</label>
            </div>
			  
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="" required="required">
              <label for="inputPassword">Mot de passe</label>
            </div>
          </div>
          
          <input type="submit" name="connecter" value="connecter" class="btn btn-primary btn-block">
          <a class="" href="../achat/index.php"></h3> </a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">s'inscrire</a>
        </div>
        <div class="<?php if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs']))
        {echo 'alert alert-danger mt-4';} ?>" role="alert">
         <?php 
         if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs']) ){
         echo '<ul>';
         //var_dump($_SESSION);
          foreach ($_SESSION['erreurs'] as $erreur) {
           echo '<li>' . $erreur . '</li>';
          }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
	
	
<br><br><br>
		
		
		<!-- End CONTENT section -->
		<!-- FOOTER section -->
				
		<footer class="layout-4 fill-bg"style=" padding-top: 10px;">
			<!-- footer-data -->
	
				
			<div class="container footer-copyright ">
				<div class="row">
				<a><span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        &nbsp;&nbsp; &nbsp; &nbsp;
         &copy; 2019. tous les droit sont réservers.EvvaMode. </span></a> 	
			<!-- /footer-copyright --> 
			<span style="color: #cd111a; "><a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top </a> </span>
					
					
					<!-- END FOOTER section -->
			</div>
				</div>
		
			
			</footer>
	<!-- jQuery 1.10.1--> 
	<script src="external/jquery/jquery-2.1.4.min.js"></script> 
		<!-- Bootstrap 3--> 
		<script src="external/bootstrap/bootstrap.min.js"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="external/slick/slick.min.js"></script>
		<script src="external/bootstrap-select/bootstrap-select.min.js"></script>  
		<script src="external/countdown/jquery.plugin.min.js"></script> 
		<script src="external/countdown/jquery.countdown.min.js"></script>  	  		
		<script src="external/magnific-popup/jquery.magnific-popup.min.js"></script>  		
		<script src="external/isotope/isotope.pkgd.min.js"></script> 
		<script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="external/colorbox/jquery.colorbox-min.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="external/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
		<script type="text/javascript" src="external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
		<!-- Custom --> 
		<script src="js/custom.js"></script>
		<script src="js/js-index-10.js"></script>					
	</body>
</html>










<?php 
$_SESSION['erreurs'] = '';
unset($_SESSION);
?>