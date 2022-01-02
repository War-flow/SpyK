<?php 

session_start();

require_once 'Header/HeaderAd.html';


if (isset($_SESSION['email'])) {
echo 'Accueil Admin';

}
else {
  header("Location:Home.php" );
  
}
?>
<head>
  <title>Missions Spy K Admin</title>
</head>


