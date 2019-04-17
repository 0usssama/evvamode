<?php 
 require_once('../../includes/config.php');

//var_dump($_POST);
    
var_dump($_POST);
if(isset($_POST['ajouter'])){


    $sql= "INSERT INTO evenement(
    `titre_event`,
    `date_event`,
    `heure_event`,
    `adresse_event`,
    `descri_event`,
    `url_img_event`,
   
    `id_styls`)
     VALUES (:titreevent,
      :dateevent, 
      :heureevent,
      :adresseevent,
      :descrievent, 
      :urlimg,
      
      :idstyls)";



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
/*
// Check if file already exists
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
  


    $titreevent = $_POST['titre_event'];
    $dateevent = $_POST['date_event'];
    $heureevent = $_POST['heure_event'];
    $adresseevent = $_POST['adresse_event'];
    $descrievent = $_POST['descri_event'];
   $id_admin = 1;
   $id_styliste_position= strpos($_POST['id_styls'], '-');
   $id_styls = substr($_POST['id_styls'], 0, $id_styliste_position);

   $statement->bindValue(':titreevent', $titreevent);
   $statement->bindValue(':dateevent', $dateevent);
   $statement->bindValue(':heureevent', $heureevent);
   $statement->bindValue(':adresseevent', $adresseevent);
   $statement->bindValue(':descrievent', $descrievent);
  // $statement->bindValue(':idadmin', $id_admin);
   $statement->bindValue(':idstyls', $id_styls);
   $statement->bindValue(':urlimg', $_FILES["fileToUpload"]["name"]);


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../evenement.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}
}

?>