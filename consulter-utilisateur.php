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


                        <li class="sidebar-item ">
                            <a href="indexadmin.php" class='sidebar-link'>
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
                                <a href="consulter-utilisateur.php">consulter Utilisateur</a>
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
                                <a href="consulter-amende.php">consulter amende</a>
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


                              
                        <li class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>consulter vehicule</span>
                            </a>

                    <ul class="submenu ">

                                <li>
                                    <a href="consulter_vehicule.php">consulter vehicule</a>
                                </li>

                            </ul>
                            
                       
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
                    <h3>consulter utilisateur</h3>
                </div>
                <section id="basic-horizontal-layouts">
       <div class="main-content container-fluid">
                
                <section class="section">
                   
                    <div class="row mb-4">
                        <div class="col-md-10">
                            
                        <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    
                                  
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="table-responsive">
                                        <table class='table mb-0' id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Matricule</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                               require_once('connexion.php');

$c = new connexion();
$a=$c->connexionBDD();

$con = $c->connexionBDD();

                                                $req = "select * from Personnel";
                                                
                                                $res = mysqli_query($con ,$req);
                                               while($ligne = mysqli_fetch_array($res,MYSQLI_NUM)){






                                                ?>
                                                 <tr>
                                                    <td><?php echo($ligne[0]); ?> </td>
                                                    <th><?php echo($ligne[1]); ?></th>
                                                    <th><?php echo($ligne[2]); ?></th>
                                                    <th><?php echo($ligne[8]); ?></th>
                                                   
                                                </tr>
                                                <?php
                                                    }
                                                ?>


                                          
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </section>
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