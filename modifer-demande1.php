<?php
$id = $_POST["id"];

$libelle = $_POST["libelle"];
$observation= $_POST["observation"];
$description = $_POST["description"];
$date = $_POST["date"];
$id_vehicule = $_POST["id_vehicule"];


require_once('connexion.php');
//var_dump($_POST);
$c = new connexion();
$a=$c->connexionBDD();			
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="UPDATE demandes SET  libelle = '$libelle' ,observation = '$observation', description ='$description',date=$date,id_vehicule='$id_vehicule' where id='".$_GET['id']."'";
echo $req;
try{
mysqli_query($con,$req);
header('location: Liste-demande.php');

}catch(Exception $e){
	echo $e->getMessage();
}
?>