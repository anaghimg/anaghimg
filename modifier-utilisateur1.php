<?php

$id = $_POST["id"];
$prenom= $_POST["prenom"];
$nom = $_POST["nom"];
$DateEmbauche = $_POST["DateEmbauche"];
$dateNaissance = $_POST["DateNaissance"];
$TelephC = $_POST["TelephC"];
$PortableC = $_POST["PortableC"];
$Email= $_POST["Email"];
$Adresse = $_POST["Adresse"];
$ville = $_POST["ville"];
$CP = $_POST["CP"];
$Niveau = $_POST["Niveau"];
$observations = $_POST["Observations"];
$etat= $_POST["etat"];
$photo= $_POST["photo"];
$permis = $_POST["permis"];
$status = $_POST["status"];

require_once('connexion.php');
var_dump($_POST);
$c = new connexion();
$a=$c->connexionBDD();			
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="UPDATE Personnel SET  id = '$id' ,nom = '$nom', prenom ='$prenom',DateEmbauche='$DateEmbauche',DateNaissance='$dateNaissance',TelephC='$TelephC',Email='$Email',Adresse='$Adresse',Ville='$ville',CP=$CP,Niveau='$Niveau',permis='$permis' where id='".$_GET['id']."'";
echo $req;
try{
mysqli_query($con,$req);
header('location: liste_utilisateur.php?id='.$_GET['id']);

}catch(Exception $e){
	echo $e->getMessage();
}
?>