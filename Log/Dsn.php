  <?php
  $hostname = 'uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
  $database = 'mahjmmdwa6sj72o9';
  $username = 'yy4kgsc6x14bh9ue';
  $password = 'hgvlup9dnifdcj2j';
  try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($pdo->exec('CREATE DATABASE IF NOT EXISTS mahjmmdwa6sj72o9') !== false) {
      $missionK = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
      if ($missionK->exec('CREATE TABLE IF NOT EXISTS `missions` (
                `id` int(12) NOT NULL AUTO_INCREMENT,
                `title` varchar(255) NOT NULL,
                `description` text NOT NULL,
                `codename` varchar(255) NOT NULL,
                `country` varchar(255) NOT NULL,
                `agent` int(12) NOT NULL,
                `targets` varchar(255) NOT NULL,
                `contacts` varchar(255) NOT NULL,
                `type` varchar(255) NOT NULL,
                `status` varchar(255) NOT NULL,
                `hide` varchar(255) NOT NULL,
                `startDate` date NOT NULL,
                `endDate` date NOT NULL,
                PRIMARY KEY (`id`),
                UNIQUE KEY `codename` (`codename`,`targets`),
                KEY `agent` (`agent`),
                KEY `target` (`targets`),
                KEY `contact` (`contacts`),
                KEY `countryM` (`country`),
                KEY `hide` (`hide`),
                KEY `type` (`type`))') !== false) {

        if ($missionK->exec('CREATE TABLE IF NOT EXISTS `agents` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `codeId` int(12) NOT NULL,
          `firstname` varchar(255) NOT NULL,
          `lastname` varchar(255) NOT NULL,
          `birth` date NOT NULL,
          `nation` varchar(25) NOT NULL,
          `special` varchar(500) NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `codeId` (`codeId`))') !== false) {

          if ($missionK->exec('CREATE TABLE IF NOT EXISTS `admins` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `firstname` varchar(255) NOT NULL,
          `lastname` varchar(255) NOT NULL,
          `email` varchar(255) NOT NULL,
          `password` varchar(60) NOT NULL,
          `creationdate` date DEFAULT current_timestamp(),
          PRIMARY KEY (`id`),
          UNIQUE KEY `email` (`email`))') !== false) {

            if ($missionK->exec('CREATE TABLE IF NOT EXISTS `contacts` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `firstname` varchar(255) NOT NULL,
            `lastname` varchar(255) NOT NULL,
            `birth` date NOT NULL,
            `codeName` varchar(25) NOT NULL,
            `nation` varchar(25) NOT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `codeName` (`codeName`))') !== false) {
              
              if ($missionK->exec('CREATE TABLE IF NOT EXISTS `target` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `firstname` varchar(255) NOT NULL,
                `lastname` varchar(255) NOT NULL,
                `birth` date NOT NULL,
                `codeName` varchar(25) NOT NULL,
                `nation` varchar(25) NOT NULL,
                PRIMARY KEY (`id`),
                UNIQUE KEY `codeName` (`codeName`))') !== false) {

                if ($missionK->exec('CREATE TABLE IF NOT EXISTS `hide` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `code` int(12) NOT NULL,
                    `address` varchar(350) NOT NULL,
                    `country` varchar(255) NOT NULL,
                    `type` varchar(255) NOT NULL,
                    PRIMARY KEY (`id`),
                    UNIQUE KEY `code` (`code`),
                    UNIQUE KEY `code_2` (`code`,`address`),
                    KEY `country` (`country`))') !== false) {
                  echo '';
                } else {
                  echo 'Impossible de créer la table Planque<br>';
                }
              } else {
                echo 'Impossible de créer la table Cible<br>';
              }
            } else {
              echo 'Impossible de créer la table Contacte<br>';
            }
          } else {
            echo 'Impossible de créer la table Admins<br>';
          }
        } else {
          echo 'Impossible de créer la table Agents<br>';
        }
      } else {
        echo 'Impossible de créer la table Missions<br>';
      }
    } else {
      echo 'Impossible de créer la base<br>';
    }
  } catch (PDOException $exception) {
    die($exception->getMessage());
  }
