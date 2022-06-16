<?php

ini_set('display_errors', 1);
$id = $_POST["id"];
$libelle = $_POST["libelle"];
$description= $_POST["description"];
$date_panne = $_POST["date"];
$id_vehicule = $_POST["id_vehicule"];


require_once('connexion.php');
$c = new connexion1();
$a=$c->connexionBDD();
$con = $c->connexionBDD();


$req="INSERT INTO panne (`libelle`, `description`, `date panne`, `id vehicule`) VALUES ('$libelle','$description','$date_panne','$id_vehicule')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}

require_once('../../111a/view/connexion.php');
$c = new connexion();
$a=$c->connexionBDD();
$con = $c->connexionBDD();


$req="INSERT INTO panne (`libelle`, `description`, `date_panne`, `id_vehicule`) VALUES ('$libelle','$description','$date_panne','$id_vehicule')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}


?>