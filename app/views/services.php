<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Services - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <header class="bg-dark text-white py-5 text-center">
        <h1>Nos Services</h1>
        <p>Des prestations sur-mesure pour votre véhicule</p>
    </header>

    <main class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Entretien & Réparation</h5>
                        <p class="card-text">Confiez-nous l’entretien et la réparation de votre véhicule dans notre atelier agréé.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Financement</h5>
                        <p class="card-text">Des solutions de financement adaptées à vos besoins pour l’achat de votre voiture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Assurance</h5>
                        <p class="card-text">Protégez votre véhicule avec nos offres d’assurance personnalisées.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>