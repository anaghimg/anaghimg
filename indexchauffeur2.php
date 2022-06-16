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
                            <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>declarer une panne</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="declarer_panne.php">declaration d'une panne</a>
                                </li>

                    
                            
                            <li class=" sidebar-item">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Deconnexion</span>
                            </a>
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
                    <h3>Table de bord</h3>
                </div>
                <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
               
                </div>
                <div class="card-content">
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