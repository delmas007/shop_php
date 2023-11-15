<?php
// Connexion à la base de données (assurez-vous de remplacer les valeurs par les vôtres)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vente";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer les informations du produit à partir de la requête GET
$product_id = $_GET['product_id'];
$product_type = $_GET['product_type'];

// Exécuter la requête d'insertion dans la table de commandes (vous pouvez ajuster cela en fonction de votre modèle de données)
$sql = "INSERT INTO commande (id_a, id_u) VALUES ('$product_id', '1')"; // Ici, '1' représente l'ID de l'utilisateur (à adapter)

if ($conn->query($sql) === TRUE) {
    echo "Achat enregistré avec succès.";
} else {
    echo "Erreur lors de l'enregistrement de l'achat : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
