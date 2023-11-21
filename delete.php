<?php
// Supprimer une commande en fonction de l'ID de commande
if (isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    // Remplacez les informations de connexion à la base de données par les vôtres
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vente";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Utilisez des requêtes préparées pour éviter les attaques par injection SQL
    $stmt = $conn->prepare("DELETE FROM commande WHERE id_commande = ?");
    $stmt->bind_param("i", $orderId);

    if ($stmt->execute()) {
        echo "La commande a été supprimée avec succès.";
    } else {
        echo "Erreur lors de la suppression de la commande: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "ID de commande non spécifié.";
}

// Rediriger vers la page principale après la suppression (vous pouvez ajuster le chemin selon vos besoins)
header("Location: admin.php");
?>
