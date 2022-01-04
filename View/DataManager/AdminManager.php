<?php

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  try {
    $dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  } catch (PDOException $exception) {
    file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
    die($exception->getMessage());
  }

  $password = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO `admins`(`firstname`, `lastname`, `email`, `password`) 
   VALUES ('$firstname','$lastname','$email','$password')";
  $req = $dsn->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
