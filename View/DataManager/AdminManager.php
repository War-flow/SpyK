<?php

require_once '../../Log/Dsn.php';

if (isset($_POST['submit'])) {
  $firstname = htmlspecialchars( $_POST['firstname']);
  $lastname =  htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars( $_POST['email']);
  $password = htmlspecialchars( $_POST['password']);

  $password = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO `admins`(`firstname`, `lastname`, `email`, `password`) 
   VALUES ('$firstname','$lastname','$email','$password')";
  $req = $pdo->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
