<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyTJAEiZnCeY6LZof++qJ49f8g6vjdh4u"
          crossorigin="anonymous">
    <title>User Details</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            text-align: center;
        }

        .card {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            text-align: left;
        }

        .card-title {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .card-text {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            font-size: 18px;
            border-radius: 8px;
        }

        .alert-warning {
            background-color: #ffc107;
            color: #856404;
            border: 1px solid #ffc107;
        }

        .alert-danger {
            background-color: #dc3545;
            color: #fff;
            border: 1px solid #dc3545;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="mb-4">Utilisateur</h2>
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

    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];

        // Utilisation d'une requête préparée pour éviter les attaques par injection SQL
        $sql = "SELECT * FROM utilisateur WHERE id_user = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Détails de l'utilisateur</h5>";
            echo "<p class='card-text'><strong>Username:</strong> {$user['username']}</p>";
            echo "<p class='card-text'><strong>Email:</strong> {$user['email']}</p>";
            echo "<p class='card-text'><strong>Address:</strong> {$user['adresse']}</p>";
            echo "<p class='card-text'><strong>Phone:</strong> {$user['num_telephone']}</p>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='alert alert-warning'>No user details found</div>";
        }

        $stmt->close();
    } else {
        echo "<div class='alert alert-danger'>User ID not provided</div>";
    }

    $conn->close();
    ?>
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
