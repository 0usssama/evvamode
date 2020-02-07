<?php 
 require_once('../../includes/config.php');

var_dump($_POST);


if(isset($_POST['ajouter'])){


    //var_dump($_FILES);


    $sql= "INSERT INTO solder ( 
        `pourcentage_solde`, 
        `id_art`,
        `id_pr`,
        `ancien_prix`)
     VALUES (
         :pourcentage,
         :idart,
         :iddate,
         :ancien_prix)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

$pourcentage =  $_POST['pourcentage_solde'];
   
 
   
   $idart= strpos($_POST['id_art'], '/');
   $idart = substr($_POST['id_art'], 0, $idart);

   $iddate= strpos($_POST['id_pr'], '/');
   $iddate = substr($_POST['id_pr'], 0, $iddate);


   /*
   $datesolde= strpos($_POST['id_pr'], '-');
      $idcatg = substr($_POST['id_pr'], 0, $datesolde);
*/
  
   $id_admin = 1;

   $sql_prix = "SELECT prix_art FROM article WHERE id_art='". $idart . "'";
   $resultat = $pdo->query($sql_prix);
   $prix_array = $resultat->fetch();
   $ancien_prix = $prix_array['prix_art'];
   
    //  var_dump($idstyl);
   $statement->bindValue(':pourcentage', $pourcentage);
   $statement->bindValue(':idart', $idart);
   $statement->bindValue(':iddate', $iddate);
   $statement->bindValue(':ancien_prix', $ancien_prix);


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){

    
    $sql_update_prix = "UPDATE article SET prix_art = '". ($ancien_prix - $ancien_prix * ($pourcentage / 100)). "'". " WHERE id_art='". $idart."'";

   // echo $sql_update_prix;
    $updated=  $pdo->query($sql_update_prix);
    
    if($updated){

    header('location: ../solder.php');

    }else{
        echo 'ichkal fe updated';
    }

}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}



}



?>