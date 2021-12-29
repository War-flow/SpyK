<?php 

session_start();

require 'Hearde.html';

if (isset($_SESSION['email'])) {

  echo $_SESSION['email'];
}

else {
  header( "Location:../index.php" );
}

?>
<a href='Détail.php'>Détail</a>