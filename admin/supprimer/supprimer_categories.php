<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $idcatg = $_GET['id_catg'] ?? NULL ;

    if(!is_null($idcatg)){
        $sql = "DELETE FROM categories WHERE id_catg= " . $idcatg;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../categories.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>