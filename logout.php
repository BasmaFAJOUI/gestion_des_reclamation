<?php
// Début de la session
session_start();


// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Rediriger vers la page de connexion
    header("Location: index.php");
    exit();
}

// Destruction de la session
session_destroy();

// Redirection vers la page de connexion
header("Location: index.php");
exit();
?>
