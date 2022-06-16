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
                            <a href="indexadmin.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Acceuil</span>
                            </a>

                        </li>
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
                                <a href="consulter-utilisateur.php">consulter Utilisateur</a>
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
                                    <a href="Modifierpanne.php">Modifier une panne </a>
                                </li>  
                                <li>
                                <a href="Supprimerpanne.php">supprimer une panne</a>
                              </li>
                              <li>
                                <a href="consulter-panne.php">consulter panne</a>
                              </li>
                            </ul>


                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Gestion alerte</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="Liste_alerte.php">Liste alerte</a>
                                </li>

                                <li>
                                    <a href="ajout-alerte.php">Ajouter alerte</a>
                                </li>

                                <li>
                                    <a href="Modifier-alerte.php">Modifier alerte </a>
                                </li>  
                                <li>
                                <a href="Supprimer-alerte.php">supprimer alerte</a>
                              </li>
                              <li>
                                <a href="consulter-alerte.php">consulter alerte</a>
                              </li>
                            </ul>
                            <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Gestion Amendes</span>
                            </a>

                    <ul class="submenu ">

                                <li>
                                    <a href="Liste_amende.php">Liste Amendes</a>
                                </li>

                                <li>
                                    <a href="ajout-Amende.php">Ajouter Amende</a>
                                </li>

                                <li>
                                    <a href="Modifier-Amende.php">Modifier Amende </a>
                                </li>  
                                <li>
                                <a href="Supprimer-Amende.php">Desactiver Amende</a>
                              </li>
                              <li>
                                <a href="consulter-Amende.php">consulter Amende</a>
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


                    
    
                            <li class=" sidebar-item">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Deconnexion</span>
                            </a>
                        </li>
                           
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
                    <h3>Ajout d'une nouvelle alerte </h3>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" name="form1" action="Ajout-alerte1.php" method="post">
                  
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label>Type</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select  class="form-control" name="type" placeholder="Numéro d'objectif">
                                <option> Chauffeur</option>
                                <option> Mecanicien</option>
                                <option> Chef de parc</option>
                            </select>
                        </div>
                       
                         <div class="col-md-4">
                            <label>CodeAlerte</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="CodeAlerte" class="form-control" placeholder="code alerte">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>DesignAlerte</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="DesignAlerte" class="form-control" placeholder="design alerte">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>RefArtic</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="RefArtic" class="form-control" placeholder="ref art">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>Index_Prev</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="Index_Prev" class="form-control" placeholder="index prev">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>index_message</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="index mess" class="form-control" placeholder="index mess">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>Etat</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="Etat" class="form-control" placeholder="Etat">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>Accueil</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="Accueil" class="form-control" placeholder="Accueil">
                        </input>
                    </div>
                             <div class="col-md-4">
                            <label>Client</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="Client" class="form-control" placeholder="Client">
                          </input>
                      </div>
                      <div class="col-md-4">
                            <label>Barre</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="Barre" class="form-control" placeholder="Barre">
                          </input>
                      </div>
                      <div class="col-md-4">
                            <label>Echeance</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="Echeance" class="form-control" placeholder="Echeance">
                          </input>
                      </div>
                      <div class="col-md-4">
                            <label>CodeTyVeh</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input text="text" id="Description" name="CodeTyVeh" class="form-control" placeholder="codeTyVeh">
                          </input>
                      </div>
                       
                            <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Enregistrer</button>
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