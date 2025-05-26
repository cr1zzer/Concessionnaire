
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Gestion véhicules - Admin"; include '../app/views/head.php'; ?>
<body>
<?php include '../app/views/navbar.php'; ?>
<div class="container my-5">
    <h1 class="mb-4">Gestion des véhicules</h1>
    <a href="/Concessionnaire/public/?action=admin_add_vehicule" class="btn btn-success mb-3">Ajouter un véhicule</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Énergie</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($vehicules as $v): ?>
            <tr>
                <td><?= htmlspecialchars($v['nom']) ?></td>
                <td><?= htmlspecialchars($v['type']) ?></td>
                <td><?= htmlspecialchars($v['energie']) ?></td>
                <td><?= number_format($v['prix'], 0, ',', ' ') ?> €</td>
                <td>
                    <a href="/Concessionnaire/public/?action=admin_edit_vehicule&id=<?= $v['id'] ?>" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="/Concessionnaire/public/?action=admin_delete_vehicule&id=<?= $v['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ce véhicule ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include '../app/views/footer.php'; ?>
</body>
</html>