<?php 

session_start();

require 'Hearde.html';

if (isset($_SESSION['email'])) {

  header( "Location:HomeAd.php" );
}

