<?php include('fonctionAdmin.php'); ?>
<?php include('entete.php'); ?>
<?php include('menulaterale.php'); ?>

        <!-- Page Content -->
        <h1>Admin</h1>
        <hr>
        <table class="table table-striped custab">
            <thead>
                <tr>
                    <th style="color: #000000">user</th>
                    <th>email</th>
                    <th>etat</th>
                    <th class="text-center">Action</th>
                    <th class="text-center">sup</th>
                </tr>
            </thead>



<?php // requette d'affichage des ligne de la table famille 
$sql =  'SELECT * FROM admin ORDER BY etat_admin ASC';
foreach  ($bdd->query($sql) as $row) { ?>
<form action="admin.php" method="post">    
    <tr>
      <td><input class="formulaire" type="text" name="username" value="<?php echo $row['username']; ?>"></td>
      <td><input class="formulaire" type="text" name="email_admin" value="<?php echo $row['email_admin']; ?>"></td>
      <td>
        <?php if($row['etat_admin']==1){ ?>
          <span class="text-success">en ligne</span> 
        <?php } else { ?>
          <span class="text-danger">bloquée</span>
        <?php } ?>
        <input class="formulaire" type="number" name="etat_admin" value="<?php echo $row['etat_admin']; ?>">
      </td>

     
      <td class="text-center">
                   <input class="btn btn-success" type="submit" value="ok" name="submit"> 
                   <input type="hidden" name="action" value="modifAdmin">
                   <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>">
      </td>
 </form>

<form action="admin.php" method="post">    
      
      <td class="text-center">
                   <input class="btn btn-danger" type="submit" value="ok" name="submit"> 
                   <input type="hidden" name="action" value="supAdmin">
                   <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>"> 

                   OK:<input name="ok" type="checkbox" value="ok">

      </td>
</tr>
</form>

<?php } //fin de for foreach ?>


            </table>
      <table>
<form action="admin.php" method="post">    
    <tr>
      <td><input type="text" name="username" placeholder="user"></td>
      <td><input type="text" name="email_admin" placeholder="email"></td>
      <td>
          Root:<input name="superadmin" type="checkbox" value="1"> | 
          Produit<input name="produit" type="checkbox" value="1"> | 
          Livraison:<input name="livraison" type="checkbox" value="1"> | 
          Point de vente:<input name="pointdevente" type="checkbox" value="1"> | 
       </td>
      <td><input type="text" name="motpass_admin" placeholder="mot de pass"></td>
      <td class="text-center">
                   <input class="btn btn-success" type="submit" value="ajouter" name="submit"> 
                   <input type="hidden" name="action" value="ajoutAdmin">
      </td>
</tr>
</form>
</table>

 

<?php include('pied.php'); ?>
