<?php
 ini_set('display_errors', 1); 
     require_once('connexion.php');
    $c = new connexion();
    $con = $c->connexionBDD();
     $req="select * from Personnel where id = '".$_GET['id']."'";
try{
    $query = mysqli_query($con,$req);
    $Personnel = mysqli_fetch_object($query);
}catch(Exception $e){
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>FIRST PARC</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">  

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="assets/images/bg.jpg" width="180" height="180" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                     <ul class="menu">


                        <li class='sidebar-title'>Menu principal</li>


                        <li class="sidebar-item  ">
                            <a href="index" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Acceuil</span>
                            </a>

                        </li>
                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Gestion Utilisateurs</span>
                            </a>

                    <ul class="submenu ">

                                <li>
                                    <a href="Liste_utlisateur.php">Liste Utilisateurs</a>
                                </li>

                                <li>
                                    <a href="ajout-utilisateur.php">Ajouter Utilisateur</a>
                                </li>

                                
                              <li>
                                <a href="consulter_utilisateur.php">consulter utilisateur</a>
                              </li>
                            </ul>

                            
                    
                            <li class=" sidebar-item has-sub">
                            <a href="index" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Gestion des pannes</span>
                            </a>
                             <ul class="submenu ">

                                <li>
                                    <a href="Listepanne.php">Liste des pannes</a>
                                </li>

                                <li>
                                    <a href="nouvellepanne.php">Ajouter une panne</a>
                                </li>

                                
                              <li>
                                <a href="consulter-panne.php">consulter une panne</a>
                              </li>
                            </ul>


                              
                            <li class=" sidebar-item has-sub">
                            <a href="index" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Gestion des amendes</span>
                            </a>
                             <ul class="submenu ">

                                <li>
                                    <a href="Liste-amende.php">Liste des amendes</a>
                                </li>

                                <li>
                                    <a href="ajout-amende.php">Ajouter une amende</a>
                                </li>

                                
                              <li>
                                <a href="consulter-alerte.php">consulter une alerte</a>
                              </li>
                            </ul>


                            <li class=" sidebar-item has-sub">
                            <a href="index" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>consulter les vehicles</span>
                            </a>
                             <ul class="submenu ">

                                <li>
                                    <a href="consulter_vehicules.php">consulter les vehicules</a>
                                </li>
                            
                            </ul>
                        



                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                
                            </a>
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>modifier utilisateur</h3>
                </div>
                <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
               
                </div>
                <div class="card-content">
                <div class="card-body">
                     <form class="form form-horizontal" name="form1" action="modifier-utilisateur1.php?id=<?= $_GET['id'] ?>" method="post">
                        <div class="col-md-4">
                            <label>id</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="intger" id="id" value="<?= $Personnel->id ?>" name="id" class="form-control" placeholder="id">
                          </input>
                        </div>
                        <div class="col-md-4">
                            <label>prenom</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="prenom" value="<?= $Personnel->prenom ?>" name="prenom" class="form-control" placeholder="prenom">
                          </input>
                        </div>
                    
                       
                         <div class="col-md-4">
                            <label>nom</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="nom" value="<?= $Personnel->nom ?>" name="nom" class="form-control" placeholder="nom">
                          </input>
                        </div>
                         
                         <div class="col-md-4">
                            <label>DateEmbauche</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="datetime" name="DateEmbauche" class="form-control" value="<?= $Personnel->DateEmbauche ?>" placeholder="DateEmbauche"/>
                          
                        </div>
                         
                         <div class="col-md-4">
                            <label>DateNaissance</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="datetime" id="DateNaissance" value="<?= $Personnel->DateNaissance ?>" name="DateNaissance" class="form-control" placeholder="DateNaissance">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>TelephC</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="TelephC" value="<?= $Personnel->TelephC ?>" name="TelephC" class="form-control" placeholder="TelephC">
                          </input>
                        </div>
                         
                             <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="Email" value="<?= $Personnel->Email ?>" name="Email" class="form-control" placeholder="Email">
                          </input>
                      </div>
                           <div class="col-md-4">
                            <label>Adresse</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="Adresse" value="<?= $Personnel->Adresse ?>" name="Adresse" class="form-control" placeholder="Adresse">
                          </input>
                      </div>
                    
                           <div class="col-md-4">
                            <label>Ville</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="Ville" value="<?= $Personnel->Ville ?>" name="Ville" class="form-control" placeholder="Ville">
                          </input>
                                                </div>

                           <div class="col-md-4">
                            <label>CP</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="bigint" id="CP" value="<?= $Personnel->CP ?>" name="CP" class="form-control" placeholder="CP">
                          </input>
                                                </div>

                           <div class="col-md-4">
                            <label>Niveau</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="Niveau" value="<?= $Personnel->Niveau ?>" name="Niveau" class="form-control" placeholder="Niveau">
                          </input>
                                                </div>


                           


                           <div class="col-md-4">
                            <label>permis</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="Varchar" id="permis" value="<?= $Personnel->permis ?>" name="permis" class="form-control" placeholder="permis">
                          </input>
                        </div>
                        <div class="col-md-4">
                            <label>status</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select  class="form-control" type="tinyint" placeholder="Numéro d'objectif">
                                <option> desactiver</option>
                                <option> activer</option>

                            </select>
                        </div>



                    
                        
                            <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">modifier</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1"> Annuler</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
</section>
                
</div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>