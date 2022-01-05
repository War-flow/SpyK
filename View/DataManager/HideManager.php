<?php 

require_once '../../Log/Dsn.php';

if (isset($_POST['submit'])) {
  $code = htmlspecialchars($_POST['code']);
  $address = htmlspecialchars($_POST['address']);
  $country = htmlspecialchars($_POST['country']);
  $type = htmlspecialchars($_POST['type']);


  $sql = "INSERT INTO `hide`(`code`, `address`, `country`, `type`) 
  VALUES ('$code ','$address','$country ','$type')";
  $req = $pdo->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
