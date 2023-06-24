<?php
// Récupérer les valeurs saisies dans le formulaire
$oldPassword = $_POST['old_password'];
$newPassword = $_POST['new_password'];
$etudiantId=$_POST['etudiantId'];

// Récupérer les valeurs saisies dans le formulaire


// Établir une connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; // Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$connection = mysqli_connect($hostname, $username, $password, $database);

// Vérifier si la connexion a réussi
if (!$connection) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
// Vérifier la connexion à la base de données
$querymp="SELECT * FROM user WHERE user_id = $etudiantId";
$resultmp = mysqli_query($connection, $querymp);

if ($resultmp && mysqli_num_rows($resultmp) > 0) {
    $user = mysqli_fetch_assoc($resultmp);

$realoldpassword=$user['password'];

// Récupérer le mot de passe actuel de l'utilisateur depuis la base de données

    // Comparer le mot de passe actuel avec l'ancien mot de passe saisi
    if (password_verify($oldPassword, $realoldpassword)) {
        // Les mots de passe correspondent, procéder à la mise à jour du mot de passe dans la base de données
        $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $updateSql = "UPDATE user SET password = '$newHashedPassword' WHERE user_id = '$etudiantId'";

        if ($connection->query($updateSql) === TRUE) {
            echo "Mot de passe mis à jour avec succès";
        } else {
            echo "Erreur lors de la mise à jour du mot de passe : " . $connection->error;
        }
    } else {
        // Les mots de passe ne correspondent pas, afficher un message d'erreur
        echo "Ancien mot de passe incorrect";
    }
}else {
    echo "Utilisateur introuvable";
}

// Fermer la connexion à la base de données
$conn->close();
?>

// Effectuer la vérification de l'ancien mot de passe et la mise à jour du nouveau mot de passe dans la base de données
// Veuillez utiliser les méthodes de sécurité appropriées, comme le hachage du mot de passe, lors de la mise à jour

// Rediriger l'utilisateur vers une page de confirmation
header('Location: confirmation_mot_de_passe.php');
exit();
?>
