<?php
require_once 'config/Database.php';

class Utilisateur {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance();
    }

    public function getUserByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
}
?>
