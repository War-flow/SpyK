<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
  
} catch (PDOException $exception) {
  file_put_contents('dblogs.log', $exception->getMessage() . PHP_EOL, FILE_APPEND);
  die($exception->getMessage());
}
