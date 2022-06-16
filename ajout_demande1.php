<?php

$id = $_POST["id"];
$libelle = $_POST["libelle"];
$observation= $_POST["observation"];
$description = $_POST["description"];
$date = $_POST["date"];
$id_vehicule = $_POST["id_vehicule"];

require_once('connexion.php');

$c = new connexion1();
$a=$c->connexionBDD();
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="insert into demandes values ($id,'$libelle','$observation','$description','$date',$id_vehicule)";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}
?>