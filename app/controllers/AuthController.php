<?php
require_once '../app/models/User.php';

class AuthController {
    public function login() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $user = User::authenticate($email, $password);
            if ($user) {
                session_start();
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'role' => $user['role']
                ];
                header('Location: /Concessionnaire/public/');
                exit;
            } else {
                $error = "Identifiants incorrects.";
            }
        }
        require '../app/views/login.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /Concessionnaire/public/');
        exit;
    }
}