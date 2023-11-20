<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vente";

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifiez la connexion à la base de données
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Utilisez une requête préparée pour éviter les injections SQL
    $userId = $_SESSION["id"];
    $sql = "SELECT COUNT(*) as count FROM commande WHERE id_u = ?";
    $stmt = $conn->prepare($sql);

    // Vérifiez si la préparation a réussi
    if ($stmt) {
        // Liez les paramètres et exécutez la requête
        $stmt->bind_param("i", $userId);
        $stmt->execute();

        // Liez le résultat de la requête
        $stmt->bind_result($rowCount);

        // Récupérez le résultat
        $stmt->fetch();

        // Affichez le nombre de commandes
        echo $rowCount;

        // Fermez la requête
        $stmt->close();
    } else {
        echo "0"; // En cas d'erreur, renvoyer 0
    }

    // Fermez la connexion à la base de données
    $conn->close();
} else {
    echo "0"; // Si l'utilisateur n'est pas connecté, renvoyer 0
}

// Fermez la connexion à la base de données
$conn->close();
?>
