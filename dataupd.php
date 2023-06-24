<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $ID_Reclamation = $_POST['ID_Reclamation'];
    $NouvelEtat = $_POST['status'];
    $Reponse = $_POST['response'];

    // Établir la connexion à la base de données
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "base_rec";

    $connection = mysqli_connect($host, $username, $password, $database);
    $reponse = mysqli_real_escape_string($connection, $Reponse);
    // Vérifier si la connexion a réussi
    if (!$connection) {
        die("Erreur de connexion à la base de données: " . mysqli_connect_error());
    }
   
    // Construire la requête de mise à jour
    $sql = "UPDATE Reclamation SET Etat_Reclamation = '$NouvelEtat' WHERE ID_Reclamation = $ID_Reclamation";
    $sql1 = "UPDATE Reclamation SET message_adm_etu = '$reponse'  WHERE ID_Reclamation = $ID_Reclamation";


    // Exécuter la requête de mise à jour
    if (mysqli_query($connection, $sql) and mysqli_query($connection, $sql1) ) {
       ?>
        <script>
        alert("Le traitement a été soumis  avec succès.");
        history.go(-1);
      </script>
<?php
    } else {
       
        ?>
        <script>
        alert("Erreur lors de traitement");
        history.go(-1);
      </script>
<?php
    }

}
mysqli_close($connection);
?>