<?php
session_start();
if ($_SESSION['user']['role_id'] != 4) die("Accès refusé.");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Agent</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Tableau de bord Agent</h2>
    <ul>
        <li><a href="reservations_valides.php">Voir les réservations validées</a></li>
        <li><a href="confirmation_pdf.php">Générer un PDF de confirmation</a></li>
    </ul>
</body>
</html>