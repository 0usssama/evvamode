<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['pourcentage_solde'] ?? NULL ;

    if(!is_null($pourcentage)){
        $sql = "DELETE FROM admin WHERE pourcentage_solde= " . $pourcentage;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:solder.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>
    <div id="content-wrapper">

      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8">
                  <form class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                         
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Rechercher une famille">
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
        <h1>les soldes </h1>
        <hr>
        
        <?php
        $sql = "SELECT article.id_art,
        article.nom_art,dates.id_date, dates.date_db,
        solder.pourcentage_solde 
        FROM solder 
        JOIN dates on 
        dates.id_date = solder.id_date
        join article
        ON  article.id_art = solder.id_art ";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter solde</button>
       
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>pourcentage_solde</th>
                              <th>article</th>
                              <th>date de solde</th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['pourcentage_solde'] ;?></td>
                <td><?php echo $row['id_art']. '/'. $row['nom_art'];?></td>
                <td><?php echo $row['id_date']. '/'. $row['date_db'];?></td>
                
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['pourcentage_solde'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['pourcentage_solde'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['pourcentage_solde'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">soldes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_solde.php" method="post">
                                <h1 class="mb-5">voulez-vous supprimer solde n°<?php echo $row['pourcentage_solde'] ;?> </h1>
                                
                                <input type="text" name="pourcentage_solde"  value="<?php echo $row['pourcentage_solde'] ;?>" hidden>
                                <input type="text" name="id_art" value="<?php echo $row['id_art'] ;?>" hidden>
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
   

       
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">soldes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_solde.php" >
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="pourcentage_solde" name="pourcentage_solde" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="pourcentage_solde">pourcentage </label>
                    </div>
                  </div>
                    
                 
                  
                  <?php
                  $sql = "SELECT * FROM article";
                  ?>
           <div class="form-group">
             <div class="form-label-group">
              <select name="id_art" id="id_art" class="form-control" required="required">
                  <option value="">nom article</option>
                  <?php 
                  if($pdo->query($sql)){
                     foreach  ($pdo->query($sql) as $row) {
                  ?>

                  <option value="<?php echo $row['id_art']. '/'. $row['nom_art'];?>">
                  <?php echo $row['id_art']. '/'. $row['nom_art'];?>
                  </option>
                     <?php 
                     }
                 } ?>
              </select>
             </div>
           </div>
                    
                 

           <?php
                  $sql = "SELECT * FROM dates";
                  ?>
           <div class="form-group">
                    <div class="form-label-group">
                    <select name="id_date" id="id_date" class="form-control" required="required">
                    <option value="">date solde</option>
                    <?php 
                    if($pdo->query($sql)){
                       foreach  ($pdo->query($sql) as $row) {
                    ?>
  
                    <option value="<?php echo $row['id_date'].'/'. $row['date_db'].'/'. $row['date_fn'];?>">
                    <?php echo $row['id_date'].'/'. $row['date_db'].'/'. $row['date_fn'];?>
                    </option>
                       <?php 
                       }
                   } ?>
                </select>
                    </div>
                  </div>
          
                <input type="submit" class="btn btn-primary btn-block" value="ajouter" name="ajouter">
              </form>
        </div>
              
       
    </div>
  </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
    <?php include 'foot.php' ;?>

