<?php 
 require_once('../../includes/config.php');

if(isset($_REQUEST['modifier'])){

    $id_art = strip_tags(trim($_REQUEST['id_art']));
    $nom_art = strip_tags(trim($_REQUEST['nom_art']));
    $prix_art = strip_tags(trim($_REQUEST['prix_art']));
    $descri_art = strip_tags(trim($_REQUEST['descri_art']));
    $id_styl = strip_tags(trim($_REQUEST['id_styl']));



   $id_catego_position= strpos($_REQUEST['id_catg'], '-');
   $id_catg = substr($_POST['id_catg'], 0, $id_catego_position);



   $id_styliste_position= strpos($_REQUEST['id_styls'], '-');
   $id_styls = substr($_REQUEST['id_styls'], 0, $id_styliste_position);

    $sql = "UPDATE article SET ";
    $sql .= "id_art = '". $id_art . "',";
    $sql .= "nom_art = '". $nom_art . "',";
    $sql .= "prix_art = '". $prix_art . "',";
    $sql .= "descri_art = '". $descri_art . "',";
    $sql .= "id_styl = '". $id_styl . "',";
    $sql .= "id_catg = '". $id_catg . "',";
    $sql .= "id_styls = '". $id_styls . "'";
    $sql .= " WHERE id_art = '" . $id_art . "'";

    
echo $sql;



//Execute the statement and insert our values.
$updated = $pdo->query($sql);
 

//verifier si on a des résultats (true or false)
if($updated){
    header('location: ../article.php');
}else{
   echo "erreur sql";
}

}


?>