

<?php 
       session_start();

require_once('../includes/config.php') ;

if(!isset($_SESSION['id_admin'])){
  header('location: ../login_jdid/log.php');
}
?>






<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="shortcut icon" href="nvlog.png">

  <meta name="author" content="">

  <title>EvvaMode</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
<style>
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
</style>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand sticky-top navbar-dark bg-dark ">

    <a class="navbar-brand mr-1" href="index.html">
      <img src="log.png" width="40" height="55">  EvvaMode</a>

   

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Se déconnecter</a>
        </div>
      </li>
    </ul>

  </nav>
  <div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
<li class="nav-item">
    <a class="nav-link" href="admin.php">
      <i class="fas fa-fw fa-2x fa-user-lock text-danger" ></i>
      <span>Admins</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="client.php">
      <i class="fas fa-fw fa-2x fa-users text-danger" ></i>
      <span>Clients</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="article.php">
    <i class="far fa-2x fa-id-card text-danger"></i>    
      <span>Article</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="categories.php">
    <i class="fas fa-2x fa-align-justify text-danger"></i>
      <span>categories</span></a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="styliste.php">
      <i class="fas fa-2x  fa-address-book text-danger"></i>
        <span>Stylistes</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="commandes.php">
        <i class="fas fa-2x fa-shopping-cart text-danger"></i>
          <span>Commandes</span></a>
      </li>
      
    

      <li class="nav-item">
          <a class="nav-link" href="point_de_ventes.php">
          <i class="fas fa-2x fa-map-marker-alt text-danger"></i>
            <span>Points de ventes</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="slider.php">
            <i class="far fa-2x fa-images text-danger"></i>
              <span>Slider</span></a>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="evenement.php">
              <i class="fas fa-2x fa-camera-retro text-danger"></i>
                <span>Evenement</span></a>
            </li>

           
              <li class="nav-item">
                  <a class="nav-link" href="solder.php">
                    <i class="fas fa-fw fa-2x fa-percentage  text-danger"></i>
                    <span>Soldes</span></a>
                </li>


                
              <li class="nav-item">
                  <a class="nav-link" href="periode.php">
                    <i class="fas fa-fw fa-2x fa-calendar-alt text-danger"></i>
                    <span>periode</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="votes.php">
                    <i class="fas  fa-2x fa-star-half-alt text-danger"></i>
                      <span>Votes</span></a>
                  </li>

                  <li class="nav-item">
        <a class="nav-link" href="commandes_archive.php">
        <i class="fas fa-2x fa-shopping-cart text-danger"></i>
          <span>archive</span></a>
      </li>
</ul>
