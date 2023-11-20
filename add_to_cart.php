<?php
session_start();
// Connexion à la base de données (assurez-vous de remplacer les valeurs par les vôtres)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vente";
$id = $_SESSION["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer les informations du produit à partir de la requête GET
$product_id = $_GET['product_id'];
$product_type = $_GET['product_type'];

// Exécuter la requête d'insertion dans la table de commandes (vous pouvez ajuster cela en fonction de votre modèle de données)
$sql = "INSERT INTO commande (id_a, id_u) VALUES ('$product_id', '$id')"; // Ici, '1' représente l'ID de l'utilisateur (à adapter)

if ($conn->query($sql) === TRUE) {
    echo "Achat enregistré avec succès.";
} else {
    echo "Erreur lors de l'enregistrement de l'achat : " . $conn->error;
}


// Fermer la connexion à la base de données
$conn->close();

function getCartCount() {
    // Assurez-vous que la session a été démarrée
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vente";

    // Vérifiez si l'utilisateur est connecté
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        // Incluez votre configuration de base de données
        include_once("config.php");

        // Connexion à la base de données
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifiez la connexion à la base de données
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Récupérez le nombre de commandes pour l'utilisateur actuel
        $userId = $_SESSION["id"];
        $sql = "SELECT COUNT(*) as count FROM commande WHERE id_u = $userId";
        $result = $conn->query($sql);

        // Vérifiez si la requête a réussi
        if ($result) {
            $row = $result->fetch_assoc();
            echo $row["count"];
        } else {
            echo "0"; // En cas d'erreur, renvoyer 0
        }

        // Fermez la connexion à la base de données
        $conn->close();
    } else {
        echo "0"; // Si l'utilisateur n'est pas connecté, renvoyer 0
    }
}

// Appeler la nouvelle fonction
getCartCount();
?>
