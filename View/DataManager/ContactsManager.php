<?php 

require_once '../../Log/Dsn.php';

if (isset($_POST['submit'])) {
  $firstname =  htmlspecialchars($_POST['firstname']);
  $lastname =  htmlspecialchars($_POST['lastname']);
  $birth =  htmlspecialchars($_POST['birth']);
  $codename =  htmlspecialchars($_POST['codename']);
  $nation =  htmlspecialchars($_POST['nation']);


  $sql = "INSERT INTO `contacts`(`firstname`, `lastname`, `birth`, `codeName`, `nation`) 
  VALUES ('$firstname','$lastname','$birth ','$codename','$nation')";
  $req = $pdo->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
