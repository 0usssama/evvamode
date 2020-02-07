<?php
session_start();
$_SESSION['admin']='connecte';
$user = 'root';
$pass = 'LinuxMate2019:D';
$bdd = new PDO('mysql:host=localhost;dbname=dmc', $user, $pass);


function ajoutAdmin(){
//id_admin	username	motpass_admin	etat_admin	email_admin	code_recup	role_admin
global $bdd;
if(isset($_SESSION['admin'])){ if($_SESSION['admin']=='connecte'){ 
//$role_admin = $_SESSION['role_admin'];  
//if($role_admin[0]=='1'){ 


$username	   = strip_tags($_POST['username']);
$motpass_admin = strip_tags($_POST['motpass_admin']);	
$email_admin   = strip_tags($_POST['email_admin']);	
 
$motpass_admin = md5(strip_tags($_POST['motpass_admin']));	
$etat_admin	   = 1;
$code_recup	   = 'null'; 
$superadmin= '0';
$produit= '0';
$livraison= '0';
$pointdevente= '0';
if(isset($_POST['superadmin'])){$superadmin = '1';}
if(isset($_POST['produit'])){$produit = '1';}
if(isset($_POST['livraison'])){$livraison = '1';}
if(isset($_POST['pointdevente'])){$pointdevente = '1';}
$role_admin = $superadmin.$produit.$livraison.$pointdevente;

$sql = "INSERT INTO admin(

            username,
            motpass_admin,
            etat_admin,
            email_admin,
            code_recup,
            role_admin
            ) VALUES (
            :username,
            :motpass_admin,
            :etat_admin,
            :email_admin,
            :code_recup,
            :role_admin
            )";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':motpass_admin', $motpass_admin, PDO::PARAM_STR);
$stmt->bindParam(':etat_admin', $etat_admin, PDO::PARAM_STR);
$stmt->bindParam(':email_admin', $email_admin, PDO::PARAM_STR);
$stmt->bindParam(':code_recup', $code_recup, PDO::PARAM_STR);
$stmt->bindParam(':role_admin', $role_admin, PDO::PARAM_STR);  
                                      
$stmt->execute();

}}//fin controle session admin}
}//fin fonction ajout admin



function modifAdmin(){
//id_admin	username	motpass_admin	etat_admin	email_admin	code_recup	role_admin
global $bdd;  

$id_admin	   = (int)$_POST['id_admin'];
$username	   = strip_tags($_POST['username']);
$etat_admin	   = strip_tags($_POST['etat_admin']);
$email_admin   = strip_tags($_POST['email_admin']);	

$sql = "UPDATE admin 
        SET 
        username=:username,
        etat_admin=:etat_admin,
        email_admin=:email_admin
        WHERE  id_admin=:id_admin";
 
$execution = $bdd->prepare($sql); 
$execution->bindParam(':username', $username, PDO::PARAM_STR);       
$execution->bindParam(':etat_admin', $etat_admin, PDO::PARAM_INT);    
$execution->bindParam(':email_admin', $email_admin, PDO::PARAM_STR);
$execution->bindParam(':id_admin', $id_admin, PDO::PARAM_INT);       
 
$execution->execute(); 


}//fin fonction modif admin


function modifRoleAdmin(){
//id_admin role_admin

if(isset($_SESSION['admin'])){ if($_SESSION['admin']=='connecte'){ 
$role_admin = $_SESSION['role_admin'];  
if($role_admin[0]=='1'){ 

$id_admin	   = strip_tags($_POST['id_admin']);
$role_admin    = strip_tags($_POST['role_admin']); 

}}}//fin controle session admin
}//fin fonction modif admin


function modifPassAdmin(){
//id_admin	username	motpass_admin	etat_admin	email_admin	code_recup	role_admin

$id_admin	   = strip_tags($_POST['id_admin']);
$username	   = strip_tags($_POST['username']);
$motpass_admin = strip_tags($_POST['motpass_admin']);

}
//fin fonction supprime admin

function supAdmin(){
if(isset($_POST['ok'])){
	if($_POST['ok']=='ok'){

global $bdd;

$id_admin = (int)$_POST['id_admin'];	

$sql = "DELETE FROM admin WHERE id_admin =  :id_admin";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_INT);   
$stmt->execute();

       }
 }

} //fin fonction supprime admin



