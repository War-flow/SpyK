<?php
session_start();

require 'Dsn.php';


if (isset($_POST['submit'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birth = $_POST['birth'];
    $nation = $_POST['nation'];
    $special = $_POST["special"];

 


    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (id, email, password, firstname, lastname, birth, nation, special) 
        VALUES (UUID(), '$email', '$password', '$firstname', '$lastname', '$birth', '$nation ', '$special')";
    $req = $pdo->prepare($sql);
    $req->execute();
    header( "Location:../View/Home.php" );
    $_SESSION['email'] = $email;
} else {
    header("Location:../View/Error.html");
}