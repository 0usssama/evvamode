<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_admin'] ?? NULL ;

    if(!is_null($idadmin)){
        $sql = "DELETE FROM admin WHERE id_admin= " . $idadmin;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../admin.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>