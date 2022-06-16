<?php
require_once('connexion.php');

$c = new connexion();
$con = $c->connexionBDD();
$req="SELECT * FROM visites";
$res = mysqli_query($con,$req);

while($ligne = mysqli_fetch_assoc($res)){

$date1 =  date_create_from_format('Y-m-d',$ligne['date_visite']);
$date2 =  date_create_from_format('Y-m-d',date('Y-m-d'));
$req="SELECT * FROM alertvisit where vehicule = ".$ligne['vehicule_id']." AND `date alerte` = '".date('Y-m-d')."' and type =".$ligne['type'];
$alert = mysqli_query($con,$req);
if ($alert->num_rows == 0) {
	$diff = (array) date_diff($date1, $date2);
	if($diff['days'] == $ligne['alert_prev_duration']){
		if($ligne['type'] == 1){
			$msg = 'Reminder !! you have a visit after :'.$ligne['alert_prev_duration'].' Days';
			$type = 'success';
		}elseif($ligne['type'] == 2){
			$msg = 'Reminder !! you have a kilometer passage ';
			$type = 'danger';
		}elseif($ligne['type'] == 3){
			$msg = 'Reminder !! you have to renew your assurance licence ';
			$type = 'danger';
		}elseif($ligne['type'] == 4){
			$msg = 'Reminder !! permis va etre expiré apres :'.$ligne['alert_prev_duration'].' Days';
			$type = 'success';
		}
		try{
			$req="INSERT INTO `alertvisit`(`date alerte`, `vehicule`, `Type_alerte`, `data`, `type`) VALUES (NOW(),".$ligne['vehicule_id'].",
				'".$type."','".$msg."',".$ligne['type'].")";
			mysqli_query($con,$req);	
		}catch(Exception $e){
			var_dump($e->getMessage());
		}
	};
	};
}

?>