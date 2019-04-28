<?php 
require_once('../includes/config.php');
session_start();
if(isset($_POST['supprimer'])){

    // need to sanitize
    $id_art = $_GET['id_art'] ?? NULL ;
    unset( $_SESSION['produits'][$id_art]);

    //var_dump($_SESSION);
    header('location: pannier.php');


}
?>