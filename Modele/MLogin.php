<?php
session_start();
require 'Dsn.php';


if (isset($_POST['submit'])) {

  $email = $_POST["email"];
  $password = $_POST["password"];



  $sql = "SELECT * FROM agents WHERE email = '$email' ";
  $result = $pdo->prepare($sql);
  $result->execute();
  $data = $result->fetchAll();

  if ($password === $data[0]["codeId"]) {
    header("Location:../View/Home.php");
    $_SESSION['email'] = $email;
  } else
  
    header("Location:../View/Error.html");
}
