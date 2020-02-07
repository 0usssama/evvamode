<?php 
 include '../includes/config.php';

session_start();
//var_dump($_SESSION);

if(isset($_POST['commander'])){
   
   // var_dump($_POST);

   $today = date('Y-m-d');
   $id_client = $_SESSION['id_client'];
   $id_admin = 1;
   $id_pv = $_POST['point_de_vente'] ?? NULL;
   $etat_commande = 'en cours';

  $sql = "INSERT INTO commande (date_commande, etat_commande, id_client, id_admin, id_pv)
        VALUES 
        (
            :date_commande, 
            :etat_commande,
            :id_client,
            :id_admin,
            :id_pv
        );
  
    ";

//Prepare our statement.
$statement = $pdo->prepare($sql);

$statement->bindValue(':date_commande', $today);
$statement->bindValue(':etat_commande', $etat_commande);
$statement->bindValue(':id_client', $id_client);
$statement->bindValue(':id_admin', $id_admin);
$statement->bindValue(':id_pv', $id_pv);

//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    $id_commande = $pdo->lastInsertId();

    //var_dump($_SESSION);
    
    foreach ($_SESSION['produits'] as $id_art => $quantite) {
        # code...
        $sql_prix = "SELECT prix_art FROM article WHERE id_art = '" . $id_art . "'";
        $resultat = $pdo->query($sql_prix);
        $prix = $resultat->fetch();
        $prix_prod = $prix['prix_art'];

        $sql_jout_art_commande= "INSERT INTO article_commande (
            prix_article_commande, 
            quantite_article_commande, 
            id_art, 
            id_commande) 
        VALUES
        (
            $prix_prod, 
            $quantite, 
            $id_art,
            $id_commande
        ); ";
        //echo $sql_jout_art_commande . "<br>";
        $inserted2 = $pdo->query($sql_jout_art_commande);

//verifier si on a des résultats (true or false)
if($inserted2){
    unset($_SESSION['produits']);
    $_SESSION['produits']= [];

    //var_dump($_SESSION['produits']);
    header('location: index.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


    }


    //header('location: commandes.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}
}

?>