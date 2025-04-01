<?php
class Facture {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function ajouterFacture($copies_saisie, $copies_photocopie, $copies_impression, $format, $accessoires, $total) {
        $sql = "INSERT INTO factures (copies_saisie, copies_photocopie, copies_impression, format, accessoires, total) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$copies_saisie, $copies_photocopie, $copies_impression, $format, $accessoires, $total]);
    }
    
    public function obtenirFactures() {
        $sql = "SELECT * FROM factures ORDER BY date_creation DESC";
        return $this->db->query($sql)->fetchAll();
    }
}
?>