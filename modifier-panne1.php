<?php

$id = $_POST["id"];
$libelle= $_POST["libelle"];
$description = $_POST["description"];
$date_panne = $_POST["date_panne"];
$id_vehicule = $_POST["id_vehicule"];


require_once('connexion.php');
var_dump($_POST);
$c = new connexion();
$a=$c->connexionBDD();			
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="UPDATE panne SET  libelle = '$libelle', description ='$description',date_panne='$date_panne',
id_vehicule='$id_vehicule' where id='".$_GET['id']."'";
echo $req;
try{
mysqli_query($con,$req);
header('location: modifier-panne.php?id='.$_GET['id']);

}catch(Exception $e){
	echo $e->getMessage();
}
?>