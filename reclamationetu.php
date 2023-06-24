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

$query = "SELECT * FROM matiere";
$result = mysqli_query($connection, $query);

$query_abs = "SELECT * FROM matiere";
$result_abs = mysqli_query($connection, $query_abs);

    $etudiantId = $_GET['etudiantId'];
    // Utilisez la valeur de $type comme nécessaire
    $query_et = "SELECT * FROM etudiant WHERE user_id=$etudiantId";
    $result_et = mysqli_query($connection, $query_et);
    if ($result_et && mysqli_num_rows($result_et) > 0) {
        $etudiant = mysqli_fetch_assoc($result_et);
    }
    $cne = $etudiant['CNE'];
    mysqli_close($connection);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formulaire de Réclamation</title>
  
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  
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
        <h1><a href="#">Reclamation.ma</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="page_etudiant.php?userId=<?php echo  $etudiantId ; ?>">Espace Etudiant</a></li>
          <li><a  class="active" href="#">Reclamer</a></li>
          <li><a href="messagerie_etu.php?CNE=<?php echo $cne ; ?>" class="btn-reclamation">Messagerie</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      </div>
      </header>
    
      <section>


</section>
<section>


</section>

    <div class="container_etu">
        <form method="POST" action="traitementrec_etu.php">
            <style>
               .container_etu {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
}

h2 {
    position: absolute;
  top: 275px; /* Modifier la valeur pour ajuster la position verticale */
  left:500px;
    text-align: center;
    color: #333;
}

h3 {
    margin-top: 20px;
    color: #555;
}

p {
    margin-bottom: 10px;
}

form {
    margin-top: 50px;
}

.form-group_etu {
    margin-bottom: 30px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 80px;
    border: 10px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #e96b56;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #e96b56;
    
}
.disabled {
      color: gray;
    }
 
            </style>
   
            <div class="form-group_etu">
            <h2>Réclamation</h2>

                <label for="type">Type de réclamation:</label>
                <select name="type" id="type" onchange="toggleFields()">
                <option value="" disabled selected>Choisir le type</option>
                    <option value="note">Note</option>
                    <option value="absence">Absence</option>
                    <option value="sanction">Sanction</option>
                </select>
            </div>

            <div id="noteFields" style="display: none;">
            <div class="form-group_etu">
        <label for="matiere">Matière:</label>
        <select name="matiere" id="matiere">
            <?php
            // Utiliser une boucle for pour générer les options de la liste déroulante
            for ($i = 1; $row = mysqli_fetch_assoc($result); $i++) {
                $matiereId = $row['ID_MAT'];
                $matiereNom = $row['NOM_MAT'];
                ?>
                <option value="<?php echo $matiereId; ?>"><?php echo $matiereNom; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
                <div class="form-group_etu">
                    <label for="note">Note:</label>
                    <input type="number" name="note" id="note">
                </div>
            </div>

            <div id="absenceFields" style="display: none;">
                <div class="form-group">
                    <label for="date">Date d'absence:</label>
                    <style>
  input[type="date"]:read-only {
    color: #999999; /* Couleur grise */
    background-color: #f2f2f2; /* Arrière-plan grisé */
  }
</style>
                    <input type="date" name="date" id="date">
                    <script>
  // Récupérer l'élément input date
  var dateInput = document.getElementById("date");

  // Récupérer la date système
  var systemDate = new Date();

  // Écouter l'événement de modification de la valeur de l'input date
  dateInput.addEventListener("input", function() {
    var selectedDate = new Date(this.value);
    var today = new Date(systemDate.getFullYear(), systemDate.getMonth(), systemDate.getDate());

    // Vérifier si la date est supérieure à la date système
    if (selectedDate > today) {
      this.value = ""; // Réinitialiser la valeur de l'input date
    }
  });
</script>
                </div>
                <div class="form-group_etu">
        <label for="matiere_abs">Matière Absenté:</label>
        <select name="matiere_abs" id="matiere_abs">
            <?php
            // Utiliser une boucle for pour générer les options de la liste déroulante
            for ($i = 1; $row = mysqli_fetch_assoc($result_abs); $i++) {
                $matiere_Id = $row['ID_MAT'];
                $matiere_Nom = $row['NOM_MAT'];
                ?>
                <option value="<?php echo $matiere_Id; ?>"><?php echo $matiere_Nom; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
            </div>

            <div id="sanctionFields" style="display: none;">
                <div class="form-group_etu">
                    <label for="description">Description de la sanction:</label>
                    <input type="text" name="description" id="description">
                </div>
            </div>
            <input type="hidden" name="etudiantId" value="<?php echo $etudiantId; ?>">
            <div class="text-center">
                <input type="submit" value="Soumettre">
            
            </div>

        </form>
    </div>
    
    <script>
        function toggleFields() {
            var type = document.getElementById('type').value;
            var noteFields = document.getElementById('noteFields');
            var absenceFields = document.getElementById('absenceFields');
            var sanctionFields = document.getElementById('sanctionFields');

            if (type === 'note') {
                noteFields.style.display = 'block';
                absenceFields.style.display = 'none';
                sanctionFields.style.display = 'none';
            } else if (type === 'absence') {
                noteFields.style.display = 'none';
                absenceFields.style.display = 'block';
                sanctionFields.style.display = 'none';
            } else if (type === 'sanction') {
                noteFields.style.display = 'none';
                absenceFields.style.display = 'none';
                sanctionFields.style.display = 'block';
            }
        }
        
    </script>

















<!-- ======= Footer ======= -->
<section>


</section>


<section>


</section>


<section>


</section>




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


