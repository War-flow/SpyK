<?php 

if (isset($_POST['submit']))
{
   $title = $_POST['title'];
   $description = $_POST['description'] ;
   $codename = $_POST['codename'];
   $country = $_POST['country'];
   $agent = $_POST['agent'];
   $targets = $_POST['targets'];
   $contacts = $_POST['contacts'];
   $type = $_POST['type'];
   $status = $_POST['status'];
   $hide = $_POST['hide'];
   $startDate = $_POST['startDate'];
   $endDate = $_POST['endDate'];

   $dsn = new PDO('mysql:host=localhost;dbname=dbkgb', 'root', '');

   $sql = "INSERT INTO `missions`(`title`, `description`, `codename`, `country`, `agent`, `targets`, `contacts`, `type`, `status`, `hide`, `startDate`, `endDate`)
   VALUES ('$title','$description ','$codename','$country','$agent ','$targets','$contacts','$type','$status ','$hide','$startDate','$endDate ')";
$req = $dsn->prepare($sql);
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
