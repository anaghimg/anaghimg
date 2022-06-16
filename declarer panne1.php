<?php
$id = $_POST["id"];
$libelle = $_POST["date_Amende"];
$description= $_POST["chauffeur_responsable"];
$date_panne = $_POST["somme_Amende"];
$id_vehicule = $_POST["lieu_Amende"];


require_once('connexion.php');
$c = new connexion();
$a=$c->connexionBDD();
echo($c->test());
$con = $c->connexionBDD();


echo("fffff");
$req="INSERT INTO panne VALUES ('$id','$libelle','$description','$date_panne','$id_vehicule')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}
?>