
    // Simuler la connexion
    document.getElementById('login-btn').addEventListener('click', function() {
        document.getElementById('user-info').classList.remove('d-none'); // Affiche le nom d'utilisateur
        this.classList.add('d-none'); // Cache le bouton de connexion
        document.getElementById('register-btn').classList.add('d-none'); // Cache le bouton d'inscription
    });

    // Simuler la déconnexion
    document.getElementById('logout-btn').addEventListener('click', function() {
        document.getElementById('user-info').classList.add('d-none'); // Cache le nom d'utilisateur
        document.getElementById('login-btn').classList.remove('d-none'); // Affiche le bouton de connexion
        document.getElementById('register-btn').classList.remove('d-none'); // Affiche le bouton d'inscription
    });
