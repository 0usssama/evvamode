<?php 
 require_once('../../includes/config.php');
session_start();

 $erreurs = [];
//$erreurs[] = 'it works';
$ajouter = true;

 if(isset($_POST['inscrire'])){


var_dump($_POST);

    $sql = "INSERT INTO `client` ( `nom_client`, `prenom_client`,`email_client`,`tel_client`,`password_client`)
     VALUES (:nomclient, :prenomclient, :emailclient, :telclient,  :passwordclient)";
   

//Prepare our statement.
$statement = $pdo->prepare($sql);


   //validation mazal makhssossa aprés ndirha 
   $nomClient = strip_tags(trim($_POST['nom_client']));
    if(preg_match('/[0-9]/', $nomClient)){
        $ajouter = false;
        $erreurs[] = "le nom ne doit pas contenir des numéros!";
    }
 
    

   $prenomClient = strip_tags(trim($_POST['prenom_client']));

   if(preg_match('/[0-9]/', $prenomClient)){
    $ajouter = false;
    $erreurs[] = "le prenom ne doit pas contenir des numéros!";

}


   $emailClient = strip_tags(trim($_POST['email_client']));
   $sql = "SELECT * FROM client WHERE email_client='". $emailClient . "'";
    if($pdo->query($sql)){
        $result = $pdo->query($sql);
        $array_result = $result->fetch();

       if(!empty($array_result)){
    $ajouter = false;
    $erreurs[] = "email existe deja!";

       }
    }




   $tel_client = strip_tags(trim($_POST['tel_client']));
   if(!preg_match('/[0-9]/', $tel_client)){
    $ajouter = false;
    $erreurs[]=  $tel_client;
    $erreurs[] = "veuillez taper un numéro valide!"; 

   }

   $motpasseClient = password_hash($_POST['password_client'], PASSWORD_BCRYPT);
   $id_admin = 1;
   

   
   
   //Bind our values to our parameters 
   $statement->bindValue(':nomclient', $nomClient);
   $statement->bindValue(':prenomclient', $prenomClient);
   $statement->bindValue(':emailclient', $emailClient);
   $statement->bindValue(':telclient', $tel_client);
   $statement->bindValue(':passwordclient', $motpasseClient);
   //$statement->bindValue(':idadmin', $id_admin);
   

  // function validation{

   //}

   if($ajouter){//tester ida Ok wela non

//Execute the statement and insert our values.
$inserted = $statement->execute();
   }else{
       $_SESSION['erreurs']= $erreurs;
   header('location: ../../evv/register.php');
       
   }
  

 

//verifier si on a des résultats (true or false)
if($inserted){
    echo ' Youpiiiiiii<br>';
    header('location: ../../evv/loginouss.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}

    
 }


?>