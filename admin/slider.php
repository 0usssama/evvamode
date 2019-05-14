
    <?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idsld = $_GET['id_slider'] ?? NULL ;

    if(!is_null($idart)){
        $sql = "DELETE FROM admin WHERE id_slider= " . $idsld;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:slider.php');
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
                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Recherche">
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
        <h1>Slider</h1>
        <hr>
        
        <?php
        $sql = "SELECT * FROM slider";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une slider</button>
       
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>url slider</th>
                              
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['id_slider'] ;?></td>
                <td class="col"><img  width="80" height="80"   src="<?php echo '../admin/ajouter/uploads/'.$row['url_img_slider'] ;?>" alt="" > </td>
              
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_slider'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_slider'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_slider'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">slider</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_slider.php?id_slider=<?php echo $row['id_slider'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer slider n°<?php echo $row['id_slider'] ;?> </h1>
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
          <h5 class="modal-title" id="exampleModalScrollableTitle"> slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_slider.php" enctype="multipart/form-data"  >
                
                    
                 
                  
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="fileToUpload" name="fileToUpload" class="form-control" placeholder="famille" required="required" accept="image/*">
                      <label for="fileToUpload">url img</label>
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
