<?php
require_once __DIR__ . '/../../config/database.php';

class Actualite {
    public static function getAll() {
        $db = getDB();
        $stmt = $db->query("SELECT * FROM actualites ORDER BY date_publication DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM actualites WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function add($titre, $contenu, $image, $categorie, $date_publication) {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO actualites (titre, contenu, image, categorie, date_publication) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$titre, $contenu, $image, $categorie, $date_publication]);
    }

    public static function update($id, $titre, $contenu, $image, $categorie, $date_publication) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE actualites SET titre=?, contenu=?, image=?, categorie=?, date_publication=? WHERE id=?");
        $stmt->execute([$titre, $contenu, $image, $categorie, $date_publication, $id]);
    }

    public static function delete($id) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM actualites WHERE id=?");
        $stmt->execute([$id]);
    }
}