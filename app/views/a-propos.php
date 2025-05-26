<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "A propos - AutoFictif"; include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>

    <header class="bg-dark text-white py-5 text-center">
        <h1>À propos de notre concession</h1>
        <p>Notre histoire, nos valeurs et notre équipe</p>
    </header>

    <main class="container my-5">
        <section class="mb-5">
            <h2>Notre histoire</h2>
            <p>
                Fondée en 2020, AutoFictif est une concession automobile indépendante située au cœur de votre région. 
                Notre mission : vous accompagner dans l’achat, l’entretien et le financement de votre véhicule, avec passion et professionnalisme.
            </p>
        </section>

        <section class="mb-5">
            <h2>Nos valeurs</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-emoji-smile display-4 text-danger"></i>
                    <h5 class="mt-2">Satisfaction client</h5>
                    <p>Votre confiance est notre priorité, nous mettons tout en œuvre pour vous satisfaire.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-award display-4 text-danger"></i>
                    <h5 class="mt-2">Qualité</h5>
                    <p>Des véhicules rigoureusement sélectionnés et un service après-vente irréprochable.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people display-4 text-danger"></i>
                    <h5 class="mt-2">Proximité</h5>
                    <p>Une équipe à taille humaine, proche de ses clients et à l’écoute de vos besoins.</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Notre équipe</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top" alt="Jean Dupont">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Jean Dupont</h5>
                            <p class="text-muted mb-1">Directeur</p>
                            <p class="card-text">20 ans d’expérience dans l’automobile, passionné par la relation client.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top" alt="Sophie Martin">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Sophie Martin</h5>
                            <p class="text-muted mb-1">Conseillère commerciale</p>
                            <p class="card-text">À votre écoute pour trouver le véhicule qui vous correspond.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://randomuser.me/api/portraits/men/54.jpg" class="card-img-top" alt="Lucas Bernard">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Lucas Bernard</h5>
                            <p class="text-muted mb-1">Responsable atelier</p>
                            <p class="card-text">Expert technique, il veille à la qualité de chaque intervention.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>