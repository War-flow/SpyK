<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); {
    $admin = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
    if ($admin->exec('CREATE TABLE IF NOT EXISTS `admins` (
      `firstname` varchar(255) NOT NULL,
      `lastname` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      `password` varchar(60) NOT NULL,
      `creationdate` date NOT NULL DEFAULT current_timestamp(),
      PRIMARY KEY (`email`),
      UNIQUE KEY `email` (`email`))') !== false) { {      
      }
    } else {
      echo 'Impossible de créer la table users <br>';
    }
  }
} catch (PDOException $exception) {
  file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
  die($exception->getMessage());
}
