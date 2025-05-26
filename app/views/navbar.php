<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/Concessionnaire/public/">AutoFictif</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link<?= $action == 'index' ? ' active' : '' ?>" href="/Concessionnaire/public/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $action == 'vehicules' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=vehicules">Véhicules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $action == 'services' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $action == 'contact' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $action == 'a-propos' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=a-propos">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $action == 'actualites' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=actualites">Actualités</a>
                </li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <span class="nav-link">Bonjour, <?= htmlspecialchars($_SESSION['user']['name']) ?> (<?= htmlspecialchars($_SESSION['user']['role']) ?>)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Concessionnaire/public/?action=logout">Déconnexion</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link<?= $action == 'login' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=login">Connexion</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link<?= $action == 'admin' ? ' active' : '' ?>" href="/Concessionnaire/public/?action=admin">Admin</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>