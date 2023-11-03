  <!-- Navbar -->
  <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
          <a class="navbar-item" href="/">
              <!-- Remplacez 'path/to/your/logo.png' par le chemin d'accès réel de votre fichier de logo -->
              <img style="border-radius:50%" src="/img/logo.png" alt="Logo" width="28" height="28"> <!-- Ajustez les dimensions selon la taille de votre logo -->
          </a>

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
          </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
              <a class="navbar-item">
                  Home
              </a>

              <a class="navbar-item">
                  Projects
              </a>

              <a class="navbar-item">
                  Contact
              </a>
          </div>

          <div class="navbar-end">
              <div class="navbar-item">
                  <button class="button is-dark" id="theme-toggle">
                      <span class="icon">
                          <i class="fas fa-moon"></i>
                      </span>
                      <span>Dark Theme</span>
                  </button>
              </div>
          </div>
      </div>
  </nav>