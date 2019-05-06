<?php 
 require_once('../../includes/config.php');
session_start();

 $erreurs = [];
$erreurs[] = 'it works';


 if(isset($_POST['inscrire'])){


var_dump($_POST);

    $sql = "INSERT INTO `client` ( `nom_client`, `prenom_client`,`email_client`,`tel_client`,`password_client`)
     VALUES (:nomclient, :prenomclient, :emailclient, :telclient,  :passwordclient)";
   

//Prepare our statement.
$statement = $pdo->prepare($sql);


   //validation mazal makhssossa aprés ndirha 
   $nomClient = strip_tags(trim($_POST['nom_client']));
    



   $prenomClient = $_POST['prenom_client'];
   $emailClient = $_POST['email_client'];
   $adresseClient = $_POST['tel_client'];

   $motpasseClient = password_hash($_POST['password_client'], PASSWORD_BCRYPT);
   $id_admin = 1;
   

   
   
   //Bind our values to our parameters 
   $statement->bindValue(':nomclient', $nomClient);
   $statement->bindValue(':prenomclient', $prenomClient);
   $statement->bindValue(':emailclient', $emailClient);
   $statement->bindValue(':telclient', $adresseClient);
   $statement->bindValue(':passwordclient', $motpasseClient);
   //$statement->bindValue(':idadmin', $id_admin);
   

  // function validation{

   //}

   
  

//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    echo ' Youpiiiiiii<br>';
    header('location: ../../evv/loginouss.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}

    
 }


?>