<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Créer un compte</title>
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
      max-width: 600px;
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

    .btn-success {
      background-color: #198754;
      border-color: #198754;
      width: 100%;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Créer un compte utilisateur</h2>
    <form>
      <div class="row mb-3">
        <div class="col">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" id="nom" class="form-control" required />
        </div>
        <div class="col">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" id="prenom" class="form-control" required />
        </div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse email universitaire</label>
        <input type="email" id="email" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" id="password" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="role" class="form-label">Rôle</label>
        <select id="role" class="form-select" required>
          <option value="" disabled selected>Choisir un rôle</option>
          <option value="1">Étudiant</option>
          <option value="2">Enseignant</option>
          <option value="3">Administrateur</option>
          <option value="4">Agent</option>
        </select>
      </div>

      <div id="etudiantFields" style="display:none;">
        <div class="mb-3">
          <label for="num_etudiant" class="form-label">Numéro étudiant</label>
          <input type="text" id="num_etudiant" class="form-control" />
        </div>
        <div class="mb-3">
          <label for="telephone" class="form-label">Téléphone</label>
          <input type="tel" id="telephone" class="form-control" />
        </div>
        <div class="mb-3">
          <label for="adresse" class="form-label">Adresse postale</label>
          <input type="text" id="adresse" class="form-control" />
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="groupe_tp" class="form-label">Groupe TP</label>
            <input type="text" id="groupe_tp" class="form-control" />
          </div>
          <div class="col">
            <label for="groupe_td" class="form-label">Groupe TD</label>
            <input type="text" id="groupe_td" class="form-control" />
          </div>
        </div>
        <div class="mb-3">
          <label for="promotion" class="form-label">Promotion</label>
          <input type="text" id="promotion" class="form-control" />
        </div>
      </div>

      <button type="submit" class="btn btn-success">Créer le compte</button>
    </form>
  </div>

  <script>
    const roleSelect = document.getElementById('role');
    const etudiantFields = document.getElementById('etudiantFields');

    roleSelect.addEventListener('change', () => {
      if(roleSelect.value === '1') {
        etudiantFields.style.display = 'block';
      } else {
        etudiantFields.style.display = 'none';
      }
    });
  </script>
</body>
</html>