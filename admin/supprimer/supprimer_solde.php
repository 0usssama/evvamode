<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $pourcentage = $_POST['pourcentage_solde'] ?? NULL ;
    $id_art = $_POST['id_art'] ?? NULL ;

    $sql_recup = "SELECT ancien_prix FROM solder WHERE id_art='". $id_art . "'";
    if($pdo->query($sql_recup)){
        $result = $pdo->query($sql_recup);//executer query
        $prix_ancien_resultat = $result->fetch();//jib resultat
        $prix_ancien = $prix_ancien_resultat['ancien_prix'];//takhdmi be resultat

        
        
    }
    


    if(!is_null($pourcentage) && !is_null($id_art)){
        $sql = "DELETE FROM solder WHERE pourcentage_solde= '" . $pourcentage . "' AND id_art = '" . $id_art ."'";

       $resultat=  $pdo->query($sql);

       if($resultat){

        $sql_update ="UPDATE article SET prix_art = '". $prix_ancien . "' WHERE id_art= '". $id_art . "'" ;
        $result = $pdo->query($sql_update);//executer query
        if($result){
            echo 'mis a jour' . '<br>';
        }else{
            echo 'ma9labch el prix';
        }
         
       
      echo $sql;
        header('location: ../solder.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>