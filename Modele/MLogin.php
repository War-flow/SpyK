<?php
session_start();

require 'Dsn.php';


if (isset($_POST['submit'])) {

  $email = $_POST["email"];
  $password = $_POST["password"];



  $sql = "SELECT * FROM users WHERE email = '$email' ";
  $result = $pdo->prepare($sql);
  $result->execute();
  $base = $result->fetchAll();

  if (password_verify($password, $base[0]["password"])) {
    header("Location:../View/Home.php");
    $_SESSION['email'] = $email;
  } else

    header("Location:../View/Error.html");
}
