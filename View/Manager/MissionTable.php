<?php

session_start();

require_once '../../Log/Dsn.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Bootstrap/bootstrap.min.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../">Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
<script src="../Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
  <?php
  $recupData = $pdo->query('SELECT * FROM `missions`');
  ?>
  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <?php
        $recupData = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recupData->fetch()) { ?>

          <th scope="col" ><?= $rec['id'];?>    
          <a class="btn btn-danger" href="../../Gestion/Delete/DeleteMission.php?id=<?= $rec['id'];?>" role="button"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg> </a>  
          <a class="btn btn-success" href="../../Gestion/Update/UpdateMission.php?id=<?= $rec['id'];?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg></a></th>
       <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Titre</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['title'];?></td>
       <?php } ?>
      </tr>
      <tr>
        <th scope="row">Description</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['description'];?></td>
       <?php } ?>
      </tr>
      <th scope="row">Nom de Code</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['codename'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Pays</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['country'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Agent</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['agent'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Cible</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['targets'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Contact</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['contacts'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Type</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['type'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Statue</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['status'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Plaque</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['hide'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Date de Début</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['startDate'];?></td>
       <?php } ?>
      </tr>
      </tr>
      <th scope="row">Date de fin</th>
        <?php
        $recup = $pdo->query('SELECT * FROM `missions`');
        while ($rec = $recup->fetch()) { ?>
          <td><?= $rec['endDate'];?></td>
       <?php } ?>
      </tr>
    </tbody>
  </table>
  </div>
</body>

</html>