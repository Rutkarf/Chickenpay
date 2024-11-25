<?php include 'includes/_head.php'; ?>

<?php include 'includes/_navbar.php'; ?>



<div class="container mt-5">
    <h2 class="text-center mb-4">Connexion</h2>
    <div class="card p-4 mx-auto bg-transparent" style="max-width: 400px;">
        <form>
            <div class="mb-3">
                <label for="usernameOrEmail" class="form-label">@Mail ou Nom d'utilisateur</label>
                <input type="text" class="form-control" id="usernameOrEmail" placeholder="@Mail ou Nom d'utilisateur" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Mot de passe" required>
            </div>

            <!-- Boutons O2Auth et MetaConnect -->
            <div class="mb-3 d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary">O2Auth</button>
                <button type="button" class="btn btn-outline-secondary">MetaConnect</button>
            </div>

            <!-- Bouton Se connecter -->
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>

        <!-- Lien pour s'inscrire -->
        <div class="text-center mt-3">
            <a href="register.php">Pas encore inscrit ? Créez un compte ici.</a>
        </div>
    </div>
</div>





<?php include 'includes/_footer.php'; ?>