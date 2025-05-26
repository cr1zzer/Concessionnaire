<?php
require_once __DIR__ . '/../../config/config.php';

class Vehicule
{
    public static function getAll()
    {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname=concessionnaire;charset=utf8', DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo->query('SELECT * FROM vehicules')->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getById($id)
    {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname=concessionnaire;charset=utf8', DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('SELECT * FROM vehicules WHERE id = ?');
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function add($nom, $type, $energie, $prix, $description, $image, $puissance, $boite, $places, $couleur)
    {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname=concessionnaire;charset=utf8', DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO vehicules (nom, type, energie, prix, description, image, puissance, boite, places, couleur) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $type, $energie, $prix, $description, $image, $puissance, $boite, $places, $couleur]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function update($id, $nom, $type, $energie, $prix, $description, $image, $puissance, $boite, $places, $couleur)
    {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname=concessionnaire;charset=utf8', DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('UPDATE vehicules SET nom=?, type=?, energie=?, prix=?, description=?, image=?, puissance=?, boite=?, places=?, couleur=? WHERE id=?');
            $stmt->execute([$nom, $type, $energie, $prix, $description, $image, $puissance, $boite, $places, $couleur, $id]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function delete($id)
    {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname=concessionnaire;charset=utf8', DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('DELETE FROM vehicules WHERE id=?');
            $stmt->execute([$id]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}