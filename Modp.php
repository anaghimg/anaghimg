 <?php
                                               require_once('connexion.php');

$c = new connexion1();
$a=$c->connexionBDD();

$con = $c->connexionBDD();

                                                $req = "update from Alerte where MatriculeP";
                                                