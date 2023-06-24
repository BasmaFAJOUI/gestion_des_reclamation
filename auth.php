
<?php
// Établir la connexion à la base de données
$hostname = 'localhost'; // Remplacez par le nom d'hôte de votre base de données
$username = 'root'; //Remplacez par votre nom d'utilisateur de la base de données
$password = ''; // Remplacez par votre mot de passe de la base de données
$database = 'base_rec'; // Remplacez par le nom de votre base de données

$connection = mysqli_connect($hostname, $username,$password, $database);

// Vérifier si la connexion a réussi
if (!$connection) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Effectuer la logique d'authentification avec la base de données
    if (isset($_GET['type_user'])) {
        $type = $_GET['type_user'];
        // Utilisez la valeur de $type comme nécessaire
      }
      
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    // Vérifier si la requête a réussi
   // ...
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Effectuer la logique d'authentification avec la base de données
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    // Vérifier si la requête a réussi
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // Vérifier le mot de passe
        if ($password === $user['password']) {
            // Récupérer l'ID de l'étudiant
            $userId = $user['user_id'];

            // Vérifier le type d'utilisateur
            if ($user['type_user'] == 'etu') {
                // L'utilisateur est un étudiant
                // Rediriger vers la page des étudiants
                header("Location: page_etudiant.php?userId=$userId");
                exit;
            } elseif ($user['type_user'] == 'ens') {
                // L'utilisateur est un enseignant
                // Rediriger vers la page des enseignants
                header("Location: about_ens.php?userId=$userId");
                exit;
            } elseif ($user['type_user'] == 'admin') {
                // L'utilisateur est un administrateur
                // Rediriger vers la page d'administration
                header("Location: about_adm.php?userId=$userId");
                exit;
            }
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Identifiant incorrect.";
    }
}}
// ...


    

// Fermer la connexion à la base de données
mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page d'authentification</title>

    
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
  .btn-custom {
  background-color: #e96b56; /* Remplacez #ff0000 par votre couleur personnalisée */
  color: #ffff; /* Couleur du texte */
}
</style>
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
        <h1><a href="index.php">Reclamation.ma</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      </header>
      <section></section>
    <h2 class="text-center">Connexion</h2>

    <div class="container">
        
        <form class="mt-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group col-6 mx-auto">
                <label for="email">Email:</label>
                <input type="email" class="form-control d-block" name="email" id="email" required>
            </div>
            <div class="form-group col-6 mx-auto">
                <label for="password">Mot de passe:</label>
                <input type="password" class="form-control d-block" name="password" id="password" required>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-custom" value="Se connecter">
            </div>
        </form>
    </div>



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



