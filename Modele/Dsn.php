<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); {
    $users = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
    if ($users->exec('CREATE TABLE IF NOT EXISTS `agents` (
      `email` varchar(255) NOT NULL,
      `codeId` int(12) NOT NULL,
      `firstname` varchar(255) NOT NULL,
      `lastname` varchar(255) NOT NULL,
      `birth` date NOT NULL,
      `nation` varchar(255) NOT NULL,
      `special` mediumtext NOT NULL,
      PRIMARY KEY (`codeId`),
      UNIQUE KEY `email` (`email`),
      UNIQUE KEY `codeId` (`codeId`)) ') !== false) { {
                
      }
    } else {
      echo 'Impossible de créer la table users <br>';
    }
  }
} catch (PDOException $exception) {
  file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
  die($exception->getMessage());
}
