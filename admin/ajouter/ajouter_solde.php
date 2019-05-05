<?php 
 require_once('../../includes/config.php');

var_dump($_POST);


if(isset($_POST['ajouter'])){


    //var_dump($_FILES);


    $sql= "INSERT INTO solder ( 
        `pourcentage_solde`, 
        `id_art`,
        `id_date`)
     VALUES (
         :pourcentage,
         :idart,
         :iddate)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

$pourcentage =  $_POST['pourcentage_solde'];
   
 
   
   $idart= strpos($_POST['id_art'], '/');
   $idart = substr($_POST['id_art'], 0, $idart);

   $iddate= strpos($_POST['id_date'], '/');
   $iddate = substr($_POST['id_date'], 0, $iddate);


   /*
   $datesolde= strpos($_POST['id_date'], '-');
      $idcatg = substr($_POST['id_date'], 0, $datesolde);
*/
  
   $id_admin = 1;

   
    //  var_dump($idstyl);
   $statement->bindValue(':pourcentage', $pourcentage);
   $statement->bindValue(':idart', $idart);
   $statement->bindValue(':iddate', $iddate);


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../solder.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}



}



?>