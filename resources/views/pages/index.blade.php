<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Acces Intranet | Dashboard</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="all,follow" />
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <!-- Google fonts - Popppins for copy-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800" />
  <!-- orion icons-->
  <link rel="stylesheet" href="css/orionicons.css" />
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet" />
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png?3" />
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
		><![endif]-->
</head>

<body>
  <!-- navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
      <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-bars"></i></a><a
        href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">Acces intranet</a>
      <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
        <li class="nav-item">
          <form id="searchForm" class="ml-auto d-none d-lg-block">
            <div class="form-group position-relative mb-0">
              <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0">
                <i class="o-search-magnify-1 text-gray text-lg"></i>
              </button>
              <input type="search" placeholder="Search ..."
                class="form-control form-control-sm border-0 no-shadow pl-4" />
            </div>
          </form>
        </li>
        <li class="nav-item dropdown mr-3">
          <a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span
              class="notification-icon"></span></a>
          <div aria-labelledby="notifications" class="dropdown-menu">
            <a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-violet text-white">
                  <i class="fab fa-twitter"></i>
                </div>
                <div class="text ml-2">
                  <p class="mb-0">You have 2 followers</p>
                </div>
              </div>
            </a><a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-green text-white">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="text ml-2">
                  <p class="mb-0">You have 6 new messages</p>
                </div>
              </div>
            </a><a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-blue text-white">
                  <i class="fas fa-upload"></i>
                </div>
                <div class="text ml-2">
                  <p class="mb-0">Server rebooted</p>
                </div>
              </div>
            </a><a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-violet text-white">
                  <i class="fab fa-twitter"></i>
                </div>
                <div class="text ml-2">
                  <p class="mb-0">You have 2 followers</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item text-center"><small
                class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
          </div>
        </li>
        <li class="nav-item dropdown ml-auto">
          <a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;"
              class="img-fluid rounded-circle shadow" /></a>
          <div aria-labelledby="userInfo" class="dropdown-menu">
            <a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">BONJOUR JD
              </strong><small>Employer</small></a>
            <a href="./components/profile/mon_profile.html" class="dropdown-item">Mon Profil
            </a>
            <a href="#" class="dropdown-item">Mon mot de passe </a>
            <div class="dropdown-divider"></div>
            <div>
              <a href="./components/menu/mes_bulletins_de_paie.html" class="dropdown-item">Mes bulletins de paie</a>
              <a href="./components/menu/mes_demandes_de_congés.html" class="dropdown-item">Mes demandes de congés</a>
              <a href="./components/menu/mes_arrêts_maladie.html" class="dropdown-item">Mes arrêts maladie</a>
              <a href="#./components/menu/voir_mon_planning_de_travail.html" class="dropdown-item">Voir mon planning de
                travail</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Logout</a>
            </div>
          </div>

        </li>
      </ul>
    </nav>
  </header>
  <br />
  <br />
  <br />

  <div class="d-flex align-items-stretch">


    <div id="sidebar" class="sidebar py-3">

      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
        BONJOUR JD
      </div>
      <ul class="sidebar-menu list-unstyled">
        <!-- ‎Mon_PROFIL
 -->
        <li class="sidebar-list-item">
          <a href="index.html" class="sidebar-link text-muted active"><i class="fas fa-user-circle"></i><span>‏‏‎ ‎Mon
              PROFIL
            </span></a>
        </li>

        <!-- ‎‎VOS_RESERVATIONS -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#‎‎VOS_RESERVATIONS" aria-expanded="false"
            aria-controls="‎‎VOS_RESERVATIONS" class="sidebar-link text-muted">‏‏‎‎<span>‏‏‎‎VOS
              RESERVATIONS</span></a>
          <div id="‎‎VOS_RESERVATIONS" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"><i class="fas fa-briefcase"></i>‏‏‎ ‎<span>
                    Reservations
                  </span> </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <span>Contrats</span> </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"><span>Conducteurs</span> </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"><span>Paiements reçus</span> </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- VOS_TARIFS -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#VOS_TARIFS" aria-expanded="false" aria-controls="VOS_TARIFS"
            class="sidebar-link text-muted">‏‏‎‎<span>VOS TARIFS</span></a>
          <div id="VOS_TARIFS" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <i class="fas fa-dollar-sign"></i>‏‏‎ ‎<span>Les
                    tarifs
                  </span> </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"><span>Code promotionnel </span>
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"><span> Sources de locations</span>
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"><span> Paiements reçus </span></a>
              </li>
            </ul>
          </div>
        </li>

        <!-- VOS_VEHICULES -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#VOS_VEHICULES" aria-expanded="false"
            aria-controls="VOS_VEHICULES" class="sidebar-link text-muted"><span>‏‏‎VOS
              VEHICULES</span></a>
          <div id="VOS_VEHICULES" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <i class="fas fa-car"></i>‏‏‎ ‎<span>
                    Véhicules</span>
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <span> Catégories</span>
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <span> Options de commandes</span>
                </a>
              </li>
            </ul>
          </div>
        </li>



        <!-- FICHE_DEPART_RETOUR -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#FICHE_DEPART_RETOUR" aria-expanded="false"
            aria-controls="FICHE_DEPART_RETOUR" class="sidebar-link text-muted">
            <span>FICHE DEPART/RETOUR</span></a>
          <div id="FICHE_DEPART_RETOUR" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <i class="fas fa-plane-departure"></i>‏‏‎ ‎<span>
                    Faire
                    une fiche départ </span>
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5"> <i class="fas fa-plane-arrival"></i>‏‏‎ <span>
                    Faire une fiche retour </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <!-- VOS_REPARATIONS -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#VOS_REPARATIONS" aria-expanded="false"
            aria-controls="VOS_REPARATIONS" class="sidebar-link text-muted">‏‏‎‎<span>VOS REPARATIONS</span></a>
          <div id="VOS_REPARATIONS" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5">Gérer des réparations
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5">Type de réparations & Fournisseur

                </a>
              </li>

            </ul>
          </div>
        </li>

        <!-- VOS_STATISTIQUES -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#VOS_STATISTIQUES" aria-expanded="false"
            aria-controls="VOS_STATISTIQUES" class="sidebar-link text-muted">‏‏‎‎<span>VOS STATISTIQUES </span></a>
          <div id="VOS_STATISTIQUES" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5">Statistique franchisé
                </a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5">Statistique franchisé
                </a>
              </li>
            </ul>
          </div>
        </li>


        <!-- ADMINISTRATION -->
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#ADMINISTRATION" aria-expanded="false"
            aria-controls="ADMINISTRATION" class="sidebar-link text-muted">‏‏‎‎<span>ADMINISTRATION </span></a>
          <div id="ADMINISTRATION" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5">Caractéristiques</a>
              </li>
              <li class="sidebar-list-item">
                <a href="#" class="sidebar-link text-muted pl-lg-5">Localisations véhicules</a>
              </li>
            </ul>
          </div>
        </li>

        <!-- 
				<li class="sidebar-list-item">
					<a href="login.html" class="sidebar-link text-muted"><i
							class="o-exit-1 mr-3 text-gray"></i><span>Login</span></a>
				</li> -->
      </ul>
      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
        EXTRAS
      </div>
      <ul class="sidebar-menu list-unstyled">
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Demo</span></a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted"><i
              class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span></a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span></a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span></a>
        </li>
      </ul>
    </div>
    <div class="page-holder w-100 d-flex flex-wrap">


      <div class="container-fluid px-xl-5">
        <br>
        <br>
        <section>
          <div class="col-lg-6 mb-1">
            <div class="form-group row ">
              <div class="">
                <input type="submit" value="Retour" class="btn btn-primary" />
              </div>
            </div>
            <div class="form-group row">Bonjour <strong> JD</strong> , il est <strong> 09:48 </strong> le
              <strong>11/08/2020</strong>
              <small class="form-text text-muted ml-1">(Fuseau Horaire: America/Martinique) </small>
              <br>
              <br>
              <h5>
                Tableau de bord
              </h5>
            </div>
          </div>
        </section>
        <section>
          <div class="row">
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">

                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-blue"></div>
                  <div class="text">
                    <h6 class="mb-0">VOITURE DISPONIBLE</h6>
                    <span class="text-gray">21</span>
                  </div>
                </div>
                <div class="icon text-white bg-blue">
                  <i class="fas fa-car"></i>
                </div>

              </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-red"></div>
                  <div class="text">
                    <h6 class="mb-0">CLIENT AUJOURD'HUI</h6>
                    <span class="text-gray">32</span>
                  </div>
                </div>
                <div class="icon text-white bg-red">
                  <i class="far fa-clipboard"></i>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-green"></div>
                  <div class="text">
                    <h6 class="mb-0">CONTRAT EN COURS</h6>
                    <span class="text-gray">0</span>
                  </div>
                </div>
                <div class="icon text-white bg-green">
                  <i class="fa fa-dolly-flatbed"></i>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-yellow"></div>
                  <div class="text">
                    <h6 class="mb-0">RESERVATION EN ATTE...</h6>
                    <span class="text-gray">13</span>
                  </div>
                </div>
                <div class="icon text-white bg-yellow">
                  <i class="fas fa-receipt"></i>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="py-4">
          <div class="row">
            <!-- DISPONIBILITÉ DES VOITURES PAR CATÉGORIE : AUJOURD'HUI-->
            <div class="col-lg-6 mb-5">
              <div class="card">
                <div class="card-header">
                  <h3 class="h6 text-uppercase mb-0">DISPONIBILITÉ DES VOITURES PAR CATÉGORIE : AUJOURD'HUI</h3>
                </div>
                <div class=" mb-4">
                  <table class="table card-text">
                    <thead>
                      <tr>
                        <th>Nom de la catégorie</th>
                        <th>Disponibilité</th>
                        <th>Aujourd'hui</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>AO - MBMR (Peugeot 108 ou similaire)</td>
                        <td>7j 15 30 60</td>
                        <td>28 (62)</td>
                      </tr>
                      <tr>
                        <td>C-CDMR (Peugeot 301 ou similaire)
                        </td>
                        <td>7j 15 30 60J</td>
                        <td>11 (14)</td>
                      </tr>
                      <tr>
                        <td>HD-CFAR (Peugeot 2008 Automatique ou similaire)
                        </td>
                        <td>7j 15j 30 60</td>
                        <td>17 (30)</td>
                      </tr>
                      <tr>
                        <td>EN - SFAR (Peugeot 3008 Automatique ou similaire)
                        </td>
                        <td>7j 15j 30 60 </td>
                        <td>5 (8)</td>
                      </tr>
                      <tr>
                        <td>K-SVMR (Citroën Jumpy ou similaire)</td>
                        <td>7j 15 30 60</td>
                        <td>2 (5)</td>
                      </tr>
                      <tr>
                        <td>U1 - UDMR (Dacia Dokker 7m3 ou similaire) </td>
                        <td>7j 15j 30 60</td>
                        <td>6 (6)</td>
                      </tr>
                      <tr>
                        <td>A-EBMR (Peugeot 208 ou similaire) </td>
                        <td>7j 15j 30 60</td>
                        <td>19 (32)</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>


            <!-- Simulation reservation:-->
            <div class="col-lg-6 mb-5">
              <div class="card">
                <div class="card-header">
                  <h3 class="h6 text-uppercase mb-0">Simulation reservation:</h3>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  <form class="form-horizontal">
                    <!-- implementatio -->
                    <div class="form-group row">
                      <div class="center-block">
                        <label> Debut</label>
                        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control"
                          value="2020-12-08">
                      </div>
                      <hr>
                      <div class="center-block"> <label> Fin</label>
                        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control"
                          value="2020-12-08">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="center-block">
                        <label> Heure Debut
                        </label>
                        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control"
                          value="2020-12-08">
                      </div>
                      <hr>
                      <div class="center-block"> <label> Heure Fin
                        </label>
                        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control"
                          value="2020-12-08">
                      </div>
                    </div>
                    <!-- End implementatio -->

                    <div class="form-group row">
                      <label>Catégorie De Véhicule </label>
                      <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control"
                        value="2020-12-08">
                    </div>
                    <div class="form-group row">
                      <label>Source De Location </label>
                      <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control"
                        value="2020-12-08">
                    </div>
                    <!-- Button -->
                    <input type="submit" value="Simuler la reservation" class="btn btn-primary btn-block" />
                  </form>
                </div>
              </div>
            </div>

          </div>
        </section>

      </div>
      <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 text-center text-md-left text-primary">
              <p class="mb-2 mb-md-0">Edman &copy; 2020-future</p>
            </div>
            <div class="col-md-6 text-center text-md-right text-gray-400">
              <p class="mb-0">
                Design by
                <a href="https://#/admin-templates" class="external text-gray-400">EdManDev</a>
              </p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://#/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"></script>
  <!-- <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="js/charts-home.js"></script> -->
  <script src="js/front.js"></script>
</body>

</html>