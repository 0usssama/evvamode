<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_client'] ?? NULL ;

    if(!is_null($idadmin)){
        $sql = "DELETE FROM client WHERE id_client= " . $idadmin;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../client.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>