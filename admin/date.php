<?php include 'head.php' ;?>
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
        <h1>marques</h1>
        <hr>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une marque</button>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom marque</th>
                    <th>Etat</th>
                    <th>Image</th>
                 
                  <th></th>
                 
                 
                </tr>
            </thead>
                    <tr>
                        <td>1</td>
                        <td>Air max</td>
                        <td>en stock</td>
                        <td>
                            <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </td>
                      
                        <td>
        <a  class="btn btn-danger btn-block " href="#">Supprimer</a>

                        </td>
                        

                       
                    </tr>
                   
                   
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
           
            <form>
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_marq" name="titre_marq" class="form-control" placeholder="marque" required="required" autofocus="autofocus">
                      <label for="titre_marq">Nom de la marque</label>
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="form-label-group">
                        <input type="text" id="etat_marq" name="etat_marq" class="form-control" placeholder="etat en stock" required="required" autofocus="autofocus">
                        <label for="etat_marq">Etat</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                          <input type="file" id="image_marq" name="image_marq" class="form-control" required="required" autofocus="autofocus">
                          <label for="image_marq">Image</label>
                        </div>
                      </div>
                
                <input type="submit" class="btn btn-primary btn-block" value="Ajouter">
              </form>
        </div>
              
       
    </div>
  </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->

    <?php include 'foot.php'; ?>