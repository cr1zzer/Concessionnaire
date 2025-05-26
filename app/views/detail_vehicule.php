<?php
require_once '../app/models/Vehicule.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$vehicule = Vehicule::getById($id);

// Gestion du formulaire d'essai
$essai_confirmation = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['demande_essai'])) {
    $essai_confirmation = true;
}
?>
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Détails Véhicules - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb" class="bg-light py-2">
      <ol class="breadcrumb container mb-0">
        <li class="breadcrumb-item"><a href="/Concessionnaire/public/">Accueil</a></li>
        <li class="breadcrumb-item"><a href="/Concessionnaire/public/?action=vehicules">Véhicules</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($vehicule['nom']) ?></li>
      </ol>
    </nav>

    <main class="container my-5">
        <?php if ($vehicule): ?>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= htmlspecialchars($vehicule['image']) ?>" class="img-fluid rounded shadow" alt="<?= htmlspecialchars($vehicule['nom']) ?>">
                </div>
                <div class="col-md-6">
                    <h2><?= htmlspecialchars($vehicule['nom']) ?></h2>
                    <span class="badge bg-secondary"><?= htmlspecialchars($vehicule['type']) ?></span>
                    <span class="badge bg-info text-dark"><?= htmlspecialchars($vehicule['energie']) ?></span>
                    <span class="badge bg-success"><?= number_format($vehicule['prix'], 0, ',', ' ') ?> €</span>
                    <p class="mt-3"><?= htmlspecialchars($vehicule['description']) ?></p>
                    <h5 class="mt-4">Fiche technique</h5>
                    <ul class="list-group mb-4">
                        <li class="list-group-item d-flex justify-content-between"><span>Puissance</span><span><?= htmlspecialchars($vehicule['puissance']) ?></span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Boîte</span><span><?= htmlspecialchars($vehicule['boite']) ?></span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Places</span><span><?= htmlspecialchars($vehicule['places']) ?></span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Couleur</span><span><?= htmlspecialchars($vehicule['couleur']) ?></span></li>
                    </ul>

                    <!-- Formulaire de demande d'essai -->
                    <?php if ($essai_confirmation): ?>
                        <div class="alert alert-success">Votre demande d'essai a bien été envoyée ! Nous vous contacterons rapidement.</div>
                    <?php endif; ?>
                    <form method="post" class="border rounded p-3 mb-3">
                        <h6 class="mb-3">Demander un essai</h6>
                        <div class="mb-2">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Téléphone</label>
                            <input type="text" class="form-control" name="telephone">
                        </div>
                        <button type="submit" name="demande_essai" class="btn btn-danger">Envoyer la demande</button>
                    </form>
                    <!-- Fin formulaire -->
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger">Véhicule introuvable.</div>
        <?php endif; ?>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2025 AutoFictif Concession. Site fictif à usage pédagogique.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>