<?php 

session_start();

require_once 'Header/HeardeAd.html';


if (isset($_SESSION['email'])) {
echo 'Accueil Admin';

}
else {
  header( "Location:Home.php" );
}
?>
<a href="Detail.php">Détail</a>

