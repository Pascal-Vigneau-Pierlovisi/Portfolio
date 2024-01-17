<!-- Navbar -->
<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <!-- Utilisez votre logo ici -->
            <img src="/img/logo.png" alt="Logo" style="border-radius:50%"> <!-- Ajustez max-height si nécessaire -->
        </a>

        <!-- Burger icon for mobile -->
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <!-- Navbar items -->
            <a class="navbar-item" href="/">Home</a>
            <a class="navbar-item" href="/projects">Projects</a>
            <a class="navbar-item" href="/contact">Contact</a>
        </div>

        <div class="navbar-end">
            <!-- Github icon link -->
            <div class="navbar-item">
                <a class="navbar-item" href="https://github.com/Pascal-Vigneau-Pierlovisi?tab=repositories" target="_blank">
                    <span class="icon">
                        <i class="fab fa-github"></i>
                    </span>
                </a>
            </div>

            @if(session()->has('admin'))
            <a class="navbar-item" href="/admin/settings">
                <span class="icon">
                    <i class="fas fa-cog"></i>
                </span>
            </a>
            @endif

            <!-- Theme toggle button -->
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