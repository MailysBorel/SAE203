<?php
session_start();
if ($_SESSION['user']['role_id'] != 2) die("Accès refusé.");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Enseignant</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Tableau de bord Enseignant</h2>
    <ul>
        <li><a href="reserver.php">Réserver une salle</a></li>
        <li><a href="mes_reservations.php">Voir mes réservations</a></li>
    </ul>
</body>
</html>