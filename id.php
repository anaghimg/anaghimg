<?php
require_once('connexion.php');

$c = new connexion();
$a=$c->connexionBDD();
echo($c->test());
$con = $c->connexionBDD();

echo("fffff");
$login = $_POST["email"];
$password = $_POST["pass"];

$req = "select * from administrateur where login ='$login' and password='$password'";
echo $req ;
$res = mysqli_query($con ,$req);
$cpt = 0;
while($ligne = mysqli_fetch_array($res,MYSQLI_NUM)){
$cpt ++;

}

if($cpt > 0)
	header("location:indexadmin.php");
else
   header("location:index.html");

?>


