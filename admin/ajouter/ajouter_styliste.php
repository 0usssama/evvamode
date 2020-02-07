<?php 
 require_once('../../includes/config.php');

//var_dump($_POST);
    
var_dump($_POST);
if(isset($_POST['ajouter'])){

//upload

if(isset($_FILES["url_photo_styls"]["name"]))
{
    $target_dir = "uploads/";//win rah ray7a l'image
    $target_file = $target_dir . basename($_FILES["url_photo_styls"]["name"]);//répo ta3 file
    $uploadOk = 1;// initialisation somme = 0 , beli supposant jaz
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));// extention ta3 l'image
    
        if (move_uploaded_file($_FILES["url_photo_styls"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["url_photo_styls"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        };
    
}
//upload
if(isset($_FILES["url_logo_styls"]["name"]))
{
    $target_dir = "uploads/";//win rah ray7a l'image
    $target_file = $target_dir . basename($_FILES["url_logo_styls"]["name"]);//répo ta3 file
    $uploadOk = 1;// initialisation somme = 0 , beli supposant jaz
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));// extention ta3 l'image
    
        if (move_uploaded_file($_FILES["url_logo_styls"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["url_logo_styls"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        };
    
}

    $sql= "INSERT INTO styliste (
        `nom_styls`,
        `prenom_styls`,
        `tel_styls`,
        `url_photo_styls`,
        `url_logo_styls`,
        `descri_styls`,
        `email_styls`

       )
     VALUES (:nomstyls, :prenomstyls,:telstyls,:urlphoto, :urllogo,:decristyls,:emailstyls)";



//Prepare our statement.
$statement = $pdo->prepare($sql);


    $nomstyls = $_POST['nom_styls'];
    $prenomstyls = $_POST['prenom_styls'];
    $telstyls = $_POST['tel_styls'];
    $urlphoto = $_FILES["url_photo_styls"]["name"];
    $urllogo = $_FILES["url_logo_styls"]["name"];
    $decristyls = $_POST['descri_styls'];
    $emailstyls = $_POST['email_styls'];
   $id_admin = 1;

echo $urllogo.''.$urlphoto;


   $statement->bindValue(':nomstyls', $nomstyls);
   $statement->bindValue(':prenomstyls', $prenomstyls);
   $statement->bindValue(':telstyls', $telstyls);
   $statement->bindValue(':urlphoto', $urlphoto);
   $statement->bindValue(':urllogo', $urllogo);
   $statement->bindValue(':decristyls', $decristyls);
   $statement->bindValue(':emailstyls', $emailstyls);
  //  $statement->bindValue(':idadmin', $id_admin);



//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../styliste.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}
}

?>