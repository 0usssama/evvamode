<?php 
 require_once('../../includes/config.php');

//var_dump($_POST);


if(isset($_POST['ajouter'])){


    $sql= "INSERT INTO admin (`username_adm`, `password_adm`,`nom_adm`,`prenom_adm`,`email_adm`,`tel_adm`)
     VALUES (:username, :motdepass, :nomadm, :prenomadm, :emailadm, :teladm)";

  

//Prepare our statement.
    $statement = $pdo->prepare($sql);

  


    $username	   = strip_tags($_POST['username_adm']);
    $motpasseadmin = password_hash($_POST['password_adm'], PASSWORD_BCRYPT);
    $nomadm	   = strip_tags($_POST['nom_adm']);
    $prenomadm	   = strip_tags($_POST['prenom_adm']);
    $emailadm	   = strip_tags($_POST['email_adm']);
    $teladm	   = strip_tags($_POST['tel_adm']);
   

    //Bind our values to our parameters 
    $statement->bindValue(':username', $username);
    $statement->bindValue(':motdepass', $motpasseadmin);
    $statement->bindValue(':nomadm', $nomadm);
    $statement->bindValue(':prenomadm', $prenomadm);
    $statement->bindValue(':emailadm', $emailadm);
    $statement->bindValue(':teladm', $teladm);
    
    


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../admin.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>
