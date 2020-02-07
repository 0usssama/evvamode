<?php 
 require_once('../../includes/config.php');


 if(isset($_POST['ajouter'])){


$sql = "INSERT INTO point_de_vente (
        `nom_res_pv`,
        `prenom_res_pv`,
        `email_res_pv`,
        `adresse_pv`,
        `tel_pv`,
        `id_admin`)
        VALUES (
        :nom_res_pv,
        :prenom_res_pv,
        :email_res_pv,
        :adresse_pv,
        :tel_pv,
        :id_admin
        )";


//Prepare our statement.
$statement = $pdo->prepare($sql);

$nom_res_pv =  $_POST['nom_res_pv'];
$prenom_res_pv =  $_POST['prenom_res_pv'];
$email_res_pv =  $_POST['email_res_pv'];
$adresse_pv =  $_POST['adresse_pv'];
$tel_pv =  $_POST['tel_pv'];
$id_admin =  1;



    //  var_dump($idstyl);
    $statement->bindValue(':nom_res_pv', $nom_res_pv);
    $statement->bindValue(':prenom_res_pv', $prenom_res_pv);
    $statement->bindValue(':email_res_pv', $email_res_pv);
    $statement->bindValue(':adresse_pv', $adresse_pv);
    $statement->bindValue(':tel_pv', $tel_pv);
    $statement->bindValue(':id_admin', $id_admin);


    //Execute the statement and insert our values.
    $inserted = $statement->execute();
     
    
    //verifier si on a des résultats (true or false)
    if($inserted){
        header('location: ../point_de_ventes.php');
    }else{
        echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
    }
    



 }



?>