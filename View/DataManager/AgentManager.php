<?php 

if (isset($_POST['submit'])) {
  $codeId = $_POST['codeId'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $birth = $_POST['birth'];
  $nation = $_POST['nation'];
  $special = $_POST['special'];

  try {
    $dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  } catch (PDOException $exception) {
    file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
    die($exception->getMessage());
  }

  $sql = "INSERT INTO `agents`(`codeId`, `firstname`, `lastname`, `birth`, `nation`, `special`) 
  VALUES ('$codeId','$firstname','$lastname','$birth','$nation ','$special')";
  $req = $dsn->prepare($sql);
  $req->execute();

  header("Location:../HomeAd.php");
} else {
  echo 'Erreur de donnée';
}
