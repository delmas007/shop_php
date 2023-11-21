<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyTJAEiZnCeY6LZof++qJ49f8g6vjdh4u"
          crossorigin="anonymous">
    <title>Modifier Confirmation</title>
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

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
<div class="container">
    <h2 class="text-center mb-4">Modifier Confirmation</h2>

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

    $orderId = isset($_GET["orderId"]) ? $_GET["orderId"] : null;

    if ($orderId !== null) {
        $sql = "SELECT id_commande, confirmation FROM commande WHERE id_commande = '$orderId'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="hidden" name="orderId" value="<?php echo $row["id_commande"]; ?>">
                <div class="form-group">
                    <label for="confirmation">Confirmation:</label>
                    <select class="form-control" id="confirmation" name="confirmation">
                        <option value="0" <?php if ($row["confirmation"] == 0) echo 'selected'; ?>>Non valider</option>
                        <option value="1" <?php if ($row["confirmation"] == 1) echo 'selected'; ?>>Valider</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>

            <?php
        } else {
            echo '<div class="alert alert-danger" role="alert">Commande non trouvée</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">ID de commande non spécifié</div>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $orderId = $_POST["orderId"];
        $confirmation = $_POST["confirmation"];

        $sql = "UPDATE commande SET confirmation = '$confirmation' WHERE id_commande = '$orderId'";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Confirmation modifiée avec succès</div>';

            // Redirection vers la page index après la modification
            header("Location: admin.php");
            exit();  // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
        } else {
            echo '<div class="alert alert-danger" role="alert">Erreur lors de la modification de la confirmation : ' . $conn->error . '</div>';
        }
    }

    $conn->close();
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-aSLTOIoZALefTj/4j1DwkSzp2U8L7S5KbcnAbPP5xk+gZWWLdnG
