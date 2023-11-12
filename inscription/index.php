<?php
// Vérifiez si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclut votre fichier de connexion à la base de données ou configurez-le ici
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "vente";

    // Crée une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifiez la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupère les données du formulaire
    $username = $_POST["username"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT); // Hachez le mot de passe
    $email = $_POST["email"];
    $num_telephone = $_POST["num_telephone"];

    // Requête SQL pour insérer des données dans la base de données
    $sql = "INSERT INTO utilisateur (username, nom, prenom, adresse, mot_de_passe, email, num_telephone) 
            VALUES ('$username', '$nom', '$prenom', '$adresse', '$mot_de_passe', '$email', '$num_telephone')";

    if ($conn->query($sql) === TRUE) {
        header("location: ../connexion/index.php");
    } else {
        echo "Erreur lors de l'inscription: " . $conn->error;
    }

    // Ferme la connexion à la base de données
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
