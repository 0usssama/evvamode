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

       

        <!-- Page Content -->
        <h1>Stylistes</h1>
        <hr>

        <?php
        $sql = "SELECT * FROM styliste";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
            data-target="#ajouterModal">Ajouter styliste</button>
        <div class="table-responsive">
            <table class="table">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nom et prénom styliste</th>
                        <th>telephone</th>
                        <th>photo styliste</th>
                        <th>logo styliste</th>
                        <th>description </th>
                        <th>Email </th>
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
                    <td><img width="80" height="80" src="<?php echo 'ajouter/uploads/'. $row['url_photo_styls'];?>"
                            alt=""> </td>
                    <td> <img width="80" height="80" src="<?php echo 'ajouter/uploads/'. $row['url_logo_styls']; ;?>"
                            alt=""> </td>

                    <td><?php echo $row['descri_styls'] ;?></td>
                    <td><?php echo $row['email_styls'] ;?></td>

                    <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target="#modifier<?php echo $row['id_styls'] ;?>"><i class="fas fa-marker"></i></button></td>
                    <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#m<?php echo $row['id_styls'] ;?>"><i class="fas fa-trash"></i></button></td>
                </tr>

                <div class="modal fade" id="m<?php echo $row['id_styls'] ;?>" tabindex="-1" role="dialog"
                    aria-labelledby="m<?php echo $row['id_styls'] ;?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Supprimer styliste</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="supprimer/supprimer_styliste.php?id_styls=<?php echo $row['id_styls'] ;?> "
                                    method="post">
                                    <h1 class="mb-5" style=color:#000;>voulez-vous supprimer styliste n°<?php echo $row['id_styls'] ;?>
                                    </h1>
                                    <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                        value="supprimer">
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                
                <div class="modal fade" id="modifier<?php echo $row['id_styls'] ;?>" tabindex="-1" role="dialog"
                    aria-labelledby="m<?php echo $row['id_styls'] ;?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Modifier styliste</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <div class="modal-body">
                                <form action="modifier/modifier_styliste.php?id_styls=<?php echo $row['id_styls'] ;?> "
                                    method="post">

                                        <?php
                                 $sql_modifier = "SELECT * FROM styliste WHERE id_styls = '". $row['id_styls'] . "'";
                                 if($pdo->query($sql_modifier)){
                                  foreach  ($pdo->query($sql_modifier) as $modifier_styliste) {

                                 ?>
                                       
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="text" id="nom_styls" name="nom_styls" class="form-control"
                                                value="<?php echo $modifier_styliste['nom_styls'] ?>"
                                                required="required" autofocus="autofocus">
                                            <label for="nom_styls">nom stylsite</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="text" id="prenom_styls" name="prenom_styls"
                                                class="form-control"
                                                value="<?php echo $modifier_styliste['prenom_styls'] ?>"
                                                required="required" autofocus="autofocus">
                                            <label for="prix_art">Prenom</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="text" id="tel_styls" name="tel_styls" class="form-control"
                                                value="<?php echo $modifier_styliste['tel_styls'] ?>"
                                                required="required" autofocus="autofocus">
                                            <label for="tel_styls">telephone</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div>
                                            <label for="">votre description</label>
                                            <textarea cols="70" type="text" id="descri_styls" name="descri_styls"
                                                class="form-control" required="required"
                                                autofocus="autofocus"><?php echo $modifier_styliste['descri_styls'] ?></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="text" id="email_styls" name="email_styls" class="form-control"
                                                value="<?php echo $modifier_styliste['email_styls'] ?>"
                                                required="required" autofocus="autofocus">
                                            <label for="email_styls">email</label>
                                        </div>
                                    </div>




                                    <input type="submit" class="btn btn-primary btn-block" name="modifier"
                                        value="modifier">
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                <?php }
            }; ?>


                                    <?php }
            }; ?>
            </table>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Ajouter Sytliste</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="ajouter/ajouter_styliste.php" enctype="multipart/form-data">


                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="nom_stymod" name="nom_styls" class="form-control"
                                        placeholder="famille" required="required" autofocus="autofocus">
                                    <label for="nom_stymod">Nom </label>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="prenom_styl2" name="prenom_styls" class="form-control"
                                        placeholder="famille" required="required" autofocus="autofocus">
                                    <label for="prenom_styl2">prenom</label>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="tel_styls2" name="tel_styls" class="form-control"
                                        placeholder="famille" required="required" autofocus="autofocus">
                                    <label for="tel_styls2"> telephone</label>
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="file" id="url_photo_styls" name="url_photo_styls" class="form-control"
                                        placeholder="famille" required="required" autofocus="autofocus">
                                    <label for="url_photo_styls"> photo styliste</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="file" id="url_logo_styls" name="url_logo_styls" class="form-control"
                                        placeholder="famille" required="required" autofocus="autofocus">
                                    <label for="url_logo_styls"> logo styliste</label>
                                </div>
                            </div>



                            <div class="form-group">
                                <div>
                                    <label for="">votre description</label>
                                    <textarea cols="50" type="text" id="descri_styls" name="descri_styls"
                                        class="form-control" placeholder="Déscription" required="required"
                                        autofocus="autofocus"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="email_styls2" name="email_styls" class="form-control"
                                        placeholder="famille" required="required" autofocus="autofocus">
                                    <label for="email_styls2"> email de styliste </label>
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