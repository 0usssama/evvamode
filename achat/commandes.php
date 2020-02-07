
<?php include '../../evvamode/includes/config.php'; ?>

<?php 
 session_start();

 if(!isset($_SESSION['id_client'])){
  header('location: ../evv/loginouss.php');
 }


?>
<!DOCTYPE html>
<html>
<head>
  <title>sabrina</title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
</head>
<style>
 #espace{
     text-decoration: none;
 }
 </style>

<body>

<!--     
    <header id="header" class="header-layout-03 fill-bg-dark" style=" background: #cd111a;">
        <div class="container">
          <div class="row">					
          
            <div class="col-sm- col-md-12 col-lg-12 col-xl-12 text-right">				
            
            </div>
          </div>
        </div>
  
  </header> -->
<?php


?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-light " style=" background: #cd111a !important;">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
           <a href="index.php" id="espace"> <h4 class="text-light"><i class="fas fa-shopping-bag mr-1"></i>Espace commande </h4></a>

          <ul class="navbar-nav  ml-auto">
            
          <li class="nav-item active">
              <a class="nav-link" href="../evv/cgv.html"><i class="fa fa-file"></i>&nbsp;CGV</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="pannier.php"><i class="fas fa-shopping-basket"></i>&nbsp; <span id="nbrArticle">
                  <?php
                  if(isset($_SESSION['produits'])){
                        echo count($_SESSION['produits']);
                  }else{
                      echo '0';
                  }
                  ?></span> articles </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="commandes.php"><i class="fas fa-clipboard-list"></i>&nbsp;Commande</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-user"></i>&nbsp;<?php echo  $_SESSION['nom_client'] ?? 'utilisateur'; ?></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-1x fa-sign-out-alt ml-1"></i></a>
                  </li>
          </ul>
         
        </div>
      </nav>

<div class="container">


<table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Articles commandés</th>
                    <th>etat</th>
                 
                 
                 
                 
                </tr>
            </thead>
            <?php 
            $sql = "SELECT * FROM commande WHERE id_client='" . $_SESSION['id_client']. "'" ;
            
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $commande) { ?>
               <tr>
               

                <td><?php echo $commande['id_commande'] ;?></td>
                <td><?php echo $commande['date_commande'] ;?></td>
                <td>
                        <ul>
                           <?php 
                           $sql_produit = " SELECT DISTINCT
                           article.nom_art, article_commande.quantite_article_commande
                           FROM article_commande
                           JOIN commande
                           ON article_commande.id_commande 
                           JOIN article
                           ON article_commande.id_art = article.id_art
                           WHERE article_commande.id_commande = " . $commande['id_commande'] ; 

                        if($pdo->query($sql_produit)){
                            foreach  ($pdo->query($sql_produit) as $produit) {
                           ?>
                            <li><?php echo $produit['nom_art']; ?> <b>(<?php echo $produit['quantite_article_commande']; ?>)</b></li>


                            <?php 
            }
            }; ?>
                        </ul>

                </td>
                <td><?php echo $commande['etat_commande'] ;?></td>


            
            </tr>
       
         
            <?php 
            }
            }; ?>
                       
                   
                   
                   
            </table>
   



<!-- /.container -->
</div>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="../admin/vendor/jquery/jquery.js"></script>
   <script type="text/javascript" src="bootstrap/js/popper.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<script>
$(document).ready(function(){

 
});
</script>
</body>
</html>
