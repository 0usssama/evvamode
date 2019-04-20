
<?php include '../../evvamode/includes/config.php'; ?>
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-light " style=" background: #cd111a !important;">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <h4 class="text-light"><i class="fas fa-shopping-bag mr-1"></i>Espace achats</h4>

                <form class="form-inline my-2 my-lg-0 ml-5">
                        <input class="form-control mr-sm-2" type="search" placeholder="caftan.." aria-label="Pro">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                      </form>
          <ul class="navbar-nav  ml-auto">
            
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-shopping-basket"></i>&nbsp; 0 articles </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i>&nbsp;Commande</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-user"></i>&nbsp;Benounnas</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-1x fa-sign-out-alt ml-1"></i></a>
                  </li>
          </ul>
         
        </div>
      </nav>


  <ul class="nav nav-pills d-flex justify-content-center mt-2" id="pills-tab" role="tablist" >
  <?php 
            $sql ="SELECT * FROM categories;";
  $show = 0;

            if($pdo->query($sql)){
              foreach  ($pdo->query($sql) as $categorie) {
                $show++;

            ?>
  <li class="nav-item">
    <a class="nav-link <?php if($show == 1){echo 'active';}; ?>"
     id="showall-tab" data-toggle="pill" href="#cat<?php echo $categorie['id_catg']; ?>" 
     role="tab" aria-controls="showall" aria-selected="true"><?php echo $categorie['desi_catg']; ?></a>
  </li>

<?php
              };
            };
 ?>
  
</ul>
 
<div class="container">





<!-- Page Content -->
<div class="container">
<div class="tab-content" id="pills-tabContent">
  
<?php 
  $sql = "SELECT id_catg FROM article;";
  $show = 0;
  if($pdo->query($sql)){
    foreach  ($pdo->query($sql) as $categorie) {
      $show++;
?>
<div class="tab-pane <?php if($show == 1){echo 'active show';}; ?>  fade  " id="cat<?php echo $categorie['id_catg']; ?>" role="tabpanel" aria-labelledby="showall-tab"><!-- //debut showall -->
       <div class="row text-center text-lg-left mt-3">
         
       <?php 
       $sql = "SELECT * FROM article WHERE id_catg = " . "'".  $categorie['id_catg'] . "'";
       if($pdo->query($sql)){
        foreach  ($pdo->query($sql) as $produit) {
       ?>
       <div class="col-4">
                                        <div class="card mb-3" style="max-width: 540px;">
                                                <div class="row no-gutters">
                                                  <div class="col-md-4">
                                                    <img src="../admin/ajouter/uploads/<?php echo $produit['url_img_art']; ?>" class="card-img h-100" alt="...">
                                                  </div>
                                                  <div class="col-md-8 d-flex flex-column">
                                                    <div class="card-body ">
                                                      <h4 class="card-title"><?php echo $produit['nom_art']; ?></h4>
                                                      <h6 ><?php echo $produit['prix_art']; ?> DA</h6>
                                                     
											
                                            
                                                    </div>
                                                    <div class=" mt-auto ml-auto pr-4 pb-3 d-flex align-content-center">
                                                        <form action="index.php?id_art=<?php echo $produit['id_art'] ;?> " method="post">
                                                        <input type="text" class="product-quantity h-100" name="quantity" value="0" size="2" />
                                                          <input type="submit" name="commander" value="commander" class="btn btn-danger ml-2 h-100">              
                                                       
                                                        </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                </div>

                                <?php
              };
            };
 ?>

      </div>
<!--/.tab-pane  show active-->
</div><!-- ////////////////////////////////////////////////////////end showall -->

<?php
              };
            };
 ?>

<!-- /.container -->



  <!-- /.tab-content -->
</div>
<!-- /.container -->
</div>
<!-- /.container -->
</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="../admin/vendor/jquery/jquery.js"></script>
   <script type="text/javascript" src="bootstrap/js/popper.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
