<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Connexion - Réservation IUT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #e0f7fa, #ffffff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    h2 {
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 30px;
      text-align: center;
    }

    .btn {
      padding: 12px 24px;
      font-weight: 500;
      border-radius: 8px;
    }

    .btn-primary {
      background-color: #0d6efd;
      border-color: #0d6efd;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Vous pouvez ajouter le logo ici si vous le souhaitez -->
    <h2>Connexion</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Adresse email</label>
        <input type="email" id="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" id="password" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
  </div>
</body>
</html>
