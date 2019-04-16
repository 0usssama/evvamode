<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>admin</title>

  <!-- Custom fonts for this template-->
  <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../admin/css/sb-admin.min.css" rel="stylesheet">


</head>

<body class="bg-white">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">se connecter </div>
		
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
             <input type="pseudo" id="inputEmail" name="inputEmail" class="form-control" placeholder="pseudo" required="required" autofocus="autofocus">
              <label for="inputEmail">Pseudo</label>
            </div>
			  
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Mot de passe</label>
            </div>
          </div>
          
          <input type="submit" value="connecter" name="connecter" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">s'inscrire</a>
        </div>
        <div class="<?php if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])){echo 'alert alert-warning mt-2';} ?>" role="alert">
 
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
//ndirouha hna w khlass ok? 
if(isset($_POST['connecter'])){
//1st lazem database connecté lfo9
//2nd lazem check ida email y'existi w password

      if(isset($_POST['inputPassword']) && isset($_POST['inputEmail'])){
        $errors = [];
        $email = strip_tags($_POST['inputEmail']);
        $password = strip_tags($_POST['inputPassword']);
        
        $sql = "SELECT * FROM client WHERE email_client LIKE :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        
        $stmt->execute();

        $lgah = $stmt->fetch();

        if($lgah){
          //echo 'email kayan fe bdd';
            //check iida le méme mot de pass dok
            //mot de pass decoupa be une fonction password_hash
            //chghol 9assamtih be mouss ta3 khobz  
            //alr bah yverifyi ida houwa le méme yagbad el mot de pass li dakhlo 
            //l'utilisateur w y9assem el khobza be la méme méthode 
            //ida el khobza el ma9ssoma el mkhabia (base de donnée)
            //techbah lel jdida el ma9ssoma tssema kifkif nafss naw3ia w minho nafss
            //el mot de passe hhhhhhh
            
            
            if(password_verify($password, $lgah['password_client'])){
              //echo 'YAAAAAAAAAA AAAY youpiii';
              $_SESSION['id_client'] =  $lgah['id_client'];
              $_SESSION['nom_client'] =  $lgah['nom_client'];
              $_SESSION['prenom_client'] =  $lgah['prenom_client'];
              header('location: espace_client/index.php');
              
            }else{
             // echo 'il faut pas takdab';
             $errors[] = 'Votre mot de passe est invalide, veuillez réessayer svp ';


            }


        }else{
          //echo 'email makach fel bdd';
          $errors[] = 'Votre email n\'existe pas dans notre base de données, veuilez inscrire svp ';

        }

       
      }


}


?>