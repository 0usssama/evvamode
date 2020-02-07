<?php 
include '../includes/config.php';
session_start();
if(isset($_POST['connecter'])){

    $erreurs = [];
    $username = strip_tags(trim($_POST['inputusername']));
    $password = strip_tags(trim($_POST['inputPassword']));

    
    
    $sql = 'SELECT * FROM admin WHERE username_adm LIKE :username LIMIT 1';
    $statement = $pdo->prepare($sql);
    

    $statement->bindValue(':username', $username);
   $statement->execute();
   $trouv =  $statement->fetch();

   var_dump($trouv);

  
    if($trouv){
       // echo 'trouvé';
       
       $password_bdd = $trouv['password_adm'];
    
       if (password_verify($password, $password_bdd)) {
        // Succèss!
        $_SESSION['nom_adm']=$trouv['nom_adm'];
        $_SESSION['prenom_adm']=$trouv['prenom_adm'];
        $_SESSION['id_admin']=$trouv['id_admin'];
       header('location:../admin/admin.php');
       

        
    }else {
        // Invalide mot de passe
        $erreurs[] = 'mot de passe invalide';
        

        $_SESSION['erreurs'] = $erreurs;
        header('location: log.php');
    }
       
    }else{
          ///pas trouvé
        $erreurs[] = 'votre Nom de utilisateur n\'existe pas';
        $_SESSION['erreurs'] = $erreurs;
        header('location: log.php');

    }


    

    
}

?>