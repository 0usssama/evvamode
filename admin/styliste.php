
<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idstyl = $_GET['id_styls'] ?? NULL ;

    if(!is_null($idstyl)){
        $sql = "DELETE FROM styliste WHERE id_styls= " . $idstyl;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:styliste.php');
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
        <h1>Stylistes</h1>
        <hr>
        
        <?php
        $sql = "SELECT * FROM styliste";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" 
        data-target="#exampleModalScrollable">Ajouter  styliste</button>
         
                  <table class="table table-striped custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                            <th>Nom et prénom styliste</th>
                              <th>telephone</th>
                              <th>photo styliste</th>
                              <th>logo styliste</th>
                              <th>description </th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>

                      
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
            <tr>
                <td><?php echo $row['id_styls'] ;?></td>
                <td><?php echo $row['nom_styls'] . " " .  $row['prenom_styls'] ;?></td>
                <td><?php echo $row['tel_styls'] ;?></td>
                <td><img  width="80" height="80" src="<?php echo 'ajouter/uploads/'. $row['url_photo_styls'];?>" alt=""  > </td>
                <td>    <img  width="80" height="80" src="<?php echo 'ajouter/uploads/'. $row['url_logo_styls']; ;?>" alt=""  > </td>

                <td><?php echo $row['descri_styls'] ;?></td>
              
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_styls'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_styls'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_styls'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_styliste.php?id_styls=<?php echo $row['id_styls'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer styliste n°<?php echo $row['id_styls'] ;?> </h1>
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
          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_styliste.php" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="nom_styls" name="nom_styls" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="nom_styls">Nom  </label>
                    </div>
                  </div>
                    
                 
                  
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="prenom_styls" name="prenom_styls" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="prenom_styls">  prenom</label>
                    </div>
                  </div>
                    
                 
                 
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="tel_styls" name="tel_styls" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="tel_styls"> telephone</label>
                    </div>
                  </div>
                    
               
                    

                     <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="url_photo_styls" name="url_photo_styls" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="url_photo_styls"> photo styliste</label>
                    </div>
                  </div>
                    

                     <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="url_logo_styls" name="url_logo_styls" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="url_logo_styls"> logo styliste</label>
                    </div>
                  </div>
                    


                     <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="descri_styls" name="descri_styls" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="descri_styls"> description </label>
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
