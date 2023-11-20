<?php
// get_cart_count.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vente";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion à la base de données
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérez le nombre total de commandes
$sql = "SELECT COUNT(*) as count FROM commande";
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
?>
