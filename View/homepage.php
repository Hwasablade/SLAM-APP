<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h2>Bienvenue sur la page d'accueil</h2>
    <a href="formulaire_gestion.php">Accéder au formulaire de gestion</a>
    <form method="post" action="../Model/logout.php">
        <input type="submit" value="logout">
    </form>
    
</body>
</html>
