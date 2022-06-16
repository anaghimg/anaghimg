<?php
class connexion
{
    protected $serveur="localhost";
    protected $utilisateur="root";
    protected $motDePasse="";
    protected $dataBase="FirstParcPFE3";
 
    
 
    public function connexionBDD()
    {
       return(mysqli_connect("localhost","root","","FirstParcPFE3"));
    }

    public function test(){
        return("ok");
    }
 
   
 
}


?>