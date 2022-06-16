<?php
 ini_set('display_errors', 1); 
     require_once('connexion.php');
    $c = new connexion();
    $con = $c->connexionBDD();
     $req="delete  from Amendes where id= '".$_GET['id']."'";
try{
    $query = mysqli_query($con,$req);
}catch(Exception $e){
    echo $e->getMessage();
}
header("Location:Liste-amende.php");
?>                                         