<?php
require_once 'config/database.php';
session_start();
if ($_SESSION['user']['role_id'] != 3) die("Accès refusé.");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom_salle'])) {
    $stmt = $pdo->prepare("INSERT INTO salles (nom) VALUES (?)");
    $stmt->execute([$_POST['nom_salle']]);
    header("Location: gestion_salles.php");
    exit;
}

if (isset($_GET['supprimer'])) {
    $stmt = $pdo->prepare("DELETE FROM salles WHERE id = ?");
    $stmt->execute([$_GET['supprimer']]);
    header("Location: gestion_salles.php");
    exit;
}

$salles = $pdo->query("SELECT * FROM salles")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Salles</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Gestion des Salles</h2>

    <form method="POST" class="mb-4">
        <input type="text" name="nom_salle" placeholder="Nom de la salle" class="form-control mb-2" required>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

    <table class="table table-bordered">
        <thead><tr><th>Nom</th><th>Disponible</th><th>Action</th></tr></thead>
        <tbody>
            <?php foreach ($salles as $s): ?>
                <tr>
                    <td><?= htmlspecialchars($s['nom']) ?></td>
                    <td><?= $s['disponible'] ? 'Oui' : 'Non' ?></td>
                    <td>
                        <a href="?supprimer=<?= $s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>