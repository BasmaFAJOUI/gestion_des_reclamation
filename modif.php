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
$etudiantId = $_GET['etudiantId'];
$querymp="SELECT * FROM user WHERE user_id = '$etudiantId'";
$resultmp = mysqli_query($connection, $querymp);

if ($resultmp && mysqli_num_rows($resultmp) > 0) {
    $user = mysqli_fetch_assoc($resultmp);
} else {
    die("Étudiant non trouvé.");
}
$password=$user['password'];



 // ID de l'étudiant dont vous souhaitez récupérer les réclamations
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
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
   
.btn-custom {
  background-color: #e96b56; /* Remplacez #ff0000 par votre couleur personnalisée */
  color: #ffff; /* Couleur du texte */
}
</style> 

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
       
          <li><a class="active" href="page_etudiant.php?userId=<?php echo $etudiantId; ?>">Espace Etudiant</a></li>
          <li><a href="reclamationetu.php?etudiantId=<?php echo $etudiantId; ?>" class="btn-reclamation">Réclamer</a></li>
          <li><a href="messagerie_etu.php?CNE=<?php echo $CNE; ?>" class="btn-reclamation">Messagerie</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    
  </header><!-- End Header -->

  <section></section>
  <h2 class="text-center">changer le mot de passe</h2>

<div class="container">
  <form class="mt-4" method="POST" action="">
    <div class="form-group col-6 mx-auto">
        <label for="old_password">Ancien mot de passe :</label>
        <input type="password" class="form-control d-block" name="old_password" id="old_password" required>
    </div>
    <div class="form-group col-6 mx-auto">
        <label for="new_password">Nouveau mot de passe :</label>
        <input type="password" class="form-control d-block" name="new_password" id="new_password" required>
    </div>
    <div>
    <input type="hidden" name="etudiantId" value="<?php echo $etudiantId; ?>">
    </div>
    <section></section>
    <div class="text-center">
        <input type="submit" class="btn btn-custom" value="Modifier le mot de passe">
    </div>
</form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Récupérer les valeurs saisies dans le formulaire
$oldPassword = $_POST['old_password'];
$newPassword = $_POST['new_password'];
$etudiantId=$_POST['etudiantId'];


// Vérifier la connexion à la base de données
$querymp="SELECT * FROM user WHERE user_id = $etudiantId";
$resultmp = mysqli_query($connection, $querymp);

if ($resultmp && mysqli_num_rows($resultmp) > 0) {
    $user = mysqli_fetch_assoc($resultmp);

$realoldpassword=$user['password'];

// Récupérer le mot de passe actuel de l'utilisateur depuis la base de données

    // Comparer le mot de passe actuel avec l'ancien mot de passe saisi
    if ($oldPassword === $realoldpassword) {
        // Les mots de passe correspondent, procéder à la mise à jour du mot de passe dans la base de données
        

        $updateSql = "UPDATE user SET password = '$newPassword' WHERE user_id = '$etudiantId'";

        if ($connection->query($updateSql) === TRUE) {
            ?>
            <script>
              alert("Mot de passe modifié avec succès  ");
                   history.go(-1);
             </script>
             <?php
        } else {
            ?>
            <script>
              alert("Erreur lors de la mise à jour du mot de passe  ");
                   history.go(-1);
             </script>
             <?php
            echo   $connection->error;
        }
    } else {
        // Les mots de passe ne correspondent pas, afficher un message d'erreur
        echo "Ancien mot de passe incorrect";
        
    }
}else {
    echo "Utilisateur introuvable";
}}

// Fermer la connexion à la base de données
$connection->close();
?>
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
    <!-- Ajouter les scripts JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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



