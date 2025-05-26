
<!DOCTYPE html>
<html lang="fr">
<?php $pageTitle = isset($vehicule) ? "Modifier véhicule" : "Ajouter véhicule"; include '../app/views/head.php'; ?>
<body>
<?php include '../app/views/navbar.php'; ?>
<div class="container my-5">
    <h1><?= isset($vehicule) ? "Modifier" : "Ajouter" ?> un véhicule</h1>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3"><label>Nom*</label><input type="text" name="nom" class="form-control" value="<?= $vehicule['nom'] ?? '' ?>" required></div>
        <div class="mb-3"><label>Type*</label><input type="text" name="type" class="form-control" value="<?= $vehicule['type'] ?? '' ?>" required></div>
        <div class="mb-3"><label>Énergie*</label><input type="text" name="energie" class="form-control" value="<?= $vehicule['energie'] ?? '' ?>" required></div>
        <div class="mb-3"><label>Prix*</label><input type="number" name="prix" class="form-control" value="<?= $vehicule['prix'] ?? '' ?>" required></div>
        <div class="mb-3"><label>Description</label><textarea name="description" class="form-control"><?= $vehicule['description'] ?? '' ?></textarea></div>
        <div class="mb-3"><label>Image (URL)*</label><input type="text" name="image" class="form-control" value="<?= $vehicule['image'] ?? '' ?>" required></div>
        <div class="mb-3"><label>Puissance</label><input type="text" name="puissance" class="form-control" value="<?= $vehicule['puissance'] ?? '' ?>"></div>
        <div class="mb-3"><label>Boîte</label><input type="text" name="boite" class="form-control" value="<?= $vehicule['boite'] ?? '' ?>"></div>
        <div class="mb-3"><label>Places</label><input type="number" name="places" class="form-control" value="<?= $vehicule['places'] ?? '' ?>"></div>
        <div class="mb-3"><label>Couleur</label><input type="text" name="couleur" class="form-control" value="<?= $vehicule['couleur'] ?? '' ?>"></div>
        <button type="submit" class="btn btn-danger"><?= isset($vehicule) ? "Enregistrer" : "Ajouter" ?></button>
        <a href="/Concessionnaire/public/?action=admin_vehicules" class="btn btn-secondary">Annuler</a>
    </form>
</div>
<?php include '../app/views/footer.php'; ?>
</body>
</html>