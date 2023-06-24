
<?php
// Établir la connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; //Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$connection = mysqli_connect($hostname, $username,$password, $database);
// Vérifier si l'identifiant de la réclamation a été envoyé via la requête POST
if (isset($_POST['reclamation_id'])) {
    // Récupérer l'identifiant de la réclamation à partir de la requête POST
    $reclamationId = $_POST['reclamation_id'];

$queryrec = "SELECT * FROM reclamation WHERE ID_Reclamation=$reclamationId ";
$resultrec = mysqli_query($connection, $queryrec);

if ($resultrec && mysqli_num_rows($resultrec) > 0) {
   
    $etatrec= mysqli_fetch_assoc($resultrec);

}
$etatrec=$etatrec['Etat_Reclamation'];

if($etatrec!='clôturé'){
    // Effectuer la suppression de la réclamation dans la base de données
    $deleteQuery = "DELETE FROM reclamation WHERE ID_Reclamation = $reclamationId";
    $deleteResult = mysqli_query($connection, $deleteQuery);

    
if ($deleteResult) {
    echo "<script>alert('Réclamation annulée avec succès.');</script>";
    echo "<script>window.location.href = document.referrer;</script>";
}else {
        // Erreur lors de l'annulation de la réclamation
        echo "<script>alert('Erreur lors de l'annulation de la réclamation');</script>";
        echo "<script>window.location.href = document.referrer;</script>";  }
 }else{
    // Erreur lors de l'annulation de la réclamation
    echo "<script>alert('Impossible d'annuler ,c'est deja clôturé');</script>";
    echo "<script>window.location.href = document.referrer;</script>";  }
}else {
    // L'identifiant de la réclamation n'a pas été fourni
    echo "<script>alert(' L'identifiant de la réclamation n'a pas été fourni');</script>";
        echo "<script>window.location.href = document.referrer;</script>"; 
}

// Fermer la connexion à la base de données
mysqli_close($connection);
?>