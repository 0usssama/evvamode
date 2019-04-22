<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idsld = $_GET['id_slider'] ?? NULL ;

    if(!is_null($idsld)){
        $sql = "DELETE FROM slider WHERE id_slider= " . $idsld;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../slider.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>