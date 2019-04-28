<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['pourcentage_solde'] ?? NULL ;

    if(!is_null($pourcentage)){
        $sql = "DELETE FROM solder WHERE pourcentage_solde= " . $pourcentage;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../solder.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>