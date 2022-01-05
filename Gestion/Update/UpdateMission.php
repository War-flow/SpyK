<?php
session_start();

require_once '../../Log/Dsn.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {


  if (isset($_POST['submit']))
{
  
   $title =  htmlspecialchars($_POST['title']);
   $description = htmlspecialchars($_POST['description']);
   $codename = htmlspecialchars($_POST['codename']);
   $country = htmlspecialchars($_POST['country']);
   $agent = htmlspecialchars($_POST['agent']);
   $targets = htmlspecialchars($_POST['targets']);
   $contacts = htmlspecialchars($_POST['contacts']);
   $type = htmlspecialchars($_POST['type']);
   $status = htmlspecialchars($_POST['status']);
   $hide = htmlspecialchars($_POST['hide']);
   $startDate = htmlspecialchars($_POST['startDate']);
   $endDate = htmlspecialchars($_POST['endDate']);

  $getId = $_GET['id'];

  $recupData = $pdo->prepare("SELECT * FROM `missions` WHERE `id` = ? ");
  $recupData->execute(array($getId));
  if($recupData->rowCount() > 0) {

    $update = $pdo->prepare("UPDATE `missions` 
    SET `title`='$title',
    `description`=' $description',
    `codename`='$codename',
    `country`='$country',
    `agent`='$agent',
    `targets`='$targets',
    `contacts`='$contacts',
    `type`='$type ',
    `status`='$status',
    `hide`='$hide',
    `startDate`='$startDate',
    `endDate`='$endDate' WHERE `id` = ?  ");
    
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
                        <h1>Mise A jour Mission</h1>
                    </div>
                       <label for="title">Titre</label>
                        <input type="text" name="title" class="text"   maxlength="255">

                        <label for="description">Description</label>
                        <textarea name="description" class="text"  maxlength="1000"></textarea>

                        <label for="codename">Nom de code</label>
                        <input type="text" name="codename" class="text"  maxlength="255">

                        <label for="country">Pays</label>
                        <input type="text" name="country" class="text"  maxlength="25">

                        <label for="agent"> Code Agents</label>
                        <input type="number" name="agent" class="text"  maxlength="12" minlength="12">

                        <label for="targets">Cible</label>
                        <input type="text" name="targets" class="text"  maxlength="255">

                        <label for="contacts">Contacts</label>
                        <input type="text" name="contacts" class="text"  maxlength="255">

                        <label for="type">Type</label>
                        <input type="text" name="type" class="text"  maxlength="255">

                        <label for="status">Status</label>
                        <select class="text" name="status">
                          <option value="En Préparation">En Préparation</option>
                          <option value="En Cours">En Cours</option>
                          <option value="Terminé">Terminé</option>
                          <option value="Echec">Echec</option>
                        </select><br>

                        <label for="hide">Code Planque</label>
                        <input type="number" name="hide" class="text" maxlength="12" minlength="12">

                        <label for="startDate">Date de début</label>
                        <input type="date" name="startDate" class="text" >

                        <label for="endDate">Date de fin</label>
                        <input type="date" name="endDate" class="text">
                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Modifier</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
