<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['id_pv'] ?? NULL ;

    if(!is_null($idart)){
        $sql = "DELETE FROM admin WHERE id_pv= " . $idpv;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:point_de_ventes.php');
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
        <h1>point de ventes</h1>
        <hr>
        
        <?php
        $sql = "SELECT * FROM point_de_ventes";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une category</button>
       
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>adresse_pv</th>
                              <th>nom_res_pv</th>
                              <th>prenom_res_pv </th>
                              <th>email_res_pv</th>
                              <th>coordone_pv</th>
                              <th>tel_pv</th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['id_pv'] ;?></td>
                <td><?php echo $row['adresse_pv'] ;?></td>
                <td><?php echo $row['nom_res_pv'] ;?></td>
                <td><?php echo $row['prenom_res_pvt'] ;?></td>
                <td><?php echo $row['email_res_pv'] ;?></td>
                <td><?php echo $row['coordone_pv'] ;?></td>
                <td><?php echo $row['tel_pv'] ;?></td>
                
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_pv'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['id_pv'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_pv'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_point_de_ventes.php?id_pv=<?php echo $row['id_pv'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer point de ventes n°<?php echo $row['id_pv'] ;?> </h1>
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
           
            <form method="POST" action="ajouter/ajouter_point_de_ventes.php" >
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="desi_catg" name="desi_catg" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="desi_catg">Nom </label>
                    </div>
                  </div>
                    
                 
                  
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="styl_cat" name="styl_cat" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="styl_cat">style de category</label>
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
