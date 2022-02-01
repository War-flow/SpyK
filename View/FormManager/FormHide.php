<?php require_once '../Header/Ad.html'; ?>
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
            <form class="form" method="post" action="../DataManager/HideManager.php">
                    <div class="center">
                        <h1>Création Planque</h1>
                    </div>
                    <label for="code">Code Planque</label>
                        <input type="number" name="code" class="text" required maxlength="12" minlength="2">

                        <label for="address">Adresse</label>
                        <input type="text" name="address" class="text" required maxlength="350" placeholder="Adresse">

                        <label for="country">Pays</label>
                        <input type="text" name="country" class="text" required maxlength="25">

                        <label for="type">Type</label>
                        <input type="text" name="type" class="text" required maxlength="255" placeholder="Type de Structure" >

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Créer une Planque</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>