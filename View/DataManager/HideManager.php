<?php 

if (isset($_POST['submit'])) {
  
  $code = $_POST['code'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $type = $_POST['type'];

  try {
    $dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  } catch (PDOException $exception) {
    file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
    die($exception->getMessage());
  }

  $sql = "INSERT INTO `hide`(`code`, `address`, `country`, `type`) 
  VALUES ('$code ','$address','$country ','$type')";
  $req = $dsn->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
