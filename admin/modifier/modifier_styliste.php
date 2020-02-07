<?php 
 require_once('../../includes/config.php');

if(isset($_REQUEST['modifier'])){

    $id_styls = strip_tags(trim($_REQUEST['id_styls']));
    $nom_styls = strip_tags(trim($_REQUEST['nom_styls']));
    $prenom_styls = strip_tags(trim($_REQUEST['prenom_styls']));
    $tel_styls = strip_tags(trim($_REQUEST['tel_styls']));
    $descri_styls = strip_tags(trim($_REQUEST['descri_styls']));
    $email_styls = strip_tags(trim($_REQUEST['email_styls']));


    $sql = "UPDATE styliste SET  ";
    $sql .= "id_styls = '". $id_styls. "',";
    $sql .= "nom_styls = '". $nom_styls . "',";
    $sql .= "prenom_styls = '". $prenom_styls . "',";
    $sql .= "tel_styls = '". $tel_styls . "',";
    $sql .= "descri_styls = '". $descri_styls . "',";
    $sql .= "email_styls = '". $email_styls . "'";
    $sql .= " WHERE id_styls = '" . $id_styls . "'";

    
echo $sql;



//Execute the statement and insert our values.
$updated = $pdo->query($sql);
 

//verifier si on a des résultats (true or false)
if($updated){
    header('location: ../styliste.php');
}else{
   echo "erreur sql";
}

}


?>