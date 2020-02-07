<!-- <?php 
 require_once('../../includes/config.php');

//var_dump($_POST);

var_dump($_POST);
if (isset($_POST['ajouter'])) {
    echo "it works";

    $sql= "INSERT INTO slider (
    `url_img_slider`,
    `id_admin`)
     VALUES (:urlsld,:idadmin)";



    //Prepare our statement.
    $statement = $pdo->prepare($sql);

  
    $target_dir = "uploads/";//win rah ray7a l'image
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//répo ta3 file
$uploadOk = 1;// initialisation somme = 0 , beli supposant jaz
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));// extention ta3 l'image

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);//yjib la taille ta3Ha true/false
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";//
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    /*
// Check if file already exists
if (file_exists($target_file)) {

     echo "Sorry, file already exists.";
     $uploadOk = 0;
}*/
    // Check file size
    // if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
    // }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        };
  


   
        $id_admin = 1;


   
 
        $statement->bindValue(':idadmin', $id_admin);
        $statement->bindValue(':urlsld', $_FILES["fileToUpload"]["name"]);
   


        //Execute the statement and insert our values.
        $inserted = $statement->execute();
 

        //verifier si on a des résultats (true or false)
        if ($inserted) {
            header('location: ../slider.php');
        } else {
            echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
        }
    }
}



?> 