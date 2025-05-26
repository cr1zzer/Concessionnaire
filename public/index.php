<?php
require_once '../config/config.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/VehiculeController.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/AdminController.php';

$controller = new HomeController();
$vehiculeController = new VehiculeController();
$authController = new AuthController();
$adminController = new AdminController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'vehicules':
        $vehiculeController->index();
        break;
    case 'services':
        require_once '../app/views/services.php';
        break;
    case 'contact':
        require_once '../app/views/contact.php';
        break;
    case 'detail_vehicule':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $vehiculeController->detail($id);
        break;
    case 'a-propos':
        require_once '../app/views/a-propos.php';
        break;
    case 'actualites':
        require_once '../app/views/actualites.php';
        break;
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'admin':
        $adminController->dashboard();
        break;
    case 'admin_vehicules':
    $adminController->vehicules();
    break;
    case 'admin_add_vehicule':
    $adminController->addVehicule();
    break;
    case 'admin_edit_vehicule':
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $adminController->editVehicule($id);
    break;
    case 'admin_delete_vehicule':
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $adminController->deleteVehicule($id);
    break;
    case 'admin_actualites':
        $adminController->actualites();
        break;
    case 'admin_add_actualite':
        $adminController->addActualite();
        break;
    case 'admin_edit_actualite':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $adminController->editActualite($id);
        break;
    case 'admin_delete_actualite':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $adminController->deleteActualite($id);
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>