<?php

//include('dbconf.php');
$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";



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
       

          <li><a  href="about_adm.php?userId=1">Espace administration</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Gérer les comptes
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Etudiant
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="consulter_etu.php">voir liste des étudiants</a></li>
            <li><a class="dropdown-item" href="create_account_etu.php">Créer un compte</a></li>
            <li><a class="dropdown-item" href="delete_account_etu.php">Supprimer un compte</a></li>
          </ul>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Enseignant
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="consulter_ens.php">voir liste des enseignants</a></li>
            <li><a class="dropdown-item" href="create_account_ens.php">Créer un compte</a></li>
            <li><a class="dropdown-item" href="delete_account_ens.php">Supprimer un compte</a></li>
          </ul>
        </li>
          </ul>
        </li>
          <li><a  class="active"href="messagerie_adm.php?id_administration=1" class="btn-reclamation">Messagerie</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
        
      </nav><!-- .navbar -->

    </div>
    <style>
   .intro {
  height: 100%;
}

.gradient-custom-1 {
  /* fallback for old browsers */
  background: #fdf7f7;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, #404040, rgb(255, 255, 255));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, #404040, rgb(255, 255, 255),)
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
tbody td {
  font-weight: 500;
  color: #050101;
}
</style> 
  </header><!-- End Header -->





</head>
<body>
<div class="container">
    <div id="content">
        <h1>Messages des enseignants</h1>
        <?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
  // Vérifier si des messages ont été sélectionnés
  if (isset($_POST['messages']) && !empty($_POST['messages'])) {
      // Récupérer les messages sélectionnés
      $selectedMessages = $_POST['messages'];

      // Enregistrer les identifiants des messages sélectionnés dans un cookie
      setcookie('selected_messages', serialize($selectedMessages), time() + (86400 * 30), '/'); // Valide pendant 30 jours
  }
}

// Récupérer les identifiants des messages sélectionnés depuis le cookie
$selectedMessages = isset($_COOKIE['selected_messages']) ? unserialize($_COOKIE['selected_messages']) : [];

$con = mysqli_connect($host, $username, $password, $database);

// Vérification de la connexion
if (!$con) {
  die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Requête pour récupérer les messages des enseignants avec la condition WHERE
$sql = "SELECT ID_Reclamation, CIN, message_ens_adm ,CNE , Etat_Reclamation ,Type_Reclamation FROM reclamation WHERE message_ens_adm <> ''";

$result = mysqli_query($con, $sql);

// Vérification si des messages ont été trouvés
if (mysqli_num_rows($result) > 0) {
  ?>
 <section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
		<thead>
    <tr>
    <th scope="col">CIN de l'enseignant</th>
    <th scope="col">CNE de l'étudiant</th>
    <th scope="col">Type de réclamation</th>
    <th scope="col">État de réclamation</th>
    <th scope="col">message de l'enseignant</th>
  
    <th scope="col"></th>
        </tr>
        </thead>
          <?php
          // Affichage des messages
          while ($row = mysqli_fetch_assoc($result)) {
              $messageId = $row['ID_Reclamation'];
              $cin = $row['CIN'];
              $typerec=$row['Type_Reclamation'];
              $cne=$row['CNE'];
              $message = $row['message_ens_adm'];
              $etatrec=$row['Etat_Reclamation'];
              ?>
              <tr>
                 <!-- <td><?php echo $messageId; ?></td>-->
                  <td><?php echo $cin; ?></td>
                  <td><?php echo $cne; ?></td>
                  <td><?php echo $typerec; ?></td>
                  <td><?php echo $etatrec; ?></td>
                  <td><?php echo $message; ?></td>
                  <td>
                     <!-- <input type="checkbox" name="messages[]" value="<?php echo $messageId; ?>"<?php if (in_array($messageId, $selectedMessages)) echo " checked"; ?>>-->
                  </td>
              </tr>
              <?php
          }
          ?>
      </table>
      <!--
      <input type="submit" name="submit" value="Sauvegarder les messages sélectionnés">
        -->
  
    </div>
    </div>
    </div>
    </div>
        </section>

  <?php
} else {
  echo "Aucun message d'enseignant trouvé.";
}

// Fermeture de la connexion à la base de données
mysqli_close($con);
?>
        </div>
        </div>


<section></section>
<section></section>
<section></section>
<section></section>
<section></section>


<footer id="footer">

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Reclamation.ma</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
