<?php
session_start();

require 'Dsn.php';


if (isset($_POST['submit'])) {

$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);

$pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');


$sql = "SELECT * FROM users WHERE email = '$email' ";
$result = $pdo->prepare($sql);
$result->execute();
$base = $result->fetchAll();

if (password_verify($password, $base[0]["password"])) 
    {
        header( "Location:../Page/Home.php" );
        $_SESSION['email'] = $email; 

} else

    echo 'Erreur de co';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
