<?php
session_start();
require_once 'Dsn.php';


if (isset($_POST['submit'])) {

  $email =  htmlspecialchars($_POST["email"]);
  $password =  htmlspecialchars($_POST["password"]);



  $sql = "SELECT * FROM admins WHERE email = '$email' ";
  $result = $pdo->prepare($sql);
  $result->execute();
  $data = $result->fetchAll();

  if (password_verify($password, $data[0]["password"])) {
    header("Location:../View/HomeAd.php");
    $_SESSION['email'] = $email;
  } else
  
    header("Location:../View/Error.html");
}