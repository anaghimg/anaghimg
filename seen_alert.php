<?php 
	require_once('connexion.php');

$c = new connexion();
$con = $c->connexionBDD();

	$req="UPDATE alertvisit SET seen=1 WHERE seen=0";
$res = mysqli_query($con,$req);
