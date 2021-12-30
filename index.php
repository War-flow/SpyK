<?php 

session_start();

if (isset($_SESSION['email'])) {

  header( "Location:View/HomeAd.php" );
}

else {
  header( "Location:View/Home.php" );
}
