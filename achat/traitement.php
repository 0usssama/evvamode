<?php 
 session_start();
if(isset($_GET['action'])&& isset($_GET['id_art']) && $_GET['action'] == 'ajouter'){
   

  if(!isset($_SESSION['produits'])){
    
    $id_art = $_GET['id_art'];
    $quantite_art = $_POST['quantity'];
    $produit= [$id_art=>$quantite_art];
    $_SESSION['produits'] = $produit;
    
  echo json_encode($_SESSION['produits']);

  }else{
    $id_art = $_GET['id_art'];
    $quantite_art = $_POST['quantity'];
    $_SESSION['produits'][$id_art] = $quantite_art;

    $produitCommandes = $_SESSION['produits'];
    echo json_encode($_SESSION['produits']);


    
    
   

    
  }
 
}

?>