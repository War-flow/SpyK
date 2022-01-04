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
            <form class="form" method="post" action="../DataManager/AdminManager.php">
                    <div class="center">
                        <h1>Création Administrateur</h1>
                    </div>
                       <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" class="text" required maxlength="255" placeholder="Votre Prénom">

                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" class="text" required maxlength="255" placeholder="Votre Nom">

                        <label for="email">Email</label>
                        <input type="email" name="email" class="text" required maxlength="255" placeholder="Votre Email">

                        <label for="password">Mot de Passe</label>
                        <input type="password" name="password" class="text" required maxlength="25" minlength="8" placeholder="Mot de Passe">

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Créer un Administrateur</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>