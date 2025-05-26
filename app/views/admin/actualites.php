
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = "Gestion des actualités - Admin"; include __DIR__ . '/../head.php'; ?>
<body>
<div class="container my-5">
    <h2>Gestion des actualités</h2>
    <a href="?action=admin_add_actualite" class="btn btn-success mb-3">Ajouter une actualité</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($actualites as $a): ?>
            <tr>
                <td><?= htmlspecialchars($a['titre']) ?></td>
                <td><?= htmlspecialchars($a['categorie']) ?></td>
                <td><?= htmlspecialchars($a['date_publication']) ?></td>
                <td>
                    <a href="?action=admin_edit_actualite&id=<?= $a['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="?action=admin_delete_actualite&id=<?= $a['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../footer.php'; ?>
</body>
</html>