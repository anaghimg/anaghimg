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
$req="insert into panne (`libelle`, `description`, `date_panne`, `id_vehicule`) values ('$libelle','$description','$date_panne',$id_vehicule)";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}
?>