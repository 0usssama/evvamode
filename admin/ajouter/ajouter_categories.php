<?php 
 require_once('../../includes/config.php');

//var_dump($_POST);

var_dump($_POST);
if(isset($_POST['ajouter'])){


    $sql= "INSERT INTO categories (`id_catg`,`desi_catg`)
     VALUES (NULL, :desicatg)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

  
$id_admin = 1;
$desicatg = ($_POST['desi_catg']);
   


   $statement->bindValue(':desicatg', $desicatg);
   //$statement->bindValue(':idadmin', $id_admin);
   


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../categories.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>