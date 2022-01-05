<?php 

require_once '../../Log/Dsn.php';

if (isset($_POST['submit'])) {
  $codeId = htmlspecialchars($_POST['codeId']);
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $birth = htmlspecialchars($_POST['birth']);
  $nation = htmlspecialchars($_POST['nation']);
  $special = htmlspecialchars($_POST['special']);


  $sql = "INSERT INTO `agents`(`codeId`, `firstname`, `lastname`, `birth`, `nation`, `special`) 
  VALUES ('$codeId','$firstname','$lastname','$birth','$nation ','$special')";
  $req = $pdo->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
