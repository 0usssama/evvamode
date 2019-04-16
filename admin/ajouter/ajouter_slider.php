<?php 
 require_once('../../includes/config.php');

//var_dump($_POST);

var_dump($_POST);
if(isset($_POST['ajouter'])){


    $sql= "INSERT INTO slider (`type_slider`,`url_img_slider`,`titre_slider`,`id_admin`)
     VALUES (:typesld, :urlsld,:titresld,:idadmin)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

  


    $typesld = ($_POST['type_slider']);
    $urlsld = $_POST['url_img_slider'];
    $titresld = $_POST['titre_slider'];
   $id_admin = 1;


   $statement->bindValue(':typesld', $typesld);
   $statement->bindValue(':urlsld', $urlsld);
   $statement->bindValue(':$titresld', $titresld);
   $statement->bindValue(':idadmin', $id_admin);
   


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../slider.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>