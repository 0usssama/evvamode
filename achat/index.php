
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
    <link rel="shortcut icon" href="nvlog.png">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
</head>

<body>
<style>
.rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #ffc107;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #ffc107;
}
</style>
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
            <h4 class="text-light"><i class="fas fa-shopping-bag mr-1"></i>Espace commande </h4>

                <form class="form-inline my-2 my-lg-0 ml-5">
                        <input class="form-control mr-sm-2" type="search" placeholder="caftan.." aria-label="Pro">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                      </form>
          <ul class="navbar-nav  ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="../evv/cgv.html"><i class="fa fa-file"></i>&nbsp;CGV</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pannier.php"><i class="fas fa-shopping-basket"></i>&nbsp; <span id="nbrArticle"><?php echo count($_SESSION['produits']); ?></span> articles </a>
            </li>
            <li class="nav-item">
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
                                                <div class="d-flex justify-content-end">
                                            
                                                        <button type="button" class="btn btn-warning mt-1 mr-1" data-toggle="modal" data-target="#exampleModal<?php echo $produit['id_art']; ?>">★</button>
                                                          </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal<?php echo $produit['id_art']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Voter le produit N° <?php echo $produit['id_art']; ?> </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                              <form class="rating" method="post" action="vote.php?id_art=<?php echo $produit['id_art']; ?>&id_client=<?php echo $_SESSION['id_client']; ?>">
                                                                  <label>
                                                                    <input type="radio" name="stars" value="1" required/>
                                                                    <span class="icon">★</span>
                                                                  </label>
                                                                  <label>
                                                                    <input type="radio" name="stars" value="2" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                  </label>
                                                                  <label>
                                                                    <input type="radio" name="stars" value="3" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>   
                                                                  </label>
                                                                  <label>
                                                                    <input type="radio" name="stars" value="4" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                  </label>
                                                                  <label>
                                                                    <input type="radio" name="stars" value="5" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                  </label>
                                                              </div>
                                                              <div class="modal-footer">
                                                               
                                                               <input type="submit" value="voter" name="voter" class="btn btn-warning">
                                                               
                                                               
                                                                
                                                              </div>

                                                              </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    <div class="card-body ">
                                                      <h4 class="card-title"><?php echo $produit['nom_art']; ?></h4>
                                                      <h6 ><?php echo $produit['prix_art']; ?> DA</h6>
                                                     
											
                                            
                                                    </div>
                                                    <div class=" mt-auto ml-auto pr-4 pb-3 d-flex align-content-center">
                                                     
                                                    <form id="myform<?php echo $produit['id_art']; ?>" method="post" ><!--changge-->
                                                        <input type="text" class="product-quantity h-100" name="quantity" value="1"  size="2" />
                                                      <button class="btn btn-danger ml-2 h-100" id="<?php echo $produit['id_art'] ;?>" data-formId="<?php echo $produit['id_art']; ?>">
                                                      commander
                                                      </button>
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

<script>
$(document).ready(function(){

  $('#nbrArticle').html('<?php 
      if(isset($_SESSION['produits'])){
        echo count( $_SESSION['produits']);
      };
    ?>')


    $('.product-quantity').on('keyup', function(){
     
      if($(this).val() != "") {
    var value = $(this).val().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
    var intRegex = /^\d+$/;
    if(!intRegex.test(value)) {
        //errors += "Field must be numeric.<br/>";
        $(this).val('1');
        $(this).addClass('border border-danger');
   console.log('not integer');

        //success = false;
    }
} else {
   // errors += "Field is blank.</br />"; 
   $(this).removeClass('border border-danger');
   //$(this).val('1');

   console.log('empty input');
   
    //success = false;
}
      
    })

$('button').click(function(e){
  e.preventDefault();
let id = $(this).attr('id');
let form_id = $(this).data('formid');

//console.log(form_id);



$.ajax({
      url:'traitement.php?action=ajouter&id_art='+ id,
      method:'post',
      data : $('#myform'+ form_id).serialize(),
      success:function(data)
     {
      var obj = JSON.parse(data);
      let size = Object.keys(obj).length
       $('#nbrArticle').html('' + size);
       
      
     } 
})



})
});
</script>
</body>
</html>
