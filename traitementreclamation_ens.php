<?php

$host = "localhost";
        $username = "root";
        $password = "";
        $database = "base_rec";

        // Créer la connexion à la base de données
        $connection = mysqli_connect($host, $username, $password, $database);

        // Vérifier la connexion
        if (!$connection) {
            die("La connexion à la base de données a échoué: " . mysqli_connect_error());
        }

    
$ensId=$_GET['$ensId'];
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
          <li><a class="active" href="about_ens.php?userId=<?php echo $ensId; ?>">Espace Enseignant</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php">Log out</a></li>
        
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    </header>
    <style>
  .btn-custom {
  background-color: #e96b56; /* Remplacez #ff0000 par votre couleur personnalisée */
  color: #ffff; /* Couleur du texte */
}
</style>
<body>
<section></section>


<?php
$reclamationId = $_GET['reclamation_id']; // Récupérer l'identifiant de la réclamation depuis l'URL

// Récupérer les informations de la réclamation à partir de la base de données en fonction de l'ID
$query = "SELECT * FROM reclamation WHERE ID_Reclamation = $reclamationId";
$result = mysqli_query($connection, $query);


if ($result && mysqli_num_rows($result) > 0) {
  $reclamation = mysqli_fetch_assoc($result);
  $typeReclamation = $reclamation['Type_Reclamation'];}

  // Afficher les détails en fonction du type de réclamation
  if ($typeReclamation === 'note') {
    // Afficher les détails spécifiques pour la réclamation de type "Note"
    $query_nt = "SELECT * FROM note WHERE ID_Reclamation = $reclamationId";
    $result_nt = mysqli_query($connection, $query_nt);
    if ($result_nt && mysqli_num_rows($result_nt) > 0) {
      $note = mysqli_fetch_assoc($result_nt);
      $noteId=$note['ID_Note'];
      $Note = $note['Note'];
      $ID_mat = $note['ID_MAT'];
    }
    $query_mat = "SELECT * FROM matiere WHERE ID_MAT =$ID_mat";
    $result_mat = mysqli_query($connection, $query_mat);
    if ($result_mat && mysqli_num_rows($result_mat) > 0) {
      $matiere = mysqli_fetch_assoc($result_mat);
      $matierenm=$matiere['NOM_MAT'];}
      ?>
      <section class="intro">
      <div class="gradient-custom-1 h-100">
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="table-responsive bg-white">
                  <table class="table mb-0">
                  <h3>Details de la <span style="color: #e96b56;">réclamation</span></h3>
                  <h1></h1>
                    <thead>
                      <tr>
                        <th scope="col">Note</th>
                        <th scope="col">Matière concernée </th>
                        <th scope="col">Modifier l'état</th>
                        <th scope="col">Réponse</th>
                        
                       
                      </tr>
                    </thead>
    
                <tr>
                <td><?php echo  $Note ; ?></td>
                    <td><?php echo  $matierenm; ?></td>
                    <form method="POST" action="dataupd_ens.php">
                    <td> 
                    
        <select name="status">
        <option value="En attente">En attente</option>
            <option value="En cours">En cours</option>
            <option value="cloture">Clôturé</option>
        </select>
                   </td>
                   <td>
    <input type="hidden" name="reclamation_id" value="<?php echo $reclamationId; ?>">
    <div class="d-flex align-items-center">
        <div class="flex-grow-1">
            <textarea name="response" rows="1" cols="30" required></textarea>
        </div>
        <div class="ms-auto">
            <input type="submit" class="btn btn-custom" value="Soumettre">
        </div>
    </div>
</td>
</form>

                </tr>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
  } elseif ($typeReclamation === 'absence') {
    $query_abs = "SELECT * FROM absence WHERE ID_Reclamation = $reclamationId";
    $result_abs = mysqli_query($connection, $query_abs);
    if ($result_abs && mysqli_num_rows($result_abs) > 0) {
      $absence = mysqli_fetch_assoc($result_abs);
      $absenceId=$absence['ID_Absence'];
      $dateAbsence = $absence['Date_Absence'];
      $ID_mat = $absence['ID_MAT'];
    }
    $query_mat = "SELECT * FROM matiere WHERE ID_MAT =$ID_mat";
    $result_mat = mysqli_query($connection, $query_mat);
    if ($result_mat && mysqli_num_rows($result_mat) > 0) {
      $matiere = mysqli_fetch_assoc($result_mat);
      $matierenm=$matiere['NOM_MAT'];}

    // Afficher les détails spécifiques pour la réclamation de type "Absence"
   
?>
<section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
              <h3>Details de la <span style="color: #e96b56;">réclamation</span></h3>
              
                <thead>
                  <tr>
                    <th scope="col">Date d'absence</th>
                    <th scope="col">Matiere concernee</th>
                    <th scope="col">Modifier l'état</th>
                    <th scope="col">Réponse</th>
                    
                   
                  </tr>
                </thead>

            <tr>
            <td><?php echo $dateAbsence; ?></td>
                <td><?php echo  $matierenm; ?></td>
                <form method="POST" action="dataupd_ens.php">
                    <td> 
                    
        <select name="status">
        <option value="" disabled selected>Modifier l'état</option>
            <option value="En cours">En cours</option>
            <option value="clôturé">Clôturé</option>
        </select>
                   </td>
                   <td>
    <input type="hidden" name="reclamation_id" value="<?php echo $reclamationId; ?>">
    <div class="d-flex align-items-center">
        <div class="flex-grow-1">
            <textarea name="response" rows="1" cols="30" required></textarea>
        </div>
        <div class="ms-auto">
            <input type="submit" class="btn btn-custom" value="Soumettre">
        </div>
    </div>
</td>
                
                
            </tr>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

}
 else {
  // Réclamation non trouvée dans la base de données
  echo "Réclamation non trouvée.";
}

// Fermer la connexion à la base de données
mysqli_close($connection);

       
      
        ?>
        <section></section>
        <section></section>
        <section></section>
<!-- ======= Footer ======= -->
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
    
