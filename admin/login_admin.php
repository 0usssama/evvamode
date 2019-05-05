

<!DOCTYPE html>
<html lang="fr">
<?php session_start(); 

?>
<head>

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

<body >

  <div class="container " style="margin-top:150px ">
    <div class="card card-login mx-auto">
      <div class="card-header "   style="color:#ffffff;" > se connecter </div>
		
      <div class="card-body">
        <form method="post" action=" test_login.php">
          <div class="form-group">
            <div class="form-label-group">
             <input type="pseudo" id="inputEmail" name="inputEmail" class="form-control" placeholder="" required="required" autofocus="autofocus">
              <label for="inputEmail">Utilisateur</label>
            </div>
			  
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="" required="required">
              <label for="inputPassword">Mot de passe</label>
            </div>
          </div>
          
          <input type="submit" name="connecter" value="connecter" class="btn btn-primary btn-block">
          <a class="" href="../admin/admin.php"></h3> </a>
        </form>
      
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
	
	
	
	
  <!-- Bootstrap core JavaScript-->
  <script src="../admin/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<?php 
$_SESSION['erreurs'] = '';
unset($_SESSION);
?>