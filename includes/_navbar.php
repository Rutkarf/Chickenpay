
        <!-- Boutons de connexion et d'inscription à gauche -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Boutons de connexion et d'inscription à gauche -->
        <div class="d-flex align-items-center mx-4">
            <a href="connexion.php" class="btn btn-link">Connexion</a>
            <a href="register.php" class="btn btn-link">Inscription</a>
            <div id="user-info" class="d-none flex-column align-items-center ms-3">
                <span id="username">Nom d'utilisateur</span>
                <a href="AccountManagement.php" class="text-decoration-none text-dark d-flex flex-column align-items-center">
                    <span>1000$</span>
                    <i class="fas fa-wallet fa-2x"></i>
                </a>
            </div>
        </div>


        <!-- Trois icônes au milieu -->
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center mx-4">
                <a href="profil.php" class="text-decoration-none text-dark d-flex flex-column align-items-center">
                    <i class="fas fa-user fa-2x"></i> <!-- Taille de l'icône ajustée avec fa-2x -->
                    <span>Profil</span>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center mx-4">
                <a href="security.php" class="text-decoration-none text-dark d-flex flex-column align-items-center">
                    <i class="fas fa-shield-alt fa-2x"></i> <!-- Taille de l'icône ajustée avec fa-2x -->
                    <span>Sécurité</span>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center mx-4">
                <a href="support.php" class="text-decoration-none text-dark d-flex flex-column align-items-center">
                    <i class="fas fa-question-circle fa-2x"></i> <!-- Taille de l'icône ajustée avec fa-2x -->
                    <span>Support</span>
                </a>
            </div>
        </div>




        <!-- Deux icônes à droite -->
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column align-items-center mx-4">
                <button id="light-mode-toggle" class="btn btn-link">
                    <i class="fas fa-sun"></i>
                    Light Mode
                </button>
            </div>
            <div class="d-flex flex-column align-items-center mx-4">
                <button id="dark-mode-toggle" class="btn btn-link">
                    <i class="fas fa-moon"></i>
                    Dark Mode
                </button>
            </div>
        </div>
    </div>
</nav>