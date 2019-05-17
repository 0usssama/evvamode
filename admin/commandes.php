
<?php include 'head.php'?>

    <div id="content-wrapper">

      <div class="container-fluid">

          
              <!--end of col-->
          </div>

        <!-- Page Content -->
        <h1>Commandes</h1>
        <hr>


        <table class="table table-striped custab">
            <thead>
            
                <tr>    
                    <th>Id</th>  
                    <th>date</th>              
                    <th>Client</th>
                    <th>Les articles commandés</th>
                    <th>etat</th>
                    <th>Action</th>
                </tr>
            </thead>

                <?php 
                $sql_commande = "SELECT commande.id_commande, commande.date_commande, commande.etat_commande, 
                commande.id_client, commande.id_pv, client.nom_client, client.prenom_client, client.id_client
                        
                FROM commande
                JOIN client
                ON client.id_client = commande.id_client
                
                ;";
 if($pdo->query($sql_commande)){
            foreach  ($pdo->query($sql_commande) as $commande) { ?>


               
            <tr>
            <td><?php echo $commande['id_commande']; ?></td>
            <td><?php echo $commande['date_commande']; ?></td>
            <td><?php echo $commande['nom_client']. " ". $commande['prenom_client'] ; ?></td>
            <td>
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
               <td class="text-center"><button type="button" class="btn btn-info" data-toggle="modal"
                 data-target="#valider<?php echo $article['id_commande'] ;?>"><i class="far fa-check-square"></i></button></td>

               <div class="modal fade" id="valider<?php echo $article['id_commande'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $article['id_commande'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">commande</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                        <?php 
                $sql_point_de_vente = "SELECT * FROM point_de_vente WHERE id_pv= '".  $commande['id_pv'] ."'";
                if($pdo->query($sql_point_de_vente)){
                    foreach  ($pdo->query($sql_point_de_vente) as $point_de_vente) {
                ?>
            
                            <form action="modifier/valider_commande.php?id_commande=<?php echo $commande['id_commande'] ;?>&email=<?php  echo $point_de_vente['email_res_pv'];?> " method="post">
                                <h1 class="mb-5" style="color:#000;">voulez-vous valider la  commandes n°<?php echo $commande['id_commande'] ;?> </h1>
                                

            <?php 
                $message="Vous avez une commande N° {$commande['id_commande']} de client N° {$commande['id_client']} qui a les articles suivant: {$articles_email}";
                
            ?>
                    
          
           
            <?php }
            }; ?>
                            <input type="text" name="responsable" value="<?php echo $point_de_vente['nom_res_pv']. " ". $point_de_vente['prenom_res_pv'];?>" hidden>
                            <input type="text" name="message" value="<?php echo $message ;?>" hidden>
                                <button type="submit" class="btn btn-block btn-info" name="valider">valider</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
               
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
                            <form action="supprimer/supprimer_commandes.php?id_commande=<?php echo $article['id_commande'] ;?> " method="post">
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