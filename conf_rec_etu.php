<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $ID_Reclamation = $_POST['ID_Reclamation'];
    $NouvelEtat = $_POST['Etat_Reclamation'];
    $Reponse = $_POST['response'];

   
// Établir la connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; //Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$con = mysqli_connect($hostname, $username,$password, $database);

    // Vérifier si la connexion a réussi
    if (!$con) {
        die("Erreur de connexion à la base de données: " . mysqli_connect_error());
    }


// Exécuter la requête de mise à jour
    if (mysqli_query($con, $sql)) {
        echo "L'état de la réclamation a été mis à jour avec succès.";
        header("Location: response.php?type=success&message=L'état de la réclamation a été mis à jour avec succès.");

    } else {
        echo "Erreur lors de la mise à jour de l'état de la réclamation: " . mysqli_error($con);
        header("Location: response.php?type=error&message=Erreur lors de la mise à jour de l'état de la réclamation: " . mysqli_error($con));

    }}