<?php
 ini_set('display_errors', 1); 
     require_once('connexion.php');
    $c = new connexion();
    $con = $c->connexionBDD();
     $req="select * from panne where id = '".$_GET['id']."'";
try{
    $query = mysqli_query($con,$req);
    $panne = mysqli_fetch_object($query);
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
                    <img src="images/bg.jpg" width="180" height="180" alt="" srcset="">
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
                                    <a href="Modifier-utilisateur.php">Modifier Utilisateur </a>
                                </li>  
                                <li>
                                <a href="Supprimer-utilisateur.php">Desactiver Utilisateur</a>
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
                                    <a href="Modifier-panne.php">Modifier une panne </a>
                                </li>  
                                
                              <li>
                                <a href="consulter-panne.php">consulter une panne</a>
                              </li>
                            </ul>


                              <li class=" sidebar-item has-sub">
                            <a href="index" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Gestion des Alertes</span>
                            </a>
                             <ul class="submenu ">

                                <li>
                                    <a href="Liste_alerte.php">Liste des Alerte</a>
                                </li>

                                <li>
                                    <a href="ajout-alerte.php">Ajouter une Alerte</a>
                                </li>

                                <li>
                                    <a href="Modifier-alerte.php">Modifier une Alerte</a>
                                </li>  
                                <li>
                                <a href="Supprimer-alerte.php">supprimer une Alerte</a>
                              </li>
                              <li>
                                <a href="consulter-alerte.php">consulter une alerte</a>
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
                                    <a href="Modifier-amende.php">Modifier une amende</a>
                                </li>  
                                <li>
                                <a href="Supprimer-amende.php">supprimer une amende</a>
                              </li>
                              <li>
                                <a href="consulter-amende.php">consulter une amende</a>
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
                    <h3>modifier panne</h3>
                </div>
                <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
               
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" name="form1" action="modifier-panne1.php?id=<?= $_GET['id'] ?>" method="post">s
                        <div class="col-md-4">
                            <div class="col-md-4">
                            <label>id</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="id" value="<?= $panne->id ?>" name="id" class="form-control" placeholder="id">
                          </input>
                        </div>
                        <div class="col-md-4">
                            <label>libelle</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="libelle" value="<?= $panne->libelle ?>" name="libelle" class="form-control" placeholder="libelle">
                          </input>
                        </div>
                    
                       
                         <div class="col-md-4">
                            <label>description</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="description" value="<?= $panne->description ?>" name="description" class="form-control" placeholder="description">
                          </input>
                        </div>
                         
                         <div class="col-md-4">
                            <label>date_panne</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="date" name="date_panne" class="form-control" value="<?= $panne->date_panne ?>" placeholder="date_panne"/>
                          
                        </div>
                         
                         <div class="col-md-4">
                            <label>id_vehicule</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="varchar" id="id_vehicule" value="<?= $panne->id_vehicule ?>" name="id_vehicule" class="form-control" placeholder="id_vehicule">
                          </input>
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