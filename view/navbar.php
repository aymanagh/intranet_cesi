      <!DOCTYPE html>
      <html>

      <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Intranet - CESI</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Promo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="face.php">Trombinoscope</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.php">Evènements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Messagerie instantanée</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  NOM PRENOM UTILISATEUR
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <!-- Administration des profils que pour les admins -->
                  <a class="dropdown-item" href="admin_profil.php">Administration des profils</a>
                  <a class="dropdown-item" href="admin_promos.php">Administration des promotions</a>
                  <a class="dropdown-item" href="#">Déconnexion</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>