<?php include 'head.php';



    if(isset($_POST['supprimer'])){

        // need to sanitize
        $idadmin = $_GET['id_admin'] ?? NULL ;

        if(!is_null($idadmin)){
            $sql = "DELETE FROM admin WHERE id_admin= " . $idadmin;

           $resultat=  $pdo->query($sql);

           if($resultat){
               header('location:admin.php');
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
        <h1>Admin</h1>
        <hr>

        <?php
        $sql = "SELECT * FROM admin";
       
        ?>
        <span style="color: #000000">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
            data-target="#exampleModalScrollable">Ajouter un admin</button>
        </span>
<table class="table table-striped custab">
          <thead>
                <tr>
                    <th style="color: #000000">ID</th>
                    <th style="color: #000000">username</th>
                    <th style="color: #000000">nom</th>
                    <th style="color: #000000">Prenom</th>
                    <th style="color: #000000">Email</th>
                    <th style="color: #000000">Telephone</th>
                   
                   



                    <th class="text-center" style="color: #000000">Action</th>
                </tr>

            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_admin'] ;?></td>
                <td><?php echo $row['username_adm'] ;?></td>
                <td><?php echo $row['nom_adm'] ;?></td>
                <td><?php echo $row['prenom_adm'] ;?></td>
                <td><?php echo $row['email_adm'] ;?></td>
                <td><?php echo $row['tel_adm'] ;?></td>
               

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_admin'] ;?>"><i class="fas fa-trash"></i></button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_admin'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_admin'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_admin.php?id_admin=<?php echo $row['id_admin'] ;?> " method="post">
                                <h1 class="mb-5"><span style="color: #000000">voulez-vous supprimer admin n</span>°<?php echo $row['id_admin'] ;?> </h1>
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
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="ajouter/ajouter_admin.php" method="post">


                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="username_adm" name="username_adm" class="form-control"
                                    placeholder="utilisateur" required="required" autofocus="autofocus">
                                <label for="username_adm" style="color: #000000">utilisateur</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="password_adm" name="password_adm" class="form-control"
                                    placeholder="mot de passe" required="required" autofocus="autofocus">
                                <label for="password_adm" style="color: #000000">mot de passe</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="nom_adm" name="nom_adm" class="form-control"
                                    placeholder="mot de passe" required="required" autofocus="autofocus">
                                <label for="nom_adm" style="color: #000000">Nom</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="prenom_adm" name="prenom_adm" class="form-control"
                                    placeholder="mot de passe" required="required" autofocus="autofocus">
                                <label for="prenom_adm" style="color: #000000">Prenom</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="email_adm" name="email_adm" class="form-control"
                                    placeholder="email" required="required" autofocus="autofocus">
                                <label for="email_adm" style="color: #000000">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="tel_adm" name="tel_adm" class="form-control"
                                    placeholder="telephone" required="required" autofocus="autofocus">
                                <label for="tel_adm" style="color: #000000">Telephone</label>
                            </div>
                        </div>



                        <input type="submit" class="btn btn-primary btn-block" value="Ajouter" name="ajouter">
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->



    <?php include 'foot.php';?>