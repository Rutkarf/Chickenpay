<?php include 'includes/_head.php'; ?>
<?php include 'includes/_navbar.php'; ?>

<?php
require_once 'Database.php'; // Assurez-vous que ce chemin est correct

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenez les données du formulaire
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hachez le mot de passe
    $phoneNumber = $_POST['phoneNumber'];

    // Obtenez la connexion à la base de données
    $db = Database::getInstance()->getConnection();

    // Préparez et exécutez la requête SQL
    $stmt = $db->prepare("INSERT INTO users (full_name, email, password, phone_number) VALUES (?, ?, ?, ?)");

    // Exécutez la requête et vérifiez si l'insertion a réussi
    if ($stmt->execute([$fullName, $email, $password, $phoneNumber])) {
        echo "<div class='alert alert-success text-center'>Inscription réussie !</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Erreur : Impossible d'enregistrer l'utilisateur.</div>";
    }
}
?>

<div class="container mt-3 mb-3">
    <h2 class="text-center mb-2">Inscription</h2>
    <div class="row justify-content-center">
        <div class="card p-3 bg-transparent border-0 col-12 col-md-8 col-lg-6">
            <form method="post" action="">
                <div class="mb-2">
                    <label for="fullName" class="form-label">Nom complet</label>
                    <input type="text" class="form-control form-control-sm" id="fullName" name="fullName" placeholder="Entrez votre nom complet" required>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Choisissez un mot de passe" required>
                </div>
                <div class="mb-2">
                    <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control form-control-sm" id="confirmPassword" name="confirmPassword" placeholder="Confirmez votre mot de passe" required>
                </div>
                <div class="mb-2">
                    <label for="phoneNumber" class="form-label">Numéro de téléphone</label>
                    <input type="tel" class="form-control form-control-sm" id="phoneNumber" name="phoneNumber" placeholder="Entrez votre numéro de téléphone" required>
                </div>

                <!-- Boutons O2Auth et MetaConnect -->
                <div class="mb-3 d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-secondary btn-sm">O2Auth</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm">MetaConnect</button>
                </div>

                <!-- Bouton S'inscrire -->
                <button type="submit" class="btn btn-primary btn-sm w-100">S'inscrire</button>
            </form>

            <!-- Lien pour se connecter -->
            <div class="text-center mt-2">
                <a href="register.php">Déjà inscrit ? Connectez-vous ici.</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/_footer.php'; ?>