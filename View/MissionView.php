<?php  $detail = $mission->getId(); ?>
<div class="card">
  <h5 class="card-header"><?php echo $mission->getTitle(); ?></h5>
  <div class="card-body">
    <h6>Nom de Code : <?php echo $mission->getCodeName(); ?></h6>
    <p class="card-text"><?php echo $mission->getDescription(); ?></p>
    <p class="card-text"> Statue : <?php echo $mission->getStatus(); ?></p>
    <p class="card-text"> Date de début : <?php echo $mission->getStartDate(); ?></p>
    <p class="card-text"> Data de fin : <?php echo $mission->getEndDate(); ?></p>
    <a href="Detail.php?$detail=<?php echo $detail; ?>" class="btn btn-primary">Voir le détail</a>
  </div>
</div>