<?php
session_start();

require 'Dsn.php';


if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');

$sql = "SELECT * FROM users WHERE email = '$email' ";
$result = $dsn->prepare($sql);
$result->execute();
$data = $result->fetchAll();

if (password_verify($password, $data[0]["password"])) 
    {
        header( "refresh:1;url=../Page/Home.php" );
        $_SESSION['email'] = $email;

    } else

    echo 'Erreur de co';
}
