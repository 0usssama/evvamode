<?php include 'head.php' ;
?>
<div id="content-wrapper">

    <div class="container-fluid">

       

        <!-- Page Content -->
        <h1>Votes</h1>
        <hr>

        <?php
        $sql = "SELECT  
        article.id_art
       , article.nom_art
       
       , ( SELECT AVG(voter.nbr_etoile) 
           FROM voter
           WHERE voter.id_art = article.id_art
         )
         AS moyen_nbr_etoile 
     FROM
      article
         
     GROUP BY
         article.id_art
         ORDER BY moyen_nbr_etoile DESC 
     ";
       
        ?>
      
        <div class="table-responsive">
            <table class="table">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nom d'article</th>
                       <th>Nombre d'étoiles</th>


                    </tr>
                </thead>


                <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
                <tr>
                    <td><?php echo $row['id_art'] ;?></td>
                    <td><?php echo $row['nom_art'] ;?></td>
                    <td><?php echo round($row['moyen_nbr_etoile']) ;?></td>
                   
                </tr>

                
                
                
                <?php }
            }; ?>


                                  
            </table>
        </div>


        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->


    </div>
    <!-- /.content-wrapper -->
    <?php include 'foot.php' ;?>