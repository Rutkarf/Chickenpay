<?php include 'includes/_head.php'; ?>
<?php include 'includes/_navbar.php'; ?>

<?php
require_once 'Database.php';

// Initialize message variable
$message = '';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get database connection
    $db = Database::getInstance()->getConnection();

    // Retrieve form data
    $usernameOrEmail = $_POST['usernameOrEmail'];
    $password = $_POST['password'];

    // Prepare SQL query to find user by email
    $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$usernameOrEmail]);
    $user = $stmt->fetch();

    // Check if user exists and password is correct
    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['full_name'] = $user['full_name'];
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        // Login failed
        $message = "Email or password is incorrect.";
    }
}
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Connexion</h2>
    <?php if ($message): ?>
        <div class="alert alert-danger"><?php echo $message; ?></div>
    <?php endif; ?>
    <div class="card p-4 mx-auto bg-transparent border-0 col-12 col-md-8 col-lg-6">
        <form method="post" action="">
            <div class="mb-3">
                <label for="usernameOrEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="usernameOrEmail" name="usernameOrEmail" placeholder="Entrez votre adresse e-mail" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
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