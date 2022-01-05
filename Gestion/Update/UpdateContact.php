<?php
session_start();

require_once '../../Log/Dsn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {


  if (isset($_POST['submit'])) {
    $firstname =  htmlspecialchars($_POST['firstname']);
    $lastname =  htmlspecialchars($_POST['lastname']);
    $birth =  htmlspecialchars($_POST['birth']);
    $codename =  htmlspecialchars($_POST['codename']);
    $nation =  htmlspecialchars($_POST['nation']);

    $getId = $_GET['id'];

    $recupData = $pdo->prepare("SELECT * FROM `contacts` WHERE `id` = ? ");
    $recupData->execute(array($getId));
    $rec = $recupData->fetch();
    if ($recupData->rowCount() > 0) {

      $update = $pdo->prepare("UPDATE `contacts` SET
      `firstname`='$firstname',
      `lastname`='$lastname',
      `birth`='$birth',
      `codeName`='$codename',
      `nation`='$nation'
      WHERE `id` = ?  ");

      $update->execute(array($getId));

      header('Location:../../index.php');
    } else {
      echo "Identifiant non trouvée dans la base de donnée";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base de donneé Missions</title>
  <link rel="stylesheet" href="../../CSS/Formulaire.css">
  <link rel="stylesheet" href="../../Bootstrap/bootstrap.min.css">
</head>

<body>
  <div class="box2">
    <div class="box">
      <form class="form" method="post">
        <div class="center">
          <h1>Modifier Contacts</h1>
        </div>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" class="text" maxlength="255" placeholder="Prénom">

        <label for="lastname">Nom</label>
        <input type="text" name="lastname" class="text"  maxlength="255" placeholder="Nom">

        <label for="birth">Date de naissance</label>
        <input type="date" name="birth" class="text" >

        <label for="codename">Nom de Code</label>
        <input type="text" name="codename" class="text"  maxlength="50" placeholder="Nom de Code">

        <label for="nation">Nationalité</label>
        <input type="text" name="nation" class="text"  maxlength="50" placeholder="Nationalité">

        <div class="center">
          <button type="submit" class="btn btn-info" name="submit">Modifier</button>
        </div>
      </form>
    </div>
  </div>
  <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>