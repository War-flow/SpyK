<?php
try {
    $pdo = new PDO('mysql:host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($pdo->exec('DROP DATABASE IF EXISTS realEstate') !== false) {
        if ($pdo->exec('CREATE DATABASE realEstate') !== false) {
            $realEstate = new PDO('mysql:dbname=realEstate;host=localhost', 'root', '');
            if ($realEstate->exec('CREATE TABLE realEstates (
   id INT(11) PRIMARY KEY AUTO_INCREMENT,
   address VARCHAR(500),
   price FLOAT(20,2)
)') !== false) {
            if ($realEstate->exec('CREATE TABLE rooms (
   id INT(11) PRIMARY KEY AUTO_INCREMENT,
   realEstateId INT(11),
   name VARCHAR(100),
   surface FLOAT(20,2),
   FOREIGN KEY (realEstateId) REFERENCES realEstates(id)
)') !== false) {
                    echo 'Installation terminée !';
                } else {
                    echo 'Impossible de créer la table rooms<br>';
                }
            } else {
                echo 'Impossible de créer la table realEstates<br>';
            }
        } else {
            echo 'Impossible de créer la base<br>';
        }
    } else {
        echo 'Impossible de supprimer la base<br>';
    }
} catch (PDOException $exception){
    die($exception->getMessage());
}
