<?php
$confirmation = false;
$errors = [];
$nom = $email = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($nom === '') $errors[] = "Le nom est obligatoire.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
    if ($message === '') $errors[] = "Le message est obligatoire.";

    if (empty($errors)) {
        $confirmation = true;
        // Ici tu pourrais envoyer un mail ou enregistrer en base
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Contact - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <header class="bg-dark text-white py-5 text-center">
        <h1>Contactez-nous</h1>
        <p>Une question ? Un projet ? Écrivez-nous !</p>
    </header>

    <main class="container my-5" style="max-width:600px;">
        <?php if ($confirmation): ?>
            <div class="alert alert-success">Merci pour votre message, nous vous répondrons rapidement.</div>
        <?php elseif (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $err): ?>
                    <div><?= htmlspecialchars($err) ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required><?= htmlspecialchars($message) ?></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Envoyer</button>
        </form>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>