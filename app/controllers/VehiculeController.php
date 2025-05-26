<?php
require_once '../app/models/Vehicule.php';

class VehiculeController {
    public function index() {
        $vehicules = Vehicule::getAll();
        require '../app/views/vehicules.php';
    }

    public function detail($id) {
        $vehicule = Vehicule::getById($id);
        require '../app/views/detail_vehicule.php';
    }
}