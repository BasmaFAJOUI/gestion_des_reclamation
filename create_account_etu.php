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
       

        <li><a href="about_adm.php?userId=1">Espace administration</a></li>
          <li class="nav-item dropdown" class="active">
          <a class="active" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Gérer les comptes
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Etudiant
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="consulter_etu.php">voir liste des étudiants</a></li>

            <li><a class="dropdown-item" href="create_account_etu.php">créer un compte</a></li>
            <li><a class="dropdown-item" href="delete_account_etu.php">supprimer un compte</a></li>
          </ul>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Enseignant
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="consulter_ens.php">voir liste des enseignants</a></li>

            <li><a class="dropdown-item" href="create_account_ens.php">créer un compte</a></li>
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
      .btn-custom {
  background-color: #e96b56; /* Remplacez #ff0000 par votre couleur personnalisée */
  color: #ffff; /* Couleur du texte */
  margin-top: 15px;
}
</style> 


  </header><!-- End Header -->
<div class="container">
        <form class="mt-4" action="create_account_etu.php" method="post">
            <h2>Créer un compte étudiant</h2>
            <div class="form-group col-6 mx-auto">
            <label for="CNE">CNE de l'étudiant :</label>
            <input type="text"  class="form-control d-block" name="CNE" id="CNE" required>
            </div>
            <div class="form-group col-6 mx-auto">

            <label for="NOM_ET">Nom de l'étudiant :</label>
            <input type="text"class="form-control d-block" name="NOM_ET" id="NOM_ET" required>
            </div>
            <div class="form-group col-6 mx-auto">

            <label for="PRENOM_ET">Prenom de l'étudiant :</label>
            <input type="text" class="form-control d-block" name="PRENOM_ET" id="PRENOM_ET" required>
            </div>

            <div class="form-group col-6 mx-auto">

            <label for="NIVEAU">Niveau de l'étudiant :</label>
           
            <select class="form-control d-block" name="NIVEAU" id="NIVEAU" required>
                <option value="" disabled selected>Choisir le niveau</option>
                    <option value="1A">1A</option>
                    <option value="2A">2A</option>
                    <option value="3A">3A</option>
                 
                </select>
            </div>

            <div class="form-group col-6 mx-auto">

            <label for="FILIERE">Filière de l'étudiant :</label>
            
            <select name="FILIERE" class="form-control d-block"   id="FILIERE" required>
                <option value="" disabled selected>Choisir la filière</option>
                    <option value="BI">BI</option>
                    <option value="IA">IA</option>
                    <option value="IDSIT">IDSIT</option>
                    <option value="GL">GL</option>
                </select>
            </div>

            <div class="form-group col-6 mx-auto">

            <label for="EMAIL">Email de l'étudiant :</label>
            <input type="email" class="form-control d-block" name="EMAIL" id="EMAIL" required>
            </div>

            <div class="form-group col-6 mx-auto">
    <label for="PASSWORD">Password de l'étudiant :</label>
    <div class="input-group">
        <input type="password" class="form-control col-4" name="PASSWORD" id="PASSWORD" required readonly>
        <div class="input-group-append ">
            <button type="button" class="btn btn-custom ml-2" onclick="generatePassword()">Générer</button>
        </div>
    </div>
    <small id="generatedPassword" class="form-text text-muted"></small>
</div>

<script>
function generatePassword() {
    var characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    var length = 8;
    var password = "";
    
    for (var i = 0; i < length; i++) {
        var randomIndex = Math.floor(Math.random() * characters.length);
        password += characters.charAt(randomIndex);
    }
    
    document.getElementById("PASSWORD").value = password;
    document.getElementById("generatedPassword").textContent = "Mot de passe généré : " + password;
}
</script>






            <div class="text-center">
                <input type="submit" class="btn btn-custom" value="Créer le compte">
            </div>
            
        </form>
        </div>


        <?php
// ...
  



//include('dbconf.php');
$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CNE = $_POST["CNE"];
    $NOM_ET = $_POST["NOM_ET"];
    $PRENOM_ET = $_POST["PRENOM_ET"];
    $NIVEAU = $_POST["NIVEAU"];
    $FILIERE = $_POST["FILIERE"];
    $EMAIL = $_POST["EMAIL"];
    $PASSWORD = $_POST["PASSWORD"];
    $TYPE_USER='etu';

    // Établir une connexion à la base de données
    $con = mysqli_connect($host, $username, "", $database);

    // Vérifier la connexion
    if (!$con) {
        die("Échec de la connexion à la base de données : " . mysqli_connect_error());
    }

    // Insérer l'email et le mot de passe dans la table "user"
    $sqlUser = "INSERT INTO user (type_user, email, password) VALUES ('$TYPE_USER','$EMAIL', '$PASSWORD')";

    // Exécuter la requête
    if (mysqli_query($con, $sqlUser)) {
        // Récupérer l'ID de l'utilisateur inséré
        $userID = mysqli_insert_id($con);

        // Insérer l'étudiant avec l'ID de l'utilisateur dans la table "etudiant"
        $sqlEtudiant = "INSERT INTO etudiant (CNE, NOM_ET, PRENOM_ET, FILIERE, NIVEAU, user_id) 
                        VALUES ('$CNE', '$NOM_ET', '$PRENOM_ET', '$FILIERE', '$NIVEAU', '$userID')";

        // Exécuter la requête
        if (mysqli_query($con, $sqlEtudiant)) {
          echo "<script>alert('Compte étudiant crée avec succès.');</script>";
          echo "<script>window.location.href = document.referrer;</script>";

        } else {
            echo "Une erreur s'est produite lors de la création du compte étudiant : " . mysqli_error($con);
        }
    } else {
        echo "Une erreur s'est produite lors de la création du compte utilisateur : " . mysqli_error($con);
    }

    // Fermer la connexion à la base de données
    mysqli_close($con);
}

// ...

?>
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
