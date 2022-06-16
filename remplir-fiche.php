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


                        <li class="sidebar-item  active">
                            <a href="indexadmin.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Acceuil</span>
                            </a>

                        </li>
                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>remplir fiche de maintenance</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="remplir-fiche.php">remplir fiche de maintenance</a>
                                </li>

                            </ul>
                            
                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>consulter panne</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="consulter-panne.php">consulter une panne</a>

                                </ul>
                                </li>
                    
    
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
                    <h3>remplir une fiche de maintenance  </h3>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" name="form1" action="remplir-fiche1.php" method="post">
                  
                    
                        
                         <div class="col-md-4">
                            <label>id_vehicule </label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="integer" id="id_vehicule" name="id_vehicule" class="form-control" placeholder="id_vehicule">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>immatriculation</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="integer" id="immatriculation" name="immatriculation" class="form-control" placeholder="immatriculation">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>date</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="date" id="date" name="date" class="form-control" placeholder="date">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>libelle</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="varchar" id="libelle" name="libelle" class="form-control" placeholder="libelle">
                          </input>
                        </div>
                        
                        <div class="col-md-4">
                            <label>marque</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="varchar" id="marque" name="marque" class="form-control" placeholder="marque">
                          </input>
                        </div>
                         <div class="col-md-4">
                            <label>observation</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" id="observation" name="observation" class="form-control" placeholder="observation">
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