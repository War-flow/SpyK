<?php 
session_start();

require_once '../../Log/Dsn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

  $getId = $_GET['id'];

  $recupData = $pdo->prepare("SELECT * FROM `contacts` WHERE `id` = ? ");
  $recupData->execute(array($getId));
  if($recupData->rowCount() > 0) {

    $delete = $pdo->prepare("DELETE FROM `contacts` WHERE `id` = ? ");
    $delete->execute(array($getId));

    header('Location:../../index.php');

  } else {
    echo "Identifiant non trouvée dans la base de donnée";

  }

} else {
  echo "Erreur dans la récupération de l'indentifiant ";

} 
