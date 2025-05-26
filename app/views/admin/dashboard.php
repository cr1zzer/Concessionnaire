
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Tableau de bord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../app/views/navbar.php'; ?>
    <div class="container my-5">
        <h1>Tableau de bord administrateur</h1>
        <ul>
            <li><a href="/Concessionnaire/public/?action=admin_vehicules">Gestion des véhicules</a></li>
            
            <li><a href="/Concessionnaire/public/?action=admin_actualites">Gestion des actualités</a></li>
        </ul>
    </div>
</body>
</html>