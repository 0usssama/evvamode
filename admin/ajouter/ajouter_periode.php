<?php 
 require_once('../../includes/config.php');

var_dump($_POST);


if(isset($_POST['ajouter'])){

$existepas = true;
    //var_dump($_FILES);

  
    $datedb = $_POST['date_db'];
    $datefn = $_POST['date_fn'];
    $id_admin = 1;

    /**************************** */
    $sql_trouve = "SELECT * FROM periode WHERE date_db LIKE :date_db";
    //Prepare our statement.
    $statement = $pdo->prepare($sql_trouve);
    $statement->bindValue(':date_db', $datedb);
    $trouve_resultat = $statement->execute();
    $resultats = $statement->fetch();

    if(!empty($resultats)){
        $existepas = false;
        session_start();
        $_SESSION['erreur'][]= 'date début existe déja, veuillez choisir une autre';
        header('location: ../periode.php');
    }


    /**************************** */
    


    $sql= "INSERT INTO periode ( 
        
        `date_db`,
        `date_fn`)
     VALUES (
        
         :datedb,
         :datefn)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

   
    //  var_dump($idstyl);
   $statement->bindValue(':datedb', $datedb);
   $statement->bindValue(':datefn', $datefn);

   
if($existepas){

//Execute the statement and insert our values.
$inserted = $statement->execute();
 
}

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../periode.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>