<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idstyls = $_GET['id_styls'] ?? NULL ;

    if(!is_null($idstyls)){
        $sql = "DELETE FROM styliste WHERE id_styls= " . $idstyls;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../styliste.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>