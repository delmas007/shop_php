<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vente";
    // Connectez-vous à la base de données (remplacez les variables par vos informations de connexion)
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userId = $_SESSION["id"];

    // Requête pour récupérer les commandes de l'utilisateur
    $sql = "SELECT article.nom_article, article.prix_article, commande.quantite, (article.prix_article * commande.quantite) as total
            FROM commande
            JOIN article ON commande.id_a = article.id_article
            WHERE commande.id_u = $userId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<thead><tr><th>Article</th><th>Prix unitaire</th><th>Quantité</th><th>Total</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td class='my-2'>" . $row["nom_article"] . "</td><td class='my-2'>" . $row["prix_article"] . "</td><td class='my-2'>" . $row["quantite"] . "</td><td class='my-2'>" . $row["total"] . "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Aucune commande trouvée.";
    }

    $conn->close();
} else {
    echo "Veuillez vous connecter.";
}
?>
