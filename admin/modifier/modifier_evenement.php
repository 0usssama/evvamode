<?php 
 require_once('../../includes/config.php');
echo 'yaaaaaaaaaaaaaaw 3likom';
if(isset($_REQUEST['modifier'])){

    $id_event = strip_tags(trim($_REQUEST['id_event']));
    $titre_event = strip_tags(trim($_REQUEST['titre_event']));
    $date_event = strip_tags(trim($_REQUEST['date_event']));
    $heure_event = strip_tags(trim($_REQUEST['heure_event']));
    $adresse_event = strip_tags(trim($_REQUEST['adresse_event']));
    $descri_event = strip_tags(trim($_REQUEST['descri_event']));


    $id_styliste_position= strpos($_REQUEST['id_styls'], '-');
   $id_styls = substr($_REQUEST['id_styls'], 0, $id_styliste_position);


    $sql = "UPDATE evenement SET  ";
    $sql .= "id_event = '". $id_event. "',";
    $sql .= "titre_event = '". $titre_event . "',";
    $sql .= "date_event = '". $date_event . "',";
    $sql .= "heure_event = '". $heure_event . "',";
    $sql .= "adresse_event = '". $adresse_event . "',";
    $sql .= "descri_event = '". $descri_event . "'";
    $sql .= " WHERE id_event = '" . $id_event . "'";

    
echo $sql;



//Execute the statement and insert our values.
$updated = $pdo->query($sql);
 

//verifier si on a des résultats (true or false)
if($updated){
    header('location: ../evenement.php');
}else{
   echo "erreur sql";
}

}


?>