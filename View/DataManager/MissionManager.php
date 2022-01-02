<?php 

session_start();

class MissionManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addMission(
    string $title, 
    string $description, 
    string $codename, 
    string $country, 
    string $agent, 
    string $targets,
    string $contacts,
    string $type,
    string $status,
    string $hide,
    string $startDate,
    string $endDate): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO missions
        (`title`, `description`, `codename`, `country`, `agent`, `targets`, `contacts`, `type`, `status`, `hide`, `startDate`, `endDate`) 
        VALUES (`:title`, `:description`, `:codename`, `:country`, `:agent`, `:targets`, `:contacts`, `:type`, `:status`, `:hide`,`:startDate`, `:endDate`)');
        $statement->bindValue(':title', $title, PDO::PARAM_STR);
        $statement->bindValue(':description', $description, PDO::PARAM_STR);
        $statement->bindValue(':codename', $codename, PDO::PARAM_STR);
        $statement->bindValue(':country', $country, PDO::PARAM_STR);
        $statement->bindValue(':agent', $agent, PDO::PARAM_STR);
        $statement->bindValue(':targets', $targets, PDO::PARAM_STR);
        $statement->bindValue(':contacts', $contacts, PDO::PARAM_STR);
        $statement->bindValue(':type', $type, PDO::PARAM_STR);
        $statement->bindValue(':status', $status, PDO::PARAM_STR);
        $statement->bindValue(':hide', $hide, PDO::PARAM_STR);
        $statement->bindValue(':startDate', $startDate, PDO::PARAM_STR);
        $statement->bindValue(':endDate', $endDate, PDO::PARAM_STR);

        return $statement->execute();
    }

}