<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Actualités - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <header class="bg-dark text-white py-5 text-center">
        <h1>Actualités & Blog</h1>
        <p>Les nouveautés, conseils et événements de la concession</p>
    </header>

    <main class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Nouveauté 2024">
                    <div class="card-body">
                        <h5 class="card-title">Nouveauté 2024 : Fictiva Sport</h5>
                        <p class="card-text">Découvrez notre nouveau modèle sportif, alliant performance et design moderne. Disponible à l’essai dès maintenant !</p>
                        <span class="badge bg-danger">Nouveauté</span>
                    </div>
                    <div class="card-footer text-muted">Publié le 15 mai 2025</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Conseil entretien">
                    <div class="card-body">
                        <h5 class="card-title">Conseil : Préparer votre voiture pour l’été</h5>
                        <p class="card-text">Nos experts vous donnent 5 astuces pour voyager sereinement cet été avec votre véhicule.</p>
                        <span class="badge bg-info text-dark">Conseil</span>
                    </div>
                    <div class="card-footer text-muted">Publié le 2 mai 2025</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1461632830798-3adb3034e4c8?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Portes ouvertes">
                    <div class="card-body">
                        <h5 class="card-title">Événement : Portes ouvertes</h5>
                        <p class="card-text">Venez découvrir toute la gamme AutoFictif lors de notre week-end portes ouvertes. Animations et offres spéciales au programme !</p>
                        <span class="badge bg-success">Événement</span>
                    </div>
                    <div class="card-footer text-muted">Publié le 20 avril 2025</div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>