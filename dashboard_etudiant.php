<?php
session_start();
if ($_SESSION['user']['role_id'] != 1) die("Accès refusé.");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Étudiant</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Tableau de bord Étudiant</h2>
    <ul>
        <li><a href="reserver.php">Faire une réservation</a></li>
        <li><a href="mes_reservations.php">Mes réservations</a></li>
    </ul>
</body>
</html>