<?php
$id = $_POST["id"];

$id_vehicule = $_POST["id_vehicule"];
$immatriculation= $_POST["immatriculation"];
$date = $_POST["date"];
$libelle = $_POST["libelle"];
$marque = $_POST["marque"];

$observation = $_POST["observation"];


require_once('connexion.php');
$c = new connexion();
$a=$c->connexionBDD();
echo($c->test());
$con = $c->connexionBDD();


echo("fffff");
$req="INSERT INTO `fiche de maintenance`(`id_vehicule`, `immatriculation`, `date`, `libelle`, `observation`, `marque`) VALUES (
	'$id_vehicule','$immatriculation','$date','$libelle','$marque','$observation')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}
?>