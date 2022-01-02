<?php 

session_start();

require_once 'Header/Header.html';

if (isset($_SESSION['email'])) {

  header( "Location:HomeAd.php" );
} else {
  echo 'Accueil Agent';


} ?>
  <head>
  <title>Missions Spy K</title>
  </head>
