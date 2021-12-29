<?php 

session_start();

if (isset($_SESSION['email'])) {

  header( "Location:View/Home.php" );
}

else {
  header( "Location:Log\Login.php");
}