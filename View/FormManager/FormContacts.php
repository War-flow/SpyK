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
            <form class="form" method="post" action="../DataManager/ContactsManager.php">
                    <div class="center">
                        <h1>Création Contacts</h1>
                    </div>
                       <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" class="text" required maxlength="255" placeholder="Prénom">

                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" class="text" required maxlength="255" placeholder="Nom">

                        <label for="birth">Date de naissance</label>
                        <input type="date" name="birth" class="text" max="2000-01-01"  min="1965-01-01" required>

                        <label for="codename">Nom de Code</label>
                        <input type="text" name="codename" class="text" required maxlength="50"  placeholder="Nom de Code">

                        <label for="nation">Nationalité</label>
                        <input type="text" name="nation" class="text" required maxlength="50"  placeholder="Nationalité">

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Créer un Contacts</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>