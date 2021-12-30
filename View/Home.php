<?php 

session_start();

require_once 'Header/Hearde.html';

if (isset($_SESSION['email'])) {

  header( "Location:HomeAd.php" );
} else {
  echo 'Accueil Agent';
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
    foreach ($pdo->query('SELECT * FROM missions', PDO::FETCH_ASSOC) as $user) {
      echo $user['title'].' : '.$user['description'].'<br>';
    }
  } catch (PDOException $e) {
    echo 'Impossible de récupérer la liste des missions';
  }
  

} ?>

<a href="Detail.php">Détail</a>