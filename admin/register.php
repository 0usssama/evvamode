<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>espac admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-white">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header" style="color:white;" > Créer un compte</div>
      <div class="card-body">
        <form method="post" action="ajouter/ajouter_client.php" class="needs-validation">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nom_client" name="nom_client" class="form-control" placeholder="Nom" required="required" autofocus="autofocus">
                  <div class="valid-feedback">
        Looks good!
      </div>
                  <label for="nom_client">Nom</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="prenom_client" id="prenom_client" class="form-control" placeholder="Prénom" required="required">
                  <div class="valid-feedback">
        Looks good!
      </div>
                  <label for="prenom_client">Prénom</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email_client" id="email_client" class="form-control" placeholder=" mail@gmail.com.." required="required">
              <label for="email_client">email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="tel_client" id="tel_client" class="form-control" placeholder=" rue..." required="required">
              <label for="tel_client">telephone</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="password" id="password_client" name="password_client" class="form-control" placeholder="Password" required="required">
                  <label for="password_client">Mot de passe</label>
                </div>
              </div>
              
            </div>
          </div>
         
         
         <input type="submit" value="s'inscrire" class="btn btn-primary btn-block" name="inscrire">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">se connecter?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
