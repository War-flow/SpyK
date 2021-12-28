<?php
session_start();

require 'Dsn.php';


if (isset($_POST['submit'])) {

    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $birth = $_POST['birth'];
    $nation = $_POST['nation'];
    $special = test_input($_POST["special"]);

    $pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');

    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (id, email, password, firstname, lastname, birth, nation, special) 
        VALUES (UUID(), '$email', '$password', '$firstname', '$lastname', '$birth', '$nation ', '$special')";
    $req = $pdo->prepare($sql);
    $req->execute();
    header("refresh:1;url=../Page/Home.php");
} else {
    echo 'Erreur de Connexion';
}

 function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
