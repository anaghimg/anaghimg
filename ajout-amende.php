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


                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Gestion demande de reparation</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="Liste_demande.php">Liste demande de reparation</a>
                                </li>

                                <li>
                                    <a href="ajout-demande.php">Ajouter demande de reparation</a>
                                </li>

                                <li>
                                    <a href="Modifier-demande.php">Modifier demande de reparation</a>
                                </li>  
                                <li>
                                <a href="Supprimer-demande.php">supprimer demande de reparation</a>
                              </li>
                            </ul>
                            </li>
                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>declarer une panne</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="declarer_panne.php">declaration d'une panne</a>

                                </ul>
                                </li>
                                 <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>ajouter une amende</span>
                            </a>

                            <ul class="submenu ">
                                

                                <li>
                                    <a href="ajout-amende.php">ajouter une amende afin de remplir ce formulaire</a>
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
                    <h3>Ajout d'une nouvelle amende </h3>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" name="form1" action="ajout-amende1.php" method="post">
                  
                    
                        <div class="form-body">
                            <div class="col-md-4">
                            <label>id </label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="id" name="id" class="form-control" placeholder="id">
                          </input>
                        </div>
                        
                         <div class="col-md-4">
                            <label>date_Amende </label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="date" id="date_Amende" name="date_Amende" class="form-control" placeholder="date_Amende">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>chauffeur_responsable</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="varchar" id="chauffeur_responsable" name="chauffeur_responsable" class="form-control" placeholder="chauffeur_responsable">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>Somme_Amende</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="varchar" id="Somme_Amende" name="somme_Amende" class="form-control" placeholder="somme_Amende">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>lieu_Amende</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="varchar" id="lieu_Amende" name="lieu_Amende" class="form-control" placeholder="lieu_Amende">
                          </input>
                        </div>
                         

                           <div class="col-md-4">
                            <label>Observations</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="Observations" name="Observations" class="form-control" placeholder="Observations">
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