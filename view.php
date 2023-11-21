<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyTJAEiZnCeY6LZof++qJ49f8g6vjdh4u"
          crossorigin="anonymous">
    <title>User Details</title>
</head>
<body>
<div class="container mt-5">
    <h2>User Details</h2>
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

            echo "<p><strong>Username:</strong> {$user['username']}</p>";
            echo "<p><strong>Email:</strong> {$user['email']}</p>";
            echo "<p><strong>Role:</strong> {$user['role']}</p>";
            echo "<p><strong>Address:</strong> {$user['adresse']}</p>";
            echo "<p><strong>Phone:</strong> {$user['num_telephone']}</p>";
        } else {
            echo "<p>No user details found</p>";
        }

        $stmt->close();
    } else {
        echo "<p>User ID not provided</p>";
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
