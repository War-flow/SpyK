<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); {
    $users = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
    if ($users->exec('CREATE TABLE IF NOT EXISTS users ( 
              `id` VARCHAR(36) NOT NULL , 
              `email` VARCHAR(254) NOT NULL , 
              `password` CHAR(60) NOT NULL , 
              `firstname` VARCHAR(255) NOT NULL , 
              `lastname` VARCHAR(255) NOT NULL , 
              `birth` DATE NOT NULL , 
              `nation` VARCHAR(255) NOT NULL , 
              `special` VARCHAR(255) NOT NULL , 
              PRIMARY KEY (`id`), 
              UNIQUE (`email`))') !== false) { {
        echo 'Installation terminée !';
      }
    } else {
      echo 'Impossible de créer la table users <br>';
    }
  }
} catch (PDOException $exception) {
  file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
  die($exception->getMessage());
}
