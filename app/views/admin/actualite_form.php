<?php include __DIR__ . '/../head.php'; ?>
<div class="container my-5">
    <h2><?= isset($actualite) ? 'Modifier' : 'Ajouter' ?> une actualité</h2>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" value="<?= $actualite['titre'] ?? '' ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contenu</label>
            <textarea name="contenu" class="form-control" rows="5" required><?= $actualite['contenu'] ?? '' ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image (URL)</label>
            <input type="text" name="image" class="form-control" value="<?= $actualite['image'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <input type="text" name="categorie" class="form-control" value="<?= $actualite['categorie'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de publication</label>
            <input type="date" name="date_publication" class="form-control" value="<?= $actualite['date_publication'] ?? date('Y-m-d') ?>">
        </div>
        <button type="submit" class="btn btn-primary"><?= isset($actualite) ? 'Enregistrer' : 'Ajouter' ?></button>
        <a href="?action=admin_actualites" class="btn btn-secondary">Retour</a>
    </form>
</div>
<?php include __DIR__ . '/../footer.php'; ?>