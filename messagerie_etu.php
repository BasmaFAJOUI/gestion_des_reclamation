<?php
// Établir la connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; // Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$connection = mysqli_connect($hostname, $username, $password, $database);
// Vérifier si la connexion a réussi
if (!$connection) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérifier si l'utilisateur est connecté (vous devez implémenter le mécanisme d'authentification)

// Récupérer les informations de l'étudiant
$CNE= $_GET['CNE']; // Remplacez par l'ID de l'étudiant connecté
$query_et = "SELECT * FROM etudiant WHERE CNE=$CNE";
    $result_et = mysqli_query($connection, $query_et);
    if ($result_et && mysqli_num_rows($result_et) > 0) {
        $etudiant = mysqli_fetch_assoc($result_et);
    }
    $etudiantId = $etudiant['user_id'];
   
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
        
          <li><a href="page_etudiant.php?userId=<?php echo  $etudiantId ; ?>">Espace Etudiant</a></li>
          <li><a href="reclamationetu.php?etudiantId=<?php echo $etudiantId; ?>" class="btn-reclamation">Réclamer</a></li>
          <li><a  class="active"  href="#" class="btn-reclamation">Messagerie</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
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
 <?php
// Établir la connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; // Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$connection = mysqli_connect($hostname, $username, $password, $database);
// Vérifier si la connexion a réussi
if (!$connection) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérifier si l'utilisateur est connecté (vous devez implémenter le mécanisme d'authentification)

// Récupérer les informations de l'étudiant
$CNE= $_GET['CNE'];

$query = "SELECT * FROM reclamation WHERE CNE =$CNE ";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo '<section class="intro">
    <div class="gradient-custom-1 h-100">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="table-responsive bg-white">
                <table class="table mb-0">
                <h3><span style="color: #e96b56;">Mes </span> Réclamations</h3>';
    echo '<thead>
    <tr>
    <th scope="col">Date Réclamation</th>
    <th scope="col">Type Réclamation</th>
    <th scope="col">Réponse de l\'enseignant</th>
    <th scope="col">message administartive</th>
    
  </tr>
          </thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        $reclamationId = $row['ID_Reclamation'];
        $reclamationdt = $row['Date_Reclamation'];
        $typeReclamation = $row['Type_Reclamation'];
        $msgReclamation_et = $row['message_adm_etu'];
        $msgReclamation = $row['message_ens_adm'];

      
            echo "<tr>
            <td>$reclamationdt</td>
                    <td>$typeReclamation</td>
                    <td>$msgReclamation</td>
                    <td>$msgReclamation_et</td>

                  </tr>";
        
    }

    echo '</tbody>';
    echo '</table>
    </div>
    </div>
  </div>
</div>
</div>
</section>';
} else {
    echo '<p class="no-records">Aucune réclamation trouvée pour cet étudiant.</p>';
}
mysqli_close($connection);
?>


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


