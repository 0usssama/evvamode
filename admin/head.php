

<?php require_once('../includes/config.php') ;?>






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

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
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
      <img src="log.png" width="40" height="55">     Espace admin</a>

   

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
      <i class="fas fa-fw fa-2x fa-user-lock"></i>
      <span>Admins</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="client.php">
      <i class="fas fa-fw fa-2x fa-users"></i>
      <span>Clients</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="article.php">
    <i class="far fa-2x fa-id-card"></i>    
      <span>Article</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="categories.php">
    <i class="fas fa-2x fa-align-justify"></i>
      <span>categories</span></a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="styliste.php">
      <i class="fas fa-2x  fa-address-book"></i>
        <span>Stylistes</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="commandes.php">
        <i class="fas fa-2x fa-shopping-cart"></i>
          <span>Commandes</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="point_de_ventes.php">
          <i class="fas fa-2x fa-map-marker-alt"></i>
            <span>Points de ventes</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="slider.php">
            <i class="far fa-2x fa-images"></i>
              <span>Slider</span></a>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="evenement.php">
              <i class="fas fa-2x fa-camera-retro"></i>
                <span>Evenement</span></a>
            </li>

           
              <li class="nav-item">
                  <a class="nav-link" href="solder.php">
                    <i class="fas fa-fw fa-2x fa-percentage"></i>
                    <span>Soldes</span></a>
                </li>


                
              <li class="nav-item">
                  <a class="nav-link" href="date.php">
                    <i class="fas fa-fw fa-2x fa-calendar-alt"></i>
                    <span>date</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="votes.php">
                    <i class="fas  fa-2x fa-star-half-alt"></i>
                      <span>Votes</span></a>
                  </li>

                
</ul>
