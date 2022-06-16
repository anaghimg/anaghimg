 <?php
                                               require_once('connexion.php');

$c = new connexion();
$a=$c->connexionBDD();

$con = $c->connexionBDD();

                                                $req = "update from Personnel where MatriculeP";
                                                