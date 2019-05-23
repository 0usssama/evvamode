<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $iddate = $_GET['id_pr'] ?? NULL ;

    if(!is_null($iddate)){
        $sql = "DELETE FROM periode WHERE id_pr= " . $iddate;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../periode.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>