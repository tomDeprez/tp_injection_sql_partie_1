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

// Récupération des données du formulaire
$user = $_POST['username'];
$pass = $_POST['password'];

// Requête SQL vulnérable à l'injection SQL
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

// Vérification de l'utilisateur
if ($result->num_rows > 0) {
    // Récupération des informations de l'utilisateur depuis la base de données
    $user_data = $result->fetch_assoc();

    // Redirection vers la page de succès avec les informations utilisateur
    header("Location: connexion.php?id=" . urlencode($user_data['id']));
    exit();
} else {
    // Si la connexion échoue, rediriger vers la page de connexion avec les paramètres d'erreur
    header("Location: index.php?error=1&sql=" . urlencode($sql) . "&username=" . urlencode($user) . "&password=" . urlencode($pass));
    exit();
}

// Fermeture de la connexion
$conn->close();
?>
