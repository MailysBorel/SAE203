<?php
session_start();
if ($_SESSION['user']['role_id'] != 3) die("Accès refusé.");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Tableau de bord Administrateur</h2>
    <ul>
        <li><a href="gestion_salles.php">Gérer les salles</a></li>
        <li><a href="gestion_materiel.php">Gérer le matériel</a></li>
        <li><a href="gestion_utilisateurs.php">Gérer les utilisateurs</a></li>
        <li><a href="statistiques.php">Voir les statistiques</a></li>
    </ul>
</body>
</html>