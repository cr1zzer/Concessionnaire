<?php
require_once '../app/models/Vehicule.php';
$vehicules = Vehicule::getAll();
?>

<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Véhicules - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <header class="bg-dark text-white py-5 text-center">
        <h1>Nos Véhicules</h1>
        <p>Découvrez toute notre gamme de véhicules neufs et d'occasion</p>
    </header>

    <!-- Filtre de navigation -->
    <nav aria-label="breadcrumb" class="bg-light py-2">
      <ol class="breadcrumb container mb-0">
        <li class="breadcrumb-item"><a href="/Concessionnaire/public/">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Véhicules</li>
      </ol>
    </nav>

    <!-- Filtres simulés -->
    <section class="container my-4">
        <form class="row g-3 justify-content-center">
            <div class="col-md-3">
                <select class="form-select">
                    <option selected>Type</option>
                    <option>Sport</option>
                    <option>SUV</option>
                    <option>Citadine</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected>Énergie</option>
                    <option>Essence</option>
                    <option>Diesel</option>
                    <option>Hybride</option>
                    <option>Électrique</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected>Prix</option>
                    <option>Moins de 20 000 €</option>
                    <option>20 000 € - 30 000 €</option>
                    <option>Plus de 30 000 €</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger w-100">Filtrer</button>
            </div>
        </form>
    </section>

    <main class="container my-5">
        <div class="row g-4">
            <?php foreach($vehicules as $v): ?>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="<?= htmlspecialchars($v['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($v['nom']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($v['nom']) ?></h5>
                        <span class="badge bg-secondary"><?= htmlspecialchars($v['type']) ?></span>
                        <span class="badge bg-info text-dark"><?= htmlspecialchars($v['energie']) ?></span>
                        <span class="badge bg-success"><?= number_format($v['prix'], 0, ',', ' ') ?> €</span>
                        <p class="card-text mt-2"><?= htmlspecialchars($v['description']) ?></p>
                        <a href="/Concessionnaire/public/?action=detail_vehicule&id=<?= $v['id'] ?>" class="btn btn-outline-danger">Détails</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>