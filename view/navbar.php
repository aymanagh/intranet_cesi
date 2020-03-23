
<nav class="navbar navbar-expand-lg fixed-top" style ="background-color : #25241f;" >
  <a class="navbar-brand" href="#">Intranet - CESI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" style="color : white"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="accueil">Accueil</a><span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Promo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="face">Trombinoscope</a>
        </div>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="event">Evènements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Messagerie instantanée</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cloud">Cloud numérique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notifications">Mes notifications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="deconnection()" href="">Déconnexion</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Panneau Administrateur
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
    </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <a href="./notifications.php" class="notification">
        <i class="fas fa-bell"></i>
        <span class="badge">12</span>&nbsp;&nbsp;
      </a>
    </ul>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user" style="color : white; "></i>
        <span style="color : white">Stéphane LAVARIE</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <!-- Administration des profils que pour les admins -->
          <a class="dropdown-item" href="adminProfil">Administration des profils</a>
          <a class="dropdown-item" href="adminPromos">Administration des promotions</a>
          <a class="dropdown-item" href="#">Déconnexion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>