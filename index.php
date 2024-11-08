<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-box {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 20px;
            border-radius: 5px;
        }

        .sql-query {
            background-color: #e2e3e5;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            color: #333;
            white-space: pre-wrap;
        }

        .error-title {
            font-weight: bold;
        }

        .error-details {
            margin-top: 10px;
        }

        .error-details strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center mt-5">Connexion</h2>

                <!-- Affichage de l'erreur si elle existe -->
                <?php if (isset($_GET['error'])): ?>
                    <div class="error-box">
                        <p class="error-title">Erreur :</p>
                        <p>Vous n'êtes pas connecté. Voici la requête SQL envoyée :</p>
                        <div class="sql-query"><?php echo $_GET['sql']; ?></div>
                        <div class="error-details">
                            <p><strong>Détails envoyés :</strong></p>
                            <p><strong>Nom d'utilisateur :</strong> <?php echo htmlspecialchars($_GET['username']); ?></p>
                            <p><strong>Mot de passe :</strong> <?php echo htmlspecialchars($_GET['password']); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>