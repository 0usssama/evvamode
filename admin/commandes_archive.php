
<?php include 'head.php'?>

    <div id="content-wrapper">

      <div class="container-fluid">

          
              <!--end of col-->
          </div>

        <!-- Page Content -->
        <h1>Commandes validées</h1>
        <hr>


        <table class="table table-striped custab">
            <thead>
            
                <tr>    
                    <th>Id</th>  
                    <th>date</th>              
                    <td>Validée le </td>
                    <th>Client</th>
                    <th>point de vente</th>
                    <th>Les articles commandés</th>
                    <th></th>
                    <th>Action</th>
                </tr>
            </thead>

                <?php 
                $sql_commande = "SELECT commande.id_commande, commande.date_commande, commande.etat_commande, 
                commande.id_client, commande.id_pv, client.nom_client, client.prenom_client, client.id_client,
                point_de_vente.adresse_pv, commande.date_validation_commande
                FROM commande
                JOIN client
                ON client.id_client = commande.id_client
                JOIN point_de_vente
                ON commande.id_pv = point_de_vente.id_pv
                WHERE commande.etat_commande = 'validée'
                ;";
 if($pdo->query($sql_commande)){
            foreach  ($pdo->query($sql_commande) as $commande) { ?>


               
            <tr>
            <td><?php echo $commande['id_commande']; ?></td>
            <td><?php echo $commande['date_commande']; ?></td>
              <td><?php echo $commande['date_validation_commande']; ?></td>
              <td><?php echo $commande['nom_client']. " ". $commande['prenom_client'] ; ?></td>
           <td><?php echo $commande['adresse_pv']; ?></td>  <td>
            <ul>
           <?php
            $sql_article = "SELECT 
            article.nom_art, article_commande.prix_article_commande, 
            article_commande.quantite_article_commande, article_commande.id_commande,
            article_commande.id_art
            FROM article_commande 
            JOIN article 
            ON article.id_art = article_commande.id_art
            WHERE article_commande.id_commande='". $commande['id_commande'] . "'";
                    $articles_email = "";
            
            if($pdo->query($sql_article)){
                foreach  ($pdo->query($sql_article) as $article) {
                    $articles_email .= $article['nom_art'] . "(". $article['quantite_article_commande'] . " piéce),";
                    ?>
            <li><?php echo $article['nom_art']; ?> <b>(<?php echo $article['quantite_article_commande']; ?>)</b></li>
            <?php 
            
        }
            }; ?>
            
            </ul>
            
            </td>
               <!-- ********************************* -->
               <td class="text-center"></td>

           
               <!-- ****************** -->

                <td class="text-center"><button type="button"  class="btn btn-danger" data-toggle="modal"
                 data-target="#m<?php echo $article['id_commande'] ;?>"><i class="fas fa-trash"></i></button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $article['id_commande'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $article['id_commande'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">command</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_commandes_archive.php?id_commande=<?php echo $article['id_commande'] ;?> " method="post">
                                <h1 class="mb-5" style="color:#000;">voulez-vous supprimer commandes n°<?php echo $article['id_commande'] ;?> </h1>
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
         
                   
            <?php }
            }; ?>
                          
                   
            </table>
   

       
            </div>
   
   <script>
   $('a').click(function(){
       console.log('pressed');
       
   })
   </script>
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>