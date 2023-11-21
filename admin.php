<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyTJAEiZnCeY6LZof++qJ49f8g6vjdh4u"
          crossorigin="anonymous">
    <title>Liste des Commandes</title>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        thead {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .btn-see {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-see:hover {
            background-color: #218838;
            border-color: #218838;
        }

        /* Ajout du style pour le bouton de déconnexion */
        a.logout-btn {
            color: #fff;
            text-decoration: none;
            background-color: #dc3545;
            padding: 8px 16px;
            border-radius: 4px;
        }

        a.logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
<div class="container">
    <!-- Bouton de déconnexion -->
    <a href="deconnexion.php" class="logout-btn">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        <span>Déconnexion</span>
    </a>

    <h2 class="text-center mb-4">Liste des Commandes</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Adresse</th>
            <th>Article</th>
            <th>Description</th>
            <th>Quantité</th>
            <th>Confirmation</th>
            <th>detail utilisateur</th> <!-- Nouvelle colonne pour le bouton Supprimer -->
            <th>Supprimer</th>
            <th>Modifier confirmation</th> <!-- Nouvelle colonne pour le bouton Modifier -->
        </tr>
        </thead>
        <tbody>
        <?php
        // Replace with your database connection code
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vente";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT commande.id_commande, utilisateur.id_user, utilisateur.username, utilisateur.adresse, article.nom_article, article.description, commande.quantite, commande.confirmation
                FROM commande
                INNER JOIN utilisateur ON commande.id_u = utilisateur.id_user
                INNER JOIN article ON commande.id_a = article.id_article";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id_user = $row['id_user'];
                $id_commande = $row['id_commande'];
                $confirmationText = $row['confirmation'] ? 'Valider' : 'Non valider';

                echo "<tr>
                            <td>{$row['username']}</td>
                            <td>{$row['adresse']}</td>
                            <td>{$row['nom_article']}</td>
                            <td>{$row['description']}</td>
                            <td>{$row['quantite']}</td>
                            <td>{$confirmationText}</td>
                            <td><a href='view.php?userId={$id_user}' class='btn btn-see'>Voir</a></td>
                            <td><a href='delete.php?orderId={$id_commande}' class='btn btn-danger'>Supprimer</a></td>
                            <td><a href='edit.php?orderId={$id_commande}' class='btn btn-primary'>Modifier</a></td>
                        </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>Aucune commande trouvée</td></tr>";
        }

        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-aSLTOIoZALefTj/4j1DwkSzp2U8L7S5KbcnAbPP5xk+gZWWLdnGDI9F87aP6UKT"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyTJAEiZnCeY6LZof++qJ49f8g6vjdh4u"
        crossorigin="anonymous"></script>
</body>
</html>
