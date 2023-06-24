

<?php
// Établir la connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; //Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$connection = mysqli_connect($hostname, $username,$password, $database);
session_start();
// Vérifier si la connexion a réussi
if (!$connection) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données soumises
    $type = $_POST['type'];
    $etudiantId = $_POST['etudiantId'];

    $query = "SELECT * FROM etudiant WHERE user_id=$etudiantId";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $etudiant = mysqli_fetch_assoc($result);
    }
    $cne = $etudiant['CNE'];
    
    


$dateReclamation = date("Y-m-d");

    // Récupérer les données soumises

   

// Insérer la réclamation dans la base de données
   $insertQuery= "INSERT INTO reclamation (CNE, Date_Reclamation,Type_Reclamation) VALUES ('$cne', '$dateReclamation','$type')";
    $insertResult = mysqli_query($connection, $insertQuery);
  
    $reclamationId = mysqli_insert_id($connection);

   
    if ($type === 'note') {
        $matiere = $_POST['matiere'];
        $note = $_POST['note'];

        $insertQuery = "INSERT INTO note ( ID_MAT, Note,ID_Reclamation) VALUES ( ' $matiere','$note',' $reclamationId')";
        $insertResult = mysqli_query($connection, $insertQuery);
        $query_ens = "SELECT * FROM matiere WHERE ID_MAT=$matiere";
    $result_ens = mysqli_query($connection, $query_ens);
    if ($result_ens && mysqli_num_rows($result_ens) > 0) {
        $etude= mysqli_fetch_assoc($result_ens);
    }
    $cin = $etude['CIN'];


           $insertens="UPDATE reclamation   SET CIN = '$cin' WHERE ID_Reclamation = $reclamationId ";
           $insertres= $result_ens = mysqli_query($connection, $insertens);

           
           if ($insertResult) {  
            ?>
            <script>
  alert("Réclamation -note- est  soumise avec succès ");
  history.go(-1);
</script>

<?php


          
           } else {
            ?>
            <script>
  alert(" Erreur lors de la soumission de la réclamation ");
  history.go(-1);
</script>

<?php
               
           }
           
    } elseif ($type === 'absence') {
        $dateAbsence = $_POST['date'];
        $matiereAbsence = $_POST['matiere_abs'];
        if($dateAbsence < $dateReclamation){

        $insertQuery = "INSERT INTO absence ( Date_Absence,ID_MAT,ID_Reclamation) VALUES ('$dateAbsence','$matiereAbsence',' $reclamationId')";
        $insertResult = mysqli_query($connection, $insertQuery);
        $query_ens = "SELECT * FROM matiere WHERE ID_MAT=$matiereAbsence";
        $result_ens = mysqli_query($connection, $query_ens);
        if ($result_ens && mysqli_num_rows($result_ens) > 0) {
            $etude = mysqli_fetch_assoc($result_ens);
        }
        $cin = $etude['CIN'];
        $insertens="UPDATE reclamation 
        SET CIN = '$cin'
        WHERE ID_Reclamation = $reclamationId ";
        $insertres= $result_ens = mysqli_query($connection, $insertens);
    
    }else{$deleteQuery = "DELETE FROM reclamation WHERE ID_Reclamation = $reclamationId";
        $deleteResult = mysqli_query($connection, $deleteQuery);
    }
    if ($insertResult  &&  !$deleteResult) {
        ?>
        <script>
              alert("Réclamation -Absence- est  soumise avec succès ");
                   history.go(-1);
             </script>

<?php
    } else {
        ?>
        <script>
alert(" Erreur lors de la soumission de la réclamation ");
history.go(-1);
</script>

<?php
    }
    
   
    
     }elseif ($type === 'sanction') {
        $description = $_POST['description'];

        $insertQuery = "INSERT INTO sanction ( Description,ID_Reclamation) VALUES ( '$description',' $reclamationId')";
        $insertResult = mysqli_query($connection, $insertQuery);
        
        if ($insertResult) {
            ?>
        <script>
              alert("Réclamation -Sanction- est  soumise avec succès ");
                   history.go(-1);
             </script>

<?php
        } else {
            ?>
            <script>
  alert(" Erreur lors de la soumission de la réclamation ");
  history.go(-1);
</script>

<?php
        }
         


}


}
// Fermer la connexion à la base de données
mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reclamation.ma</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Reclamation.ma (2).png" rel="icon">
  <link href="assets/img/Reclamation.ma (2).png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-TtLjMk8RnYLmdj6TBv7QVYMkZfTqDAh4XzHYE1jDDz0O5FSi+FP1v8QYgsYZXYkRG3soHQ2me/2qVSYqT8dZUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">reclamationma@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+212 517302045</span></i>
    
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="page_etudiant.php">Reclamation.ma</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a class="active" href="#">Espace Enseignant</a></li>
          <li><a href="reclamationetu.php?etudiantId=<?php echo $etudiantId; ?>" class="btn-reclamation">Réclamer</a></li>
          <li><a href="messagerie_etu.php?CNE=<?php echo $CNE; ?>" class="btn-reclamation">Messagerie</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

<body>



</body>
</html>