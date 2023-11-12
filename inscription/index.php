<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file or configure it here
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "vente";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $username = $_POST["username"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT); // Hash the password
    $email = $_POST["email"];
    $num_telephone = $_POST["num_telephone"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO utilisateur (username, nom, prenom, adresse, mot_de_passe, email, num_telephone) 
            VALUES ('$username', '$nom', '$prenom', '$adresse', '$mot_de_passe', '$email', '$num_telephone')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur lors de l'inscription: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Inscription</div>
    <div class="content">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Entrez votre username" required>
                </div>
                <div class="input-box">
                    <span class="details">Nom</span>
                    <input type="text" name="nom" placeholder="Entrez votre nom" required>
                </div>
                <div class="input-box">
                    <span class="details">Prenom</span>
                    <input type="text" name="prenom" placeholder="Entrez votre Prenom" required>
                </div>
                <div class="input-box">
                    <span class="details">Adresse</span>
                    <input type="text" name="adresse" placeholder="Entrez votre adresse" required>
                </div>
                <div class="input-box">
                    <span class="details">Mot de passe</span>
                    <input type="password" name="mot_de_passe" placeholder="Entrez votre Mot de passe" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="input-box">
                    <span class="details">Numéro de téléphone</span>
                    <input type="number" name="num_telephone" placeholder="Entrez votre Numéro de téléphone" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Inscription">
            </div>
        </form>
    </div>
</div>
</body>
</html>
