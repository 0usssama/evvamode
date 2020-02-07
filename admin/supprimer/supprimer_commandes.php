<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_commande'] ?? NULL ;

    if(!is_null($idadmin)){
        $sql = "DELETE FROM commande WHERE id_commande= " . $idadmin;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../commandes.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>