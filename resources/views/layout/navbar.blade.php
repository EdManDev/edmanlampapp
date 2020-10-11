<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
  <link rel="stylesheet" href="{{URL::to{'/assets'}}/css/style.default.css" id="theme-stylesheet" />
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
          <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4" />
        </div>
      </form>
    </li>
    <li class="nav-item dropdown mr-3">
      <a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span
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