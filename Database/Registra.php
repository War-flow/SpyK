<?php
session_start();

require 'Dsn.php';


if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birth = $_POST['birth'];
$nation = $_POST['nation'];
$special = $_POST['special'];

$dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', ''); 

 $password = password_hash($password, PASSWORD_DEFAULT);
 $sql = "INSERT INTO users (id, email, password, firstname, lastname, birth, nation, special) 
        VALUES (UUID(), '$email', '$password', '$firstname', '$lastname', '$birth', '$nation ', '$special')";
        $req = $dsn -> prepare($sql);
        $req->execute();
        header( "refresh:1;url=../Page/Home.php" );

} else {
    echo 'Erreur de Connexion';
}
