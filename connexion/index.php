<?php
// Includez votre fichier de configuration de la base de données
global $mysqli;
include 'config.php';

// Initialisez la session
session_start();

// Vérifiez si l'utilisateur est déjà connecté, si oui, redirigez-le vers la page d'accueil
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}

// Vérifiez si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Vérifiez les informations d'identification de l'utilisateur
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id_user, username, mot_de_passe, role FROM utilisateur WHERE username = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $param_username);

        $param_username = $username;

        if ($stmt->execute()) {
            $stmt->store_result();

            // Vérifiez si l'utilisateur existe, si oui, vérifiez le mot de passe
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($id, $username, $hashed_password, $role);
                if ($stmt->fetch()) {
                    if (password_verify($password, $hashed_password)) {
                        // Le mot de passe est correct, démarrer une nouvelle session
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        $_SESSION["role"] = $role; // Stocke le rôle dans la session

                        // Redirigez l'utilisateur en fonction du rôle
                        if ($_SESSION["role"] == 1) {
                            header("location: ../admin.php");
                        } else {
                            header("location: ../index.php");
                        }
                        exit;
                    } else {
                        // Le mot de passe n'est pas valide
                        $error = "Le mot de passe que vous avez entré n'est pas valide.";

                        // Afficher une boîte de dialogue pop-up avec l'erreur
                        echo '<script>alert("' . $error . '");</script>';
                    }
                }
            } else {
                // L'utilisateur n'existe pas
                $error = "Aucun compte trouvé avec ce nom d'utilisateur.";

                // Afficher une boîte de dialogue pop-up avec l'erreur
                echo '<script>alert("' . $error . '");</script>';
            }
        } else {
            echo "Oops! Quelque chose s'est mal passé. Veuillez réessayer plus tard.";
        }
    }

    // Fermez l'instruction
    $stmt->close();
}

// Fermez la connexion
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <title>MPK-BOUTIK</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <h2>Connexion</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="input-box">
            <input type="text" name="username" placeholder="Entrer votre username" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Entrer votre mot de passe" required>
        </div>
        <div class="input-box button">
            <input type="submit" value="Connexion">
        </div>

        <div class="text">
            <h3>Vous n'avez pas de compte? <a href="#">Créer un compte</a></h3>
        </div>
    </form>
</div>
</body>

</html>
