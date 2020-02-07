<?php 
    include 'head.php';


    
    ?>
    <div id="content-wrapper">

      <div class="container-fluid">
         
              <!--end of col-->
          </div>
       

        <!-- Page Content -->
        <h1>Clients</h1>
        <hr>
        <?php
        $sql = "SELECT * FROM client";
       
        ?>
        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom et prénom</th>
                    <th>email</th>
                    <th>telephone</th>
                    

                  <th class="text-center">Action</th>
                </tr>
            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_client'] ;?></td>
                <td><?php echo $row['nom_client'] . " " .  $row['prenom_client'] ;?></td>
                <td><?php echo $row['email_client'] ;?></td>
                <td><?php echo $row['tel_client'] ;?></td>

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                data-target="#m<?php echo $row['id_client'] ;?>"  ><i class="fas fa-trash"></i></button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_client'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_client'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_client.php?id_client=<?php echo $row['id_client'] ;?> " method="post">
                                <h1 class="mb-5"  style="color:#000;">voulez-vous supprimer client n°<?php echo $row['id_client'] ;?> </h1>
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
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     


  <?php include 'foot.php';?>