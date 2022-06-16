<?php
$date_Amende = $_POST["date_Amende"];
$chauffeur_responsable= $_POST["chauffeur_responsable"];
$somme_Amende = $_POST["somme_Amende"];
$lieu_Amende = $_POST["lieu_Amende"];
$Observations = $_POST["Observations"];


require_once('connexion.php');
$c = new connexion1();
$a=$c->connexionBDD();
$con = $c->connexionBDD();

$req="INSERT INTO amendes (`date_Amende`, `chauffeur_responsable`, `somme_Amende`, `lieu_Amende`, `Observations`) VALUES ('$date_Amende','$chauffeur_responsable','$somme_Amende','$lieu_Amende','$Observations')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}

require_once('../../111a/view/connexion.php');
$c = new connexion1();
$a=$c->connexionBDD();
$con = $c->connexionBDD();


$req="INSERT INTO amendes (`date_Amende`, `chauffeur_responsable`, `somme_Amende`, `lieu_Amende`, `Observations`) VALUES ('$date_Amende','$chauffeur_responsable','$somme_Amende','$lieu_Amende','$Observations')";
echo $req;
try{
mysqli_query($con,$req);

}catch(Exception $e){
	echo $e->getMessage();
}

?>