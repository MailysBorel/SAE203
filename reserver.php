<?php
require_once 'config/database.php';
session_start();
$user = $_SESSION['user'] ?? null;
if (!$user || !in_array($user['role_id'], [1, 2])) die("Accès refusé.");

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date_reservation'];
    $creneau = $_POST['creneau'];
    $motif = $_POST['motif'];
    $liste = $_POST['liste_etudiants'];
    $commentaire = $_POST['commentaire'];

    $stmt = $pdo->prepare("INSERT INTO reservations 
        (utilisateur_id, date_reservation, creneau, motif, liste_etudiants, commentaire) 
        VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user['id'], $date, $creneau, $motif, $liste, $commentaire]);
    $success = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Réserver une salle</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <h2>Réservation</h2>
    <?php if ($success): ?>
        <div class="alert alert-success">Réservation enregistrée en attente de validation.</div>
    <?php endif; ?>
    <form method="POST" class="row g-3">
        <input type="date" name="date_reservation" class="form-control" required>
        <input type="text" name="creneau" class="form-control" placeholder="Créneau (ex: 10h-12h)" required>
        <textarea name="motif" class="form-control" placeholder="Motif de la réservation" required></textarea>
        <textarea name="liste_etudiants" class="form-control" placeholder="Liste des étudiants (facultatif)"></textarea>
        <textarea name="commentaire" class="form-control" placeholder="Commentaires (facultatif)"></textarea>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</body>
</html>