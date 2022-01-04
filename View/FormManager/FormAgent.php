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
            <form class="form" method="post" action="../DataManager/AgentManager.php">
                    <div class="center">
                        <h1>Création Agents</h1>
                    </div>
                    <label for="codeId">Code identification</label>
                        <input type="number" name="codeId" class="text" required maxlength="12" minlength="12">

                       <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" class="text" required maxlength="255" placeholder="Votre Prénom">

                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" class="text" required maxlength="255" placeholder="Votre Nom">

                        <label for="birth">Date de naissance</label>
                        <input type="date" name="birth" class="text" required>

                        <label for="nation">Nationalité</label>
                        <input type="text" name="nation" class="text" required maxlength="25"  placeholder="Nationalité">

                        <label for="special">Spécialité</label>
                        <textarea type="text" name="special" class="text" required maxlength="500"  placeholder="Les Spécialité"></textarea>

                        <div class="center">
                            <button type="submit" class="btn btn-info" name="submit">Créer un Agent</button>
                        </div>
            </form>
        </div>
    </div>
    <script src="../../Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>