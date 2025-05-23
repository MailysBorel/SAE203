<?php
require_once 'config/database.php';
session_start();
if ($_SESSION['user']['role_id'] != 3) die("Accès refusé.");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom_materiel'])) {
    $stmt = $pdo->prepare("INSERT INTO materiels (nom, quantite) VALUES (?, ?)");
    $stmt->execute([$_POST['nom_materiel'], $_POST['quantite']]);
    header("Location: gestion_materiel.php");
    exit;
}

if (isset($_GET['supprimer'])) {
    $stmt = $pdo->prepare("DELETE FROM materiels WHERE id = ?");
    $stmt->execute([$_GET['supprimer']]);
    header("Location: gestion_materiel.php");
    exit;
}

$materiels = $pdo->query("SELECT * FROM materiels")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion du Matériel</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Gestion du Matériel</h2>

    <form method="POST" class="mb-4 row g-2">
        <div class="col-md-6">
            <input type="text" name="nom_materiel" placeholder="Nom du matériel" class="form-control" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="quantite" min="1" value="1" class="form-control" required>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary w-100">Ajouter</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead><tr><th>Nom</th><th>Quantité</th><th>Disponible</th><th>Action</th></tr></thead>
        <tbody>
            <?php foreach ($materiels as $m): ?>
                <tr>
                    <td><?= htmlspecialchars($m['nom']) ?></td>
                    <td><?= $m['quantite'] ?></td>
                    <td><?= $m['disponible'] ? 'Oui' : 'Non' ?></td>
                    <td>
                        <a href="?supprimer=<?= $m['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>