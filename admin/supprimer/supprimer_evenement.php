<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idevent = $_GET['id_event'] ?? NULL ;

    if(!is_null($idevent)){
        $sql = "DELETE FROM evenement WHERE id_event= " . $idevent;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../evenement.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>