<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_pr'] ?? NULL ;

    if(!is_null($iddate)){
        $sql = "DELETE FROM admin WHERE id_pr= " . $iddate;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:periode.php');
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
        <h1>les periodes </h1>
        <hr>
        
        <?php
        $sql = "SELECT * FROM periode ";
        ?>

<!-- SELECT *FROM  periode WHERE date_db < NOW() AND date_fn > NOW() -->

        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une periode</button>
       
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>id</th>
                              <th>date début</th>
                              <th>date de fin</th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['id_pr'] ;?></td>
                <td><?php echo $row['date_db'] ;?></td>
                <td><?php echo $row['date_fn'] ;?></td>
                
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_pr'] ;?>"><i class="fas fa-trash"></i></button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_pr'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_pr'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">soldes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_periode.php?id_pr=<?php echo $row['id_pr'] ;?> " method="post">
                                <h1 class="mb-5"  style="color:#000;">voulez-vous supprimer la periode n°<?php echo $row['id_pr'] ;?> </h1>
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
          <h5 class="modal-title" id="exampleModalScrollableTitle">Les piriodes des soldes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_periode.php" >
                
                 
               
                    
                 
                  
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="date" id="date_db" name="date_db" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="date_db">date début  </label>
                    </div>
                  </div>  
                 
           <div class="form-group">
                    <div class="form-label-group">
                      <input type="date" id="date_fn" name="date_fn" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="date_fn">date fin </label>
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

