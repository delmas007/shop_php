<?php
// Initialise la session
session_start();

// Annule toutes les variables de session
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirection vers la page de connexion après la déconnexion
header("location:index.php");
exit;
