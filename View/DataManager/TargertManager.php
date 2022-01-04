<?php 


if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $birth = $_POST['birth'];
  $codename = $_POST['codename'];
  $nation = $_POST['nation'];

  try {
    $dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  } catch (PDOException $exception) {
    file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
    die($exception->getMessage());
  }

  $sql = "INSERT INTO `target`(`firstname`, `lastname`, `birth`, `codeName`, `nation`) 
  VALUES ('$firstname','$lastname','$birth ','$codename','$nation')";
  $req = $dsn->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
