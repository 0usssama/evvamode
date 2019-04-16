
<?php include 'head.php';


if(isset($_POST['supprimer'])){

    // need to sanitize
    $id_commd = $_GET['id_commd'] ?? NULL ;

    if(!is_null($id_commd)){
        $sql = "DELETE FROM styliste WHERE id_commd= " . $id_commd;

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
                    <th>ID</th>
                    <th>Client</th>
                    <th>date</th>
                    <th>etat</th>
                 
                  <th></th>
                  <th></th>
                 
                 
                </tr>
            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['id_commd'] ;?></td>
                <td><?php echo $row['nom_styl'] . " " .  $row['prenom_styl'] ;?></td>
                <td><?php echo $row['tel_styl'] ;?></td>
                <td><?php echo $row['url_photo_styl'] ;?></td>
                <td><?php echo $row['url_logo_styl'] ;?></td>
                <td><?php echo $row['descri_styl'] ;?></td>
                <td><?php echo $row['specialite_styl'] ;?></td>
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_commd'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_commd'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_commd'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_commandes.php?id_commd=<?php echo $row['id_commd'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer commandes n°<?php echo $row['id_commd'] ;?> </h1>
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
           
            <form method="POST" action="ajouter/ajouter_commandes.php" >
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="id_client" name="id_client" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="id_client">Nom client </label>
                    </div>
                  </div>
                    
                 
                  
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="prenom_styl" name="prenom_styl" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="prenom_styl">  prenom</label>
                    </div>
                  </div>
                    
                 
                 
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="tel_styl" name="tel_styl" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="tel_styl"> telephone</label>
                    </div>
                  </div>
                    
               
                    

                     <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="url_photo_styl" name="url_photo_styl" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="url_photo_styl"> photo styliste</label>
                    </div>
                  </div>
                    

                     <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="url_logo_styl" name="url_logo_styl" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="url_logo_styl"> logo styliste</label>
                    </div>
                  </div>
                    


                     <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="descri_styl" name="descri_styl" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="descri_styl"> description </label>
                    </div>
                  </div>
                    

                      <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="specialite_styl" name="specialite_styl" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="specialite_styl"> fonction  </label>
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

                    <tr>


        <a  class="btn btn-success btn-block " href="#">transférer</a>

                        </td>
                       

                       
                    </tr>
                   
                   
          

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>