<?php 

session_start();

require_once '..\..\Modele\Database\Missions.php';



class MissionManager {
  private PDO $pdo;

 public function __construct(PDO $pdo)
 {
   $this->pdo = $pdo;
}
 public function addMission(string $mission): bool 
 {
  $statement = $this->pdo->prepare('INSERT INTO messages (content) VALUES (:content)');
    $statement->bindValue(':content', $mission, PDO::PARAM_STR);

   return $statement->execute();
 }
}
