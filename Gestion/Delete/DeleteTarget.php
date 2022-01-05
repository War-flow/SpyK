<?php 
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');

if (isset($_GET['id']) && !empty($_GET['id'])) {

  $getId = $_GET['id'];

  $recupData = $pdo->prepare("SELECT * FROM `target` WHERE `id` = ? ");
  $recupData->execute(array($getId));
  if($recupData->rowCount() > 0) {

    $delete = $pdo->prepare("DELETE FROM `target` WHERE `id` = ? ");
    $delete->execute(array($getId));

    header('Location:../../index.php');

  } else {
    echo "Identifiant non trouvée dans la base de donnée";

  }

} else {
  echo "Erreur dans la récupération de l'indentifiant ";

} 
