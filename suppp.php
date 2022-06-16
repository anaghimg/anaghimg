 <?php


$con = mysqli_connect("localhost","root","","FirstParcPFE") or die("erreur");

$id=$_GET['id'];
$req = "delete  from Alerte where id='$id'";

mysqli_query($con, $req) or die("erreur");
header("Location:Liste_alerte.php");
?>                                                