<?php
// Récupérer les données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST["student_id"];
    $message = $_POST["message"];

    // Effectuez les opérations nécessaires pour enregistrer le message dans la base de données
    // ...
}
?>
