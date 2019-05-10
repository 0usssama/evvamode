
<?php include 'head.php'?>

    <div id="content-wrapper">

      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8">
                  <form class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                         
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Rechercher une marque">
                          </div>
                          <!--end of col-->
                          <div class="col-auto">
                              <button class="btn btn-lg btn-success" type="submit">rechercher</button>
                          </div>
                          <!--end of col-->
                      </div>
                  </form>
              </div>
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
                commande.id_client, commande.id_pv, client.nom_client, client.prenom_client
                        
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
            
            if($pdo->query($sql_article)){
                foreach  ($pdo->query($sql_article) as $article) {
                    ?>
            <li><?php echo $article['nom_art']; ?> <b>(<?php echo $article['quantite_article_commande']; ?>)</b></li>
            <?php }
            }; ?>
            
            </ul>
            
            </td>
            <td class="text-center"><button type="button" class="btn btn-info" data-toggle="modal"
                 data-target="#m<?php echo $row['id_commande'] ;?>">Valider </button></td>
           
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                 data-target="#m<?php echo $row['id_commande'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_commande'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_commande'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">command</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_commandes.php?id_commande=<?php echo $row['id_commande'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer commandes n°<?php echo $row['id_commande'] ;?> </h1>
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
   
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>