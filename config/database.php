<?php
function getDB() {
    static $db = null;
    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=concessionnaire;charset=utf8mb4', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
    return $db;
}