<?php 

session_start();

require 'Hearde.php';

if (isset($_SESSION['email'])) {

}
else {
  header( "Location:Home.php" );
}

