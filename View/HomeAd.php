<?php 

session_start();

require_once 'Header/HeaderAd.html';
require_once 'DataManager/MissionManager.php';


if (isset($_SESSION['email'])) {
$pdo = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');
$page = $_GET['page'] ?? 1 ;
$manager = new MissionManager($pdo);

$missions = $manager->getMission($page);
include 'View.php';

$statement = $pdo->prepare('SELECT COUNT(*) AS totalMission FROM missions');
if ($statement->execute()) {
    $totalMission = $statement->fetch(PDO::FETCH_ASSOC);
    for ($i = 1; $i <= ceil($totalMission['totalMission'] / 3); $i++) {
        echo '<a href="?page=' . $i . '">' . $i . '</a> - ';
    }
}

}
else {
  header("Location:Home.php" );
  
}

?>
<head>
  <title>Missions Spy K Admin</title>
</head>


