<?php
$id = $_POST["id"];

$date_Amende = $_POST["date_Amende"];
$chauffeur_responsable= $_POST["chauffeur_responsable"];
$somme_Amende = $_POST["somme_Amende"];
$lieu_Amende = $_POST["lieu_Amende"];
$Observations = $_POST["Observations"];


require_once('connexion.php');
//var_dump($_POST);
$c = new connexion1();
$a=$c->connexionBDD();			
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$req="UPDATE Amendes SET  date_Amende = '$date_Amende' ,chauffeur_responsable = '$chauffeur_responsable', somme_Amende ='$somme_Amende',lieu_Amende='$lieu_Amende',Observations='$Observations' where id='".$_GET['id']."'";
echo $req;
try{
mysqli_query($con,$req);
header('location: Liste-amende.php');

}catch(Exception $e){
	echo $e->getMessage();
}
?>