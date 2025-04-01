<?php
require_once 'app/controllers/AuthController.php';

$authController = new AuthController();

if ($_SERVER['REQUEST_URI'] === '/login' || $_SERVER['REQUEST_URI'] === '/login.php') {
    $authController->login();
} elseif ($_SERVER['REQUEST_URI'] === '/logout') {
    $authController->logout();
}
?>
