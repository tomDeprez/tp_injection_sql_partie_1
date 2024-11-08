<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";  // Remplace par le nom d'utilisateur MySQL
$password = "";      // Remplace par le mot de passe MySQL
$dbname = "sql_injection_demo";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupération de l'ID utilisateur depuis l'URL
$user_id = $_GET['id'];

// Requête pour récupérer les informations de l'utilisateur
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);

// Vérification de l'existence de l'utilisateur
if ($result->num_rows > 0) {
    // Récupération des informations de l'utilisateur
    $user_data = $result->fetch_assoc();
} else {
    die("Utilisateur introuvable.");
}

// Fermeture de la connexion
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Réussie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .welcome-box {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .user-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }

        .flag-box {
            margin-top: 20px;
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            font-family: monospace;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mt-5">Connexion Réussie</h2>

                <!-- Boîte de bienvenue -->
                <div class="welcome-box">
                    <p><strong>Bienvenue, <?php echo htmlspecialchars($user_data['username']); ?> !</strong></p>
                    <p>Vous êtes maintenant connecté(e) avec succès.</p>
                </div>

                <!-- Informations de l'utilisateur -->
                <div class="user-info">
                    <h5>Vos informations :</h5>
                    <ul>
                        <li><strong>ID :</strong> <?php echo htmlspecialchars($user_data['id']); ?></li>
                        <li><strong>Nom d'utilisateur :</strong> <?php echo htmlspecialchars($user_data['username']); ?></li>
                        <li><strong>Mot de passe :</strong> <?php echo htmlspecialchars($user_data['password']); ?></li>
                        <li><strong>Type d'utilisateur :</strong> <?php echo ($user_data['is_admin']) ? 'Administrateur' : 'Utilisateur standard'; ?></li>
                    </ul>
                </div>

                <!-- Affichage du flag -->
                <div class="flag-box">
                    <p><strong>Flag :</strong> FLAG{Injection_SQL_Success}</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
