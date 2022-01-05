<?php 

require_once '../../Log/Dsn.php';

if (isset($_POST['submit']))
{
   $title =  htmlspecialchars($_POST['title']);
   $description = htmlspecialchars($_POST['description']);
   $codename = htmlspecialchars($_POST['codename']);
   $country = htmlspecialchars($_POST['country']);
   $agent = htmlspecialchars($_POST['agent']);
   $targets = htmlspecialchars($_POST['targets']);
   $contacts = htmlspecialchars($_POST['contacts']);
   $type = htmlspecialchars($_POST['type']);
   $status = htmlspecialchars($_POST['status']);
   $hide = htmlspecialchars($_POST['hide']);
   $startDate = htmlspecialchars($_POST['startDate']);
   $endDate = htmlspecialchars($_POST['endDate']);

   $sql = "INSERT INTO `missions`(`title`, `description`, `codename`, `country`, `agent`, `targets`, `contacts`, `type`, `status`, `hide`, `startDate`, `endDate`)
   VALUES ('$title','$description ','$codename','$country','$agent ','$targets','$contacts','$type','$status ','$hide','$startDate','$endDate ')";
$req = $pdo->prepare($sql);
$req->execute();

header( "Location:../HomeAd.php");
}

class MissionManager {
   
   private PDO $pdo ;

   public function __construct(PDO $pdo)
   {
      $this->pdo = $pdo;
   }

   public function getMission(int $page): array {
      require_once '../Modele/Missions.php';
      $stm = $this->pdo->prepare('SELECT * FROM missions LIMIT :start, 3');
      $stm->setFetchMode(PDO::FETCH_CLASS, 'Missions');
      $stm->bindValue(':start', 3 * ($page -1), PDO::PARAM_INT);
      $stm->execute();

      return $stm->fetchAll();
   }
}
