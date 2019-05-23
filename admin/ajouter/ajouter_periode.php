<?php 
 require_once('../../includes/config.php');

var_dump($_POST);


if(isset($_POST['ajouter'])){


    //var_dump($_FILES);


    $sql= "INSERT INTO periode ( 
        `id_pr`, 
        `date_db`,
        `date_fn`)
     VALUES (
         :iddate,
         :datedb,
         :datefn)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

   $iddate = $_POST['id_pr'];
   $datedb = $_POST['date_db'];
   $datefn = $_POST['date_fn'];
   $id_admin = 1;

   
    //  var_dump($idstyl);
   $statement->bindValue(':iddate', $iddate);
   $statement->bindValue(':datedb', $datedb);
   $statement->bindValue(':datefn', $datefn);


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../periode.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>