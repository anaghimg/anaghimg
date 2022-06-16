<!DOCTYPE html>
<?php

$CodeAlerte = $_POST["CodeAlerte"];
$DesignAlerte = $_POST["DesignAlerte"];
$RefArtic= $_POST["RefArtic"];
$Index_Prev = $_POST["Index_Prev"];
$index_message = $_POST["index_message"];
$echeance_message = $_POST["echeance_message"];
$Etat= $_POST["Etat"];
$Accueil= $_POST["Accueil"];
$Barre = $_POST["Barre"];
$Echeance = $_POST["Echeance"];
$CodeTyVeh = $_POST["CodeTyVeh"];
$Client = $_POST["Client"];

require_once('connexion.php');

$c = new connexion();
$a=$c->connexionBDD();
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="insert into Alerte values ($CodeAlerte,'$DesignAlerte','$RefArtic',$Index_Prev,$index_message,$echeance_message,$Etat,
$Accueil,$Barre,$Echeance,$CodeTyVeh,$Client)";
echo $req;
mysqli_query($con,$req);
?>