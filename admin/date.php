<?php include 'head.php' ;
 if(isset($_POST['supprimer'])){

    // need to sanitize
    $idadmin = $_GET['desig_date'] ?? NULL ;

    if(!is_null($desigdate)){
        $sql = "DELETE FROM admin WHERE desig_date= " . $desigdate;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location:date.php');
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
        <h1>les dates </h1>
        <hr>
        
        <?php
        $sql = "SELECT * FROM dates ";
        ?>

<!-- SELECT *FROM  dates WHERE date_db < NOW() AND date_fn > NOW() -->

        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une date</button>
       
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>désignation</th>
                              <th>date début</th>
                              <th>date de fin</th>
                              <th class="text-center">Action</th>
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
               <tr>
                <td><?php echo $row['desig_date'] ;?></td>
                <td><?php echo $row['date_db'] ;?></td>
                <td><?php echo $row['date_fn'] ;?></td>
                
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['desig_date'] ;?>">Supprimer</button></td>
            </tr>
       
            <div class="modal fade" id="m<?php echo $row['desig_date'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['desig_date'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">soldes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_solde.php?desig_date=<?php echo $row['desig_date'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer la date n°<?php echo $row['desig_date'] ;?> </h1>
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
          <h5 class="modal-title" id="exampleModalScrollableTitle">date soldes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form method="POST" action="ajouter/ajouter_date.php" >
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="desig_date" name="desig_date" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="desig_date">désignation </label>
                    </div>
                  </div>
                    
                 
                  
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

