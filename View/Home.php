<?php 

session_start();

require 'Hearde.html';

if (isset($_SESSION['email'])) {

  echo 'Accueil';
}

else {
  header( "Location:../index.php" );
}