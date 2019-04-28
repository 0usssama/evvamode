<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['desig_date'] ?? NULL ;

    if(!is_null($desigdate)){
        $sql = "DELETE FROM dates WHERE desig_date= " . $desigdate;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../date.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>