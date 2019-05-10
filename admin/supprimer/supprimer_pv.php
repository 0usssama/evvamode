<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idpv = $_GET['id_pv'] ?? NULL ;

    if(!is_null($idpv)){
        $sql = "DELETE FROM point_de_vente WHERE id_pv= " . $idpv;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../point_de_ventes.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>