<?php 

session_start();

require_once '../Log/Dsn.php';

if (isset($_SESSION['email'])) {

  require_once 'Header/HeaderAd.html';
  
  }

  else {

    require_once 'Header/Header.html';

  }

  $detail = $_GET['$detail'];

  $sql = "SELECT * FROM missions WHERE id = '$detail' ";
  $result = $pdo->prepare($sql);
  $result->execute();
  $data = $result->fetchAll(); 
 ?>

<div class="card">
  <h5 class="card-header"><?php echo  $data[0]['title'];?></h5>
  <div class="card-body">
    <h6>Nom de Code : <?php echo  $data[0]['codename']; ?></h6>
    <p class="card-text"> Résume :  <?php echo $data[0]['description'];?></p>
    <p class="card-text"> Pays : <?php echo $data[0]['country']; ?></p>
    <p class="card-text"> Agent N° : <?php echo $data[0]['agent']; ?></p>
    <p class="card-text"> Cible : <?php echo $data[0]['targets']; ?></p>
    <p class="card-text"> Contacts : <?php echo $data[0]['contacts']; ?></p>
    <p class="card-text"> Objectif : <?php echo $data[0]['type']; ?></p>
    <p class="card-text"> Statue : <?php echo $data[0]['status']; ?></p>
    <p class="card-text"> Planque N° : <?php echo $data[0]['hide']; ?></p>
    <p class="card-text"> Date de début : <?php echo $data[0]['startDate']; ?></p>
    <p class="card-text"> Data de fin : <?php echo $data[0]['endDate']; ?></p>
  </div>
</div>


  

