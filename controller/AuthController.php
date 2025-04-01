<?php
session_start();
require_once 'app/models/Utilisateur.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Utilisateur();
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            if (!empty($email) && !empty($password)) {
                $user = $this->userModel->getUserByEmail($email);

                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['nom'];
                    header("Location: dashboard.php"); // Redirige vers le tableau de bord
                    exit();
                } else {
                    $error = "Email ou mot de passe incorrect.";
                }
            } else {
                $error = "Tous les champs sont obligatoires.";
            }
        }
        require 'app/views/login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: login.php");
        exit();
    }
}
?>
