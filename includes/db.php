<?php
$servername = "localhost";
$username = "admin_archeo-it"; // votre utilisateur MySQL
$password = "Archeo-It2025"; // votre mot de passe MySQL
$dbname = "archeo_it"; // votre nom de base

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>
