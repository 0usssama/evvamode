<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idevent = $_GET['id_event'] ?? NULL ;

    if(!is_null($idevent)){
        $sql = "DELETE FROM admin WHERE id_event= " . $idevent;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:evenement.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>
    <div id="content-wrapper">

      <div class="container-fluid">

         
              <!--end of col-->
          </div>

        <!-- Page Content -->
        <h1>Evenement</h1>
        <hr>
        
        <?php
        $sql = "SELECT
         evenement.id_event ,
         evenement.titre_event ,
         evenement.date_event ,
         evenement.heure_event ,
         evenement.adresse_event ,
          evenement.descri_event ,
          evenement.url_img_event ,
          styliste.nom_styls ,
          styliste.prenom_styls
           FROM evenement  JOIN styliste
        ON evenement.id_styls = styliste.id_styls ";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter un evenement</button>
        <div class="table-responsive">
                  <table class="table ">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>Titre evenement</th>
                              <th>Date</th>
                              <th>Heure</th>
                              <th>Adresse </th>
                              <th>Description</th>
                              <th>photo</th>
                              <th>Styliste</th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr class="">
                <td class="col"><?php echo $row['id_event'] ;?></td>
                <td class="col"><?php echo $row['titre_event'] ;?></td>
                <td class="col"><?php echo $row['date_event'] ;?></td>
                <td class="col"><?php echo $row['heure_event'] ;?></td>
                <td class="col"><?php echo $row['adresse_event'] ;?></td>
                <td class="col"><?php echo $row['descri_event'] ;?></td>
                <td class="col"><img   src="<?php echo '../admin/ajouter/uploads/'.$row['url_img_event'] ;?>" alt="" width="100px"> </td>
                <td class="col"><?php echo $row['nom_styls'].' '.$row['prenom_styls'] ;?></td>
                
               

                <td class="text-center col"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_event'] ;?>"><i class="fas fa-trash"></i></button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_event'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_event'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Evenenment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_evenement.php?id_event=<?php echo $row['id_event'] ;?> " method="post">
                                <h1 class="mb-5"  style="color:#000;">voulez-vous supprimer evenement n°<?php echo $row['id_event'] ;?> </h1>
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

       
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Evenement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_evenement.php" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_event" name="titre_event" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="titre_event">Titre evenement</label>
                    </div>
                  </div>
                    
                 
                  
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="date" id="date_event" name="date_event" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="date_event">Date </label>
                    </div>
                  </div>



                 
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="time" id="heure_event" name="heure_event" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="heure_event">Heure </label>
                    </div>
                  </div>




                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="adresse_event" name="adresse_event" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="adresse_event">Adresse</label>
                    </div>
                  </div>

                  <div class="form-group">
                  <div>
                    <label for="">votre description</label>
                      <textarea cols="70" type="text" id="descri_event" name="descri_event" class="form-control" placeholder="Prix en détail" required="required" autofocus="autofocus"></textarea>
                       </div>
                  </div>


                  

                  <div class="form-group">
                    <div class="form-label-group">
                    <input type="file" id="fileToUpload" name="fileToUpload" class="form-control" 
                    placeholder="Prénom" required="required" accept="image/*">
                    <label for="fileToUpload">photo</label>
                    </div>
                  </div>
                    
                 
              
                  <?php
                         $sql = "SELECT * FROM styliste";
                         ?>
                  <div class="form-group">
                    <div class="form-label-group">
                     <select name="id_styls" id="id_styls" class="form-control">
                         <option value="">Styliste</option>
                         <?php 
                         if($pdo->query($sql)){
                            foreach  ($pdo->query($sql) as $row) {
                         ?>

                         <option value="<?php echo $row['id_styls']. '-'. $row['nom_styls']. ' '.$row['prenom_styls'] ;?>">
                         <?php echo $row['id_styls']. '-'. $row['nom_styls']. ' '.$row['prenom_styls'] ;?>
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

