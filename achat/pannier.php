<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
 #espace{
     text-decoration: none;
 }
</style>
<?php 
require_once('../includes/config.php');
session_start();

if(!isset($_SESSION['id_client'])){
 header('location: ../evv/loginouss.php');
}


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
            <li class="nav-item">
              <a class="nav-link" href="commandes.php"><i class="fas fa-clipboard-list"></i>&nbsp;Commande</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="client.php"><i class="fas fa-user"></i>&nbsp;<?php echo  $_SESSION['nom_client'] ?? 'utilisateur'; ?></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-1x fa-sign-out-alt ml-1"></i></a>
                  </li>
          </ul>

        </div>
      </nav>


<div class="container mt-4">




<div class="card">





<table class="table table-hover shopping-cart-wrap mb-5">
<thead class="text-muted">
<tr>
  <th scope="col">Produit</th>
  <th scope="col" width="120">Quantité</th>
  <th scope="col" width="120">Prix</th>
  <th scope="col" width="200" class="text-right">Action</th>
</tr>
</thead>
<tbody>



<?php 
//var_dump($_SESSION['produits']);
$totaleQuantite = 0;
$totalePrix = 0;

if(isset($_SESSION['produits']) && !empty($_SESSION['produits'])){

    foreach ($_SESSION['produits'] as $id_article => $quantite) {
        # code...

        $sql = "SELECT * FROM article WHERE id_art = '". $id_article . "'";

        if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) {
   
?>
<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="../admin/ajouter/uploads/<?php echo $row['url_img_art'] ;?>" class=""  width="80px"></div>
	<figcaption class="ml-4 media-body">
		<h6 class="title text-truncate"><?php echo $row['nom_art'] ;?> </h6>
		<!-- <dl class="param param-inline small">
		  <dt>Size: </dt>
		  <dd>XXL</dd>
		</dl>
		<dl class="param param-inline small">
		  <dt>Color: </dt>
		  <dd>Orange color</dd>
		</dl> -->
	</figcaption>
</figure>
	</td>
	<td>
    <h6><?php echo $quantite;
      $totaleQuantite += $quantite;
    ?></h6>

	</td>
	<td>
		<div class="price-wrap">
       <h6><?php echo $row['prix_art']." DA" ;
      $totalePrix += $quantite * $row['prix_art'];

       ?></h6>
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right">
	
  <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_art'] ;?>">x Supprimer</button>
	</td>
</tr>
<div class="modal fade" id="m<?php echo $row['id_art'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_art'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supp_article.php?id_art=<?php echo $row['id_art'] ;?> " method="post">
                                <h4 class="mb-5">voulez-vous supprimer <?php echo $row['nom_art'];?> </h4>
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
<?php 
}//fin foreach prod
}//fin if query

}//fin foreach session
}//fin if session
?>
<tr>
  <td scope="col">
  <h3>  <b>Totale</b></h3>
  </td>
  <td scope="col" width="120">  <br> <b><?php if(isset($totaleQuantite)){echo $totaleQuantite;}else{echo '0';} ?> <small>piéces</small></b> </td>
  <td scope="col" width="120"> <br> <b><?php if(isset($totalePrix)){echo $totalePrix;}else{echo '0';} ?> <small>DA</small></b> </td>
  <td scope="col" width="200" class="text-right"></td>
</tr>



<tr>
  <td scope="col">
  <form action="validation.php" method="post">

<div class="form-group">
                    <div class="form-label-group">
                      <select name="point_de_vente" id="" class="form-control " required>
                      <option value="">point de vente</option>
                      <?php
        $sql = "SELECT * FROM point_de_vente";
        if($pdo->query($sql)){
          foreach  ($pdo->query($sql) as $row) {
        ?>
                      <option value="<?php echo $row['id_pv'] ;?>"><?php echo $row['id_pv']. '-'. $row['adresse_pv'] ;?></option>
                      <?php }
            }; ?>
                      </select>

                   
                    </div>
                  </div>

  </td>
  <td scope="col" width="120">
    </td>
  <td scope="col" width="120">
    </td>
  <td scope="col" width="200" class="text-right">
    <input type="text" name="totaleQuantite" value="<?php if(isset($totaleQuantite)){echo $totaleQuantite;}else{echo '';} ?>" id="" hidden>
    <input type="text" name="totalePrix" value="<?php if(isset($totalePrix)){echo $totalePrix;}else{echo '';} ?>" id="" hidden>

  <input type="submit" class="btn btn-danger btn-block" value="commander" name="commander">

  </td>
  </form>

</tr>
</tbody>
</table>



</div> <!-- card.// -->

</div>
<!--container end.//-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>