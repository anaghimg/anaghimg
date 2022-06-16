<?php

$id = $_POST["id"];
$prenom= $_POST["prenom"];
$nom = $_POST["nom"];
$DateEmbauche = $_POST["DateEmbauche"];
$dateNaissance = $_POST["DateNaissance"];
$TelephC = $_POST["TelephC"];
$Email= $_POST["Email"];
$Adresse = $_POST["Adresse"];
$ville = $_POST["ville"];
$CP = $_POST["CP"];
$Niveau = $_POST["Niveau"];
$permis = $_POST["permis"];
require_once('connexion.php');
//var_dump($_POST);
$c = new connexion();
$a=$c->connexionBDD();
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="insert into Personnel ( `prenom`, `nom`, `DateEmbauche`, `DateNaissance`, `TelephC`, `Email`, `Adresse`, `Ville`, `CP`, `Niveau`, `permis`) values ('$nom','$prenom','$DateEmbauche','$dateNaissance','$TelephC','$Email','$Adresse','$ville',$CP,'$Niveau','$permis')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}
?>