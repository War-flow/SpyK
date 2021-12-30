<?php 

session_start();

if (isset($_SESSION['email'])) {

  require_once 'Header/HeardeAd.html';

  }

  else {

    require_once 'Header/Hearde.html';
  }
  

echo 'Détail';