<?php

class UserManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function subscribe(
        string $email, 
        string $password, 
        string $firstname, 
        string $lastname, 
        string $birth,
        string $nation,
        string $special): bool
    {
        // Vérification de la taille du mot de passe
        if (strlen($password) < 8) {
            // Si le mot de passe n'est pas au bon format, on retourne false
            return false;
        }

        // Préparation de la requête
        $statement = $this->pdo->prepare('
INSERT INTO users (id, email, password, firstname, lastname, birth, nation, special) 
VALUES (UUID(), :email, :password, :firstname, :lastname, :birth, :nation, :special)'
        );

        // Injection des valeurs des marqueurs
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        // Hashage du mot de passe
        $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);
        $statement->bindValue(':firstName', $firstname, PDO::PARAM_STR);
        $statement->bindValue(':lastName', $lastname, PDO::PARAM_STR);
        $statement->bindValue(':birth', $birth, PDO::PARAM_STR);
        $statement->bindValue(':nation', $nation, PDO::PARAM_STR);
        $statement->bindValue(':special', $special, PDO::PARAM_STR);

        // On retourne le statut d'exécution de la requête
        return $statement->execute();
    }
    public function connect(string $email, string $password): User
    {
        require_once 'User.php';

        // On cherche un utilisateur ayant l'adresse e-mail correspondante
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $statement->setFetchMode(PDO::FETCH_CLASS, 'User');
        $statement->bindValue(':email', $email);
        if ($statement->execute()) {
            // Il y a une contrainte d'unicité sur l'e-mail : il n'est donc pas utile de faire une boucle
            $user = $statement->fetch();
            // Il faut vérifier que fetch n'a pas retourné false avant de vérifier le mot de passe
            if ($user !== false && password_verify($password, $user->getPassword())) {
                return $user;
            }
        }

        throw new Exception('Identifiants invalides');
    }
}

