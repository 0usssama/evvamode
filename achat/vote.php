<?php 
require_once('../includes/config.php');

if(isset($_REQUEST['voter'])){

    $id_art = $_REQUEST['id_art'];
    $id_client = $_REQUEST['id_client'];
    $nbr_etoile = $_REQUEST['stars'];
    $id_admin = 1;
    $date_vote = date('Y-m-d');
    $sql = "INSERT INTO voter (id_art, id_client, nbr_etoile, id_admin, date_vote) VALUES (:id_art, :id_client, :nbr_etoile, :id_admin, :date_vote)";
    
//Prepare our statement.
$statement = $pdo->prepare($sql);

$statement->bindValue(':id_art', $id_art);
$statement->bindValue(':id_client', $id_client);
$statement->bindValue(':nbr_etoile', $nbr_etoile);
$statement->bindValue(':id_admin', $id_admin);
$statement->bindValue(':date_vote', $date_vote);
    

//Execute the statement and insert our values.
$inserted = $statement->execute();
 
//verifier si on a des résultats (true or false)
if($inserted){

    //echo 'ajouté';
    header('location: index.php');
}
}


?>