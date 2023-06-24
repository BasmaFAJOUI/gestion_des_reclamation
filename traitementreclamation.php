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
       

          <li><a class="active" href="about_adm.php?userId=1">Espace administration</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Gerer les comptes
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Etudiant
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="consulter_etu.php">voir liste des étudiants</a></li>

            <li><a class="dropdown-item" href="create_account_etu.php">creer un compte</a></li>
            <li><a class="dropdown-item" href="delete_account_etu.php">supprimer un compte</a></li>
          </ul>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Enseignant
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="consulter_ens.php">voir liste des enseignants</a></li>

            <li><a class="dropdown-item" href="create_account_ens.php">creer un compte</a></li>

            <li><a class="dropdown-item" href="delete_account_ens.php">supprimer un compte</a></li>
          </ul>
        </li>
          </ul>
        </li>
          <li><a href="messagerie_adm.php?id_administration=0" class="btn-reclamation">Messagerie</a></li>
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

<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";

// Créer la connexion à la base de données
$con = mysqli_connect($host, $username, $password, $database);

// Vérifier la connexion
if (!$con) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

$reclamationID = $_GET['reclamation_id'];

$sql = "SELECT * FROM Reclamation WHERE ID_Reclamation = $reclamationID";
$sql1 = "SELECT Description FROM Sanction WHERE ID_Reclamation = $reclamationID";

$result = $con->query($sql);
$result1 = $con->query($sql1);

// Vérifier si des données de description ont été retournées
if ($result1->num_rows > 0) {
  $row1 = $result1->fetch_assoc();
  $Description = $row1["Description"];
} else {
  $Description = "";
}

// Vérifier si des données ont été retournées
if ($result->num_rows > 0) {
    // Récupérer les données de la première ligne de résultat
    $row = $result->fetch_assoc();
    $ID_Reclamation = $row["ID_Reclamation"];
    $Date_Reclamation = $row["Date_Reclamation"];
    $Etat_Reclamation = $row["Etat_Reclamation"];
    $Type_Reclamation = $row["Type_Reclamation"];
    $CNE = $row["CNE"];
    $CIN = $row["CIN"];
    $ID_ADM = $row["ID_ADM"];
} else {
    echo "Aucune donnée trouvée dans la table.";
}
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire
  $ID_Reclamation = $_POST['ID_Reclamation'];
  $response = $_POST['response'];

  // Vérifier si les valeurs sont valides
  if (!empty($ID_Reclamation) && !empty($response)) {
      // Créer la connexion à la base de données
      $con = mysqli_connect($host, $username, $password, $database);

      // Vérifier la connexion
      if (!$con) {
          die("La connexion à la base de données a échoué: " . mysqli_connect_error());
      }

      // Échapper les valeurs pour éviter les injections SQL
      $ID_Reclamation = mysqli_real_escape_string($con, $ID_Reclamation);
      $response = mysqli_real_escape_string($con, $response);

      // Mettre à jour le champ message_adm_etu dans la table reclamation
      $sql = "UPDATE Reclamation SET message_adm_etu = '$response' WHERE ID_Reclamation = $ID_Reclamation";

      // Exécuter la requête
      if (mysqli_query($con, $sql)) {
          echo "La réponse a été ajoutée avec succès.";
      } else {
          echo "Erreur lors de l'ajout de la réponse: " . mysqli_error($con);
      }

      // Fermer la connexion à la base de données
      mysqli_close($con);
  } else {
      echo "Veuillez remplir tous les champs du formulaire.";
  }
}

// Fermer la connexion à la base de données
$con->close();
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
                  <th scope="col">Date de réclamation</th>
                  <th scope="col">Type de réclamation </th>
                  <th scope="col">Modifier l'état</th>
                  <th scope="col">Description</th>
                  <th scope="col">Réponse</th>
                  
                 
                </tr>
              </thead>

          <tr>
          <td><?php echo  $Date_Reclamation ; ?></td>
              <td><?php echo  $Type_Reclamation; ?></td>
              <form method="POST" action="dataupd.php">
              <td> 
              
  <select name="status">
      <option value="en_attente">En cours</option>
      <option value="cloture">Clôturé</option>
  </select>
             </td>
             <td><input type="text" id="Description" name="Description" value="<?php echo $Description;?>" readonly> </td>

             <td>
<input type="hidden" name="ID_Reclamation" value="<?php echo $ID_Reclamation; ?>">
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
<section></section>
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








