<?php
require_once '../app/models/Vehicule.php';
$vehicules = Vehicule::getAll();
// Sélectionne les 3 premiers pour le carousel et les véhicules phares
$carouselVehicules = array_slice($vehicules, 0, 3);
?>
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Accueil - AutoFictif Concession"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Carousel dynamique -->
    <div id="carouselAutoFictif" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($carouselVehicules as $i => $v): ?>
                <div class="carousel-item<?= $i === 0 ? ' active' : '' ?>">
                    <img src="<?= htmlspecialchars($v['image']) ?>" class="d-block w-100 carousel-img" alt="<?= htmlspecialchars($v['nom']) ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= htmlspecialchars($v['nom']) ?></h5>
                        <p><?= htmlspecialchars($v['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoFictif" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoFictif" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Offres spéciales -->
    <div class="offre-speciale">
        <i class="bi bi-stars me-2"></i>
        Offre spéciale : Jusqu'à <strong>20% de remise</strong> sur les modèles 2024 ! <a href="/my-php-mvc-app/public/?action=vehicules" class="btn btn-light btn-sm ms-3">Voir les offres</a>
    </div>

    <!-- Section engagements -->
    <section class="container my-5">
        <h2 class="mb-4 text-center">Nos engagements</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="bi bi-shield-check engagement-icon"></i>
                <h5 class="mt-2">Garantie 24 mois</h5>
                <p>Sur tous nos véhicules d’occasion.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-cash-coin engagement-icon"></i>
                <h5 class="mt-2">Financement personnalisé</h5>
                <p>Des solutions adaptées à votre budget.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-tools engagement-icon"></i>
                <h5 class="mt-2">Atelier agréé</h5>
                <p>Entretien et réparation toutes marques.</p>
            </div>
        </div>
    </section>

    <!-- Véhicules phares dynamiques -->
    <section class="container my-5">
        <h2 class="mb-4 text-center">Nos véhicules phares</h2>
        <div class="row g-4 justify-content-center">
            <?php foreach ($carouselVehicules as $v): ?>
            <div class="col-md-4">
                <div class="card vehicle-card shadow-sm">
                    <img src="<?= htmlspecialchars($v['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($v['nom']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($v['nom']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($v['description']) ?></p>
                        <a href="/Concessionnaire/public/?action=detail_vehicule&id=<?= $v['id'] ?>" class="btn btn-outline-danger">En savoir plus</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>