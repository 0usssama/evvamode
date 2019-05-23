
<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_catg'] ?? NULL ;

    if(!is_null($idcatg)){
        $sql = "DELETE FROM admin WHERE id_catg= " . $idcatg;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:categories.php');
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
        <h1>Categories</h1>
        <hr>
        
        <?php
        $sql = "SELECT * FROM categories";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une categories</button>
       
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>categories</th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['id_catg'] ;?></td>
                <td><?php echo $row['desi_catg'] ;?></td>
                
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_catg'] ;?>"><i class="fas fa-trash"></i></button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_catg'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_catg'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">categories</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_categories.php?id_catg=<?php echo $row['id_catg'] ;?> " method="post">
                                <h1 class="mb-5"  style="color:#000;">voulez-vous supprimer categories n°<?php echo $row['id_catg'] ;?> </h1>
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
          <h5 class="modal-title" id="exampleModalScrollableTitle">categories</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_categories.php" >
                
                 
            
                  
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="desi_catg" name="desi_catg" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="desi_catg">categories</label>
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
