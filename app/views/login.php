<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Connexion - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>
    <main class="container my-5" style="max-width:400px;">
        <h2 class="mb-4 text-center">Connexion</h2>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-danger w-100">Se connecter</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>