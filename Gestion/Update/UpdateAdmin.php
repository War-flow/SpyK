<?php
session_start();

require_once '../../Log/Dsn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {


  if (isset($_POST['submit']))
{
  $firstname = htmlspecialchars( $_POST['firstname']);
  $lastname =  htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars( $_POST['email']);
  $password = htmlspecialchars( $_POST['password']);

  $getId = $_GET['id'];

  $recupData = $pdo->prepare("SELECT * FROM `admins` WHERE `id` = ? ");
  $recupData->execute(array($getId));
  if($recupData->rowCount() > 0) {

    $password = password_hash($password, PASSWORD_DEFAULT);
    $update = $pdo->prepare("UPDATE `admins` 
    SET `firstname`='$firstname',
    `lastname`='$lastname',
    `email`='$email ',
    `password`='$password'
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
    <title>Base de donneé Administrateur</title>
    <link rel="stylesheet" href="../../CSS/Formulaire.css">
    <link rel="stylesheet" href="../../Bootstrap/bootstrap.min.css"> 
</head>

<body>
    <div class="box2">
        <div class="box">
            <form class="form" method="post" >
                    <div class="center">
                        <h1>Modifier Administrateur</h1>
                    </div>
                       <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" class="text"  maxlength="255" placeholder="Votre Prénom">

                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" class="text"  maxlength="255" placeholder="Votre Nom">

                        <label for="email">Email</label>
                        <input type="email" name="email" class="text"  maxlength="255" placeholder="Votre Email">

                        <label for="password">Mot de Passe</label>
                        <input type="password" name="password" class="text"  maxlength="25" minlength="8" placeholder="Mot de Passe">

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Modifier</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
