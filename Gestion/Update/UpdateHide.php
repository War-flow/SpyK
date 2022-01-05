<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');

if (isset($_GET['id']) && !empty($_GET['id'])) {


  if (isset($_POST['submit']))
{
  $code = $_POST['code'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $type = $_POST['type'];


  $getId = $_GET['id'];

  $recupData = $pdo->prepare("SELECT * FROM `hide` WHERE `id` = ? ");
  $recupData->execute(array($getId));
  if($recupData->rowCount() > 0) {

    $update = $pdo->prepare("UPDATE `hide` SET 
    `code`='$code',
    `address`='$address',
    `country`='$country',
    `type`='$type'
    WHERE `id` = ? ");
    
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
                        <h1>Création Planque</h1>
                    </div>
                    <label for="code">Code Planque</label>
                        <input type="number" name="code" class="text"  maxlength="12">

                        <label for="address">Adresse</label>
                        <input type="text" name="address" class="text"  maxlength="300" placeholder="Adresse">

                        <label for="country">Pays</label>
                        <input type="text" name="country" class="text"  maxlength="25">

                        <label for="type">Type</label>
                        <input type="text" name="type" class="text"  maxlength="255" placeholder="Type de Structure" >

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Créer une Planque</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>