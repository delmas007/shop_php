<?php
$servername = "127.0.0.1"; // replace with your MySQL server address
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "vente"; // replace with your database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

<?php
include 'config.php';

// rest of your login page code
?>



