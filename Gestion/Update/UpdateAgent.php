<?php
session_start();

require_once '../../Log/Dsn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {


  if (isset($_POST['submit'])) {
    $codeId = htmlspecialchars($_POST['codeId']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $birth = htmlspecialchars($_POST['birth']);
    $nation = htmlspecialchars($_POST['nation']);
    $special = htmlspecialchars($_POST['special']);
    
    $getId = $_GET['id'];

    $recupData = $pdo->prepare("SELECT * FROM `agents` WHERE `id` = ? ");
    $recupData->execute(array($getId));
    if ($recupData->rowCount() > 0) {

      $update = $pdo->prepare("UPDATE `agents` SET 
      `codeId`='$codeId',
      `firstname`='$firstname',
      `lastname`='$lastname ',
      `birth`='$birth',
      `nation`='$nation ',
      `special`='$special'
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
                        <h1>Modifier Agents</h1>
                    </div>
                    <label for="codeId">Code identification</label>
                        <input type="number" name="codeId" class="text"  maxlength="12" minlength="12">

                       <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" class="text"  maxlength="255" placeholder="Votre Prénom">

                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" class="text"  maxlength="255" placeholder="Votre Nom">

                        <label for="birth">Date de naissance</label>
                        <input type="date" name="birth" class="text" >

                        <label for="nation">Nationalité</label>
                        <input type="text" name="nation" class="text"  maxlength="25"  placeholder="Nationalité">

                        <label for="special">Spécialité</label>
                        <textarea type="text" name="special" class="text"  maxlength="500"  placeholder="Les Spécialité"></textarea>

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Modifier</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>