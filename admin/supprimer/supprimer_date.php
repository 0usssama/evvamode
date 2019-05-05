<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $iddate = $_GET['id_date'] ?? NULL ;

    if(!is_null($iddate)){
        $sql = "DELETE FROM dates WHERE id_date= " . $iddate;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../date.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>