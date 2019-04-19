<?php 
 require_once('../../includes/config.php');

var_dump($_POST);


if(isset($_POST['ajouter'])){


    //var_dump($_FILES);


    $sql= "INSERT INTO article ( 
        `nom_art`, 
        `prix_art`,
        `url_img_art`,
    `descri_art`,
    `id_catg`,
   
    `id_styls`,
    `id_styl`)
     VALUES (
         :nom_art,
         :prix_art,
     :url_img_art,
     :descri_art,
     :id_catg,
     
     :id_styls,
    
     :id_styl)";



//Prepare our statement.
$statement = $pdo->prepare($sql);



$target_dir = "uploads/";//win rah ray7a l'image
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//répo ta3 file
$uploadOk = 1;// initialisation somme = 0 , beli supposant jaz
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));// extention ta3 l'image

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);//yjib la taille ta3Ha true/false
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";// 
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*
if (file_exists($target_file)) {

    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    };
  


    $nomart =  $_POST['nom_art'];
   $prixart = $_POST['prix_art'];
   $descriart = $_POST['descri_art'];
   
   $id_admin = 1;
   
   $id_styliste_position= strpos($_POST['id_styls'], '-');
   $id_styls = substr($_POST['id_styls'], 0, $id_styliste_position);


   $id_catego_position= strpos($_POST['id_catg'], '-');
      $idcatg = substr($_POST['id_catg'], 0, $id_catego_position);
  
     
      $idstyl = $_POST['id_styl'];

    //  var_dump($idstyl);
   $statement->bindValue(':nom_art', $nomart);
   $statement->bindValue(':prix_art', $prixart);
  // $statement->bindValue(':id_admin', $id_admin);
   $statement->bindValue(':id_styls', $id_styls);
   $statement->bindValue(':id_catg', $idcatg);
   $statement->bindValue(':id_styl', $idstyl);
   $statement->bindValue(':descri_art', $descriart);
   
   $statement->bindValue(':url_img_art', $_FILES["fileToUpload"]["name"]);
   


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../article.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>