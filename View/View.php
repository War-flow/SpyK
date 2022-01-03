<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    // Pour tous les messages de $messages, on appelle la vue messageView en y injectant le message à afficher.
    foreach ($missions as $mission) {
        // Attention a ne pas utilise include_once ici : le but est d'inclure la vue autant de fois qu'il y a de messages
        include 'MissionView.php';
    }
?>
</body>
</html>