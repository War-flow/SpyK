<?php 
session_start();

if (isset($_SESSION['email'])) {

  header( "Location:../View/Home.php" );
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/Formulaire.css">
  <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
  <title>Insciption KGB</title>
</head>

<body>
  <div class="box2">
    <div class="box">
      <form class="form" method="post" action="../Modele/MRegistra.php">

        <div class="center">
          <h1>Inscription</h1>
        </div>
        <div>

          <label for="mail">Votre adresse Email</label>
          <input type="email" name="email" id="mail" placeholder="Votre Email.." maxlength="255" required autofocus>

          <label for="password">Votre Mot de passe</label>
          <input type="password" name="password" id="password" placeholder="Votre mot de passe.." maxlength="15" minlength="10" required>
        
          <label for="firstname">Votre Prénom</label>
          <input type="text" name="firstname" id="firstname" placeholder="Votre Prénom.." maxlength="255" required>

          <label for="lastname">Votre Nom</label>
          <input type="text" name="lastname" id="lastname" placeholder="Votre Nom.."maxlength="255" required>

          <label for="birth">Votre Date de naissance</label>
          <input type="date" name="birth" id="birth" placeholder="Votre Date de naissance.." max="1995-12-31" required>

          <label for="nation">Votre Nationalité</label>
          <select id="nation" name="nation">
            <option value="Russe">Russe</option>
            <option value="Serbe">Serbe</option>
            <option value="Ukrainian">Ukrainian</option>
          </select><br>

          <div class="center">
          <label for="special" class="sp">Vos Spécialités :</label>
          <textarea name="special" rows="2" cols="50" placeholder="Decrisption des Spécialité.." maxlength="255" required></textarea>
         </div>
         
        </div>
        <div class="center">
        <button type="button submit" class="btn btn-info" value="Inscription" id="button " name="submit">S’INSCRIRE</button>
        </div>
        <div class="center">
          <a class="survol" href="Login.php">Connexion</a>
        </div>
      </form>
    </div>
  </div>
  <script src="../Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>