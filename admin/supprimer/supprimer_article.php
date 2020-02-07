<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_art'] ?? NULL ;

    if(!is_null($idadmin)){
        $sql = "DELETE FROM article WHERE id_art= " . $idadmin;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../article.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>