function ajoutProduit(){
// id_prod	nom_prod	date_prod	prix_detail	prix_gros	qnt_detail	qnt_gros	TVA_prod	id_marq	id_fami	caracteristiques_prod	description_prod	etat_prod	id_admin	position_prod


$id_prod  	             = strip_tags($_POST['id_admin']);	
$nom_prod   	       = strip_tags($_POST['id_admin']);
$date_prod  	       = strip_tags($_POST['id_admin']);	
$prix_detail  	       = strip_tags($_POST['id_admin']);	
$prix_gros  	       = strip_tags($_POST['id_admin']);	
$qnt_detail  	       = strip_tags($_POST['id_admin']);	
$qnt_gros	  	       = strip_tags($_POST['id_admin']);
$TVA_prod	  	       = strip_tags($_POST['id_admin']);
$id_marq	  	       = strip_tags($_POST['id_admin']);
$id_fami	  	       = strip_tags($_POST['id_admin']);
$caracteristiques_prod	 = strip_tags($_POST['id_admin']);
$description_prod   	 = strip_tags($_POST['id_admin']);
$etat_prod	  	       = strip_tags($_POST['id_admin']);
$id_admin	  	       = strip_tags($_POST['id_admin']);
$position_prod  	       = strip_tags($_POST['id_admin']);

}
//fin fonction ajout Produit

function ajoutImage($id_prod,$id_point_vente){
//	id_imag	url_imag	id_prod	id_point_vente
}

function modifProduit(){

}
//fin fonction modif Produit


function supProduit(){

}
//fin fonction supprime Produit



function ajoutfamille(){
 
global $bdd;  
$titre_fami   = strip_tags($_POST['titre_fami']);
$etat_fami    = strip_tags($_POST['etat_fami']); 
$image_fami   = '/'; 
$ordre_fami   = strip_tags($_POST['ordre_fami']);      

$sql = "INSERT INTO famille(
titre_fami,
etat_fami,
image_fami,
ordre_fami
            ) VALUES (
:titre_fami,
:etat_fami,
:image_fami,
:ordre_fami
            )";
                                          
$stmt = $bdd->prepare($sql);

$stmt->bindParam(':titre_fami', $titre_fami, PDO::PARAM_STR);
$stmt->bindParam(':etat_fami', $etat_fami, PDO::PARAM_STR);
$stmt->bindParam(':image_fami', $image_fami, PDO::PARAM_STR);
$stmt->bindParam(':ordre_fami', $ordre_fami, PDO::PARAM_INT);  

$stmt->execute();

}
//fin fonction ajout famille





//debut controleur
if(isset($_POST['action'])){
  if($_POST['action'] == 'ajoutFamille'){ajoutfamille();}   






  if($_POST['action'] == 'ajoutAdmin'){ajoutAdmin();} 
  if($_POST['action'] == 'modifAdmin'){modifAdmin();} 
  if($_POST['action'] == 'modifRoleAdmin'){modifRoleAdmin();} 
  if($_POST['action'] == 'modifPassAdmin'){modifPassAdmin();} 
  if($_POST['action'] == 'supAdmin'){supAdmin();} 


}

 
//fin controleur

/*
$sql = "UPDATE movies SET filmName = :filmName, 
            filmDescription = :filmDescription, 
            filmImage = :filmImage,  
            filmPrice = :filmPrice,  
            filmReview = :filmReview  
            WHERE filmID = :filmID";
$stmt = $pdo->prepare($sql);                                  
$stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
$stmt->bindParam(':filmDescription', $_POST['$filmDescription'], PDO::PARAM_STR);    
$stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
// use PARAM_STR although a number  
$stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
$stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
$stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);   
$stmt->execute(); 


$sql = "DELETE FROM movies WHERE filmID =  :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);   
$stmt->execute();



$sql = "INSERT INTO movies(filmName,
            filmDescription,
            filmImage,
            filmPrice,
            filmReview) VALUES (
            :filmName, 
            :filmDescription, 
            :filmImage, 
            :filmPrice, 
            :filmReview)";
                                          
$stmt = $pdo->prepare($sql);
                                              
$stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
$stmt->bindParam(':filmDescription', $_POST['filmDescription'], PDO::PARAM_STR); 
$stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
// use PARAM_STR although a number  
$stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
$stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
                                      
$stmt->execute(); 

*/
?>