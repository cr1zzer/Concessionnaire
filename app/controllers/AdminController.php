<?php

require_once '../app/models/Vehicule.php';
require_once '../app/models/Actualite.php';

class AdminController {
    private function checkAdmin() {
        session_start();
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            http_response_code(403);
            echo "Accès interdit";
            exit;
        }
    }

    public function dashboard() {
        $this->checkAdmin();
        require '../app/views/admin/dashboard.php';
    }

    public function vehicules() {
        $this->checkAdmin();
        $vehicules = Vehicule::getAll();
        require '../app/views/admin/vehicules.php';
    }

    public function addVehicule() {
        $this->checkAdmin();
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'] ?? '';
            $type = $_POST['type'] ?? '';
            $energie = $_POST['energie'] ?? '';
            $prix = $_POST['prix'] ?? 0;
            $description = $_POST['description'] ?? '';
            $image = $_POST['image'] ?? '';
            $puissance = $_POST['puissance'] ?? '';
            $boite = $_POST['boite'] ?? '';
            $places = $_POST['places'] ?? 0;
            $couleur = $_POST['couleur'] ?? '';
            if ($nom && $type && $energie && $prix && $image) {
                Vehicule::add($nom, $type, $energie, $prix, $description, $image, $puissance, $boite, $places, $couleur);
                header('Location: /Concessionnaire/public/?action=admin_vehicules');
                exit;
            } else {
                $error = "Tous les champs obligatoires doivent être remplis.";
            }
        }
        require '../app/views/admin/vehicule_form.php';
    }

    public function editVehicule($id) {
        $this->checkAdmin();
        $vehicule = Vehicule::getById($id);
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'] ?? '';
            $type = $_POST['type'] ?? '';
            $energie = $_POST['energie'] ?? '';
            $prix = $_POST['prix'] ?? 0;
            $description = $_POST['description'] ?? '';
            $image = $_POST['image'] ?? '';
            $puissance = $_POST['puissance'] ?? '';
            $boite = $_POST['boite'] ?? '';
            $places = $_POST['places'] ?? 0;
            $couleur = $_POST['couleur'] ?? '';
            if ($nom && $type && $energie && $prix && $image) {
                Vehicule::update($id, $nom, $type, $energie, $prix, $description, $image, $puissance, $boite, $places, $couleur);
                header('Location: /Concessionnaire/public/?action=admin_vehicules');
                exit;
            } else {
                $error = "Tous les champs obligatoires doivent être remplis.";
            }
        }
        require '../app/views/admin/vehicule_form.php';
    }

    public function deleteVehicule($id) {
        $this->checkAdmin();
        Vehicule::delete($id);
        header('Location: /Concessionnaire/public/?action=admin_vehicules');
        exit;
    }

    public function actualites() {
        $this->checkAdmin();
        $actualites = Actualite::getAll();
        require '../app/views/admin/actualites.php';
    }

    public function addActualite() {
        $this->checkAdmin();
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titre = $_POST['titre'] ?? '';
            $contenu = $_POST['contenu'] ?? '';
            $image = $_POST['image'] ?? '';
            $categorie = $_POST['categorie'] ?? '';
            $date_publication = $_POST['date_publication'] ?? date('Y-m-d');
            if ($titre && $contenu) {
                Actualite::add($titre, $contenu, $image, $categorie, $date_publication);
                header('Location: /Concessionnaire/public/?action=admin_actualites');
                exit;
            } else {
                $error = "Titre et contenu obligatoires.";
            }
        }
        require '../app/views/admin/actualite_form.php';
    }

    public function editActualite($id) {
        $this->checkAdmin();
        $actualite = Actualite::getById($id);
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titre = $_POST['titre'] ?? '';
            $contenu = $_POST['contenu'] ?? '';
            $image = $_POST['image'] ?? '';
            $categorie = $_POST['categorie'] ?? '';
            $date_publication = $_POST['date_publication'] ?? date('Y-m-d');
            if ($titre && $contenu) {
                Actualite::update($id, $titre, $contenu, $image, $categorie, $date_publication);
                header('Location: /Concessionnaire/public/?action=admin_actualites');
                exit;
            } else {
                $error = "Titre et contenu obligatoires.";
            }
        }
        require '../app/views/admin/actualite_form.php';
    }

    public function deleteActualite($id) {
        $this->checkAdmin();
        Actualite::delete($id);
        header('Location: /Concessionnaire/public/?action=admin_actualites');
        exit;
    }
}