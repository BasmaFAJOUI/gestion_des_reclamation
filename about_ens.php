<?php

//include('dbconf.php');
$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";

//creating database connection
$con = mysqli_connect($host, $username, "", $database);
$ensId=$_GET['userId'];
$sql = "SELECT CIN, NOM_EN, PRENOM_EN FROM enseignant WHERE user_id=$ensId";
$result = $con->query($sql);

// Vérifier si des données ont été retournées
if ($result->num_rows > 0) {
    // Récupérer les données de la première ligne de résultat
    $row = $result->fetch_assoc();
    $CIN = $row["CIN"];
    $NOM_EN = $row["NOM_EN"];
    $PRENOM_EN = $row["PRENOM_EN"];
} else {
    echo "Aucune donnée trouvée dans la table.";
}

// Fermer la connexion à la base de données
$con->close();

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
        
          <li><a class="active" href="#">Espace Enseignant</a></li>
          <li><a href="about.php">About</a></li>
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

		body {
			font-family: Arial, sans-serif;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th {
			background-color: #e96b56;
			color: #545454;
		}
	
</style> 
  </header><!-- End Header -->
       
  <section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
              <h3>Informations <span style="color: #e96b56;">Enseignant</span></h3>
                <thead>
                  <tr>
                    <th scope="col">CIN</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Mot de passe</th>


                    
                   
                  </tr>
                </thead>

            <tr>
            <td><?php echo $CIN; ?></td>
                <td><?php echo $NOM_EN; ?></td>
                <td><?php echo $PRENOM_EN; ?></td>
                <td>
  <a href="modifens.php?ensId=<?php echo $ensId; ?>">Changer le mot de passe</a>

  </td>
            </tr>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>


    </div>
  </body>
</html>

<?php

//include('dbconf.php');
$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";

//creating database connection
$con = mysqli_connect($host, $username, $password, $database);
$sql = "SELECT * FROM Reclamation WHERE CIN='$CIN' ";
$result = $con->query($sql);

/*
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

// Fermer la connexion à la base de données
$con->close();
*/
?>

<body>
<section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
	                <h1>Réclamations <span style="color: #e96b56;">à traiter</h1>
	 
		<thead>
    <tr>
           
            <th>Date du Reclamation</th>
            <th>Etat de traitement</th>
            <th>Type de Reclamation</th>
            <th>Étudiant</th>
            <th>Traiter</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            $ID_Reclamation = $row["ID_Reclamation"];
            $Date_Reclamation = $row["Date_Reclamation"];
            $Etat_Reclamation = $row["Etat_Reclamation"];
            $Type_Reclamation = $row["Type_Reclamation"];
            $CNE = $row["CNE"];
            $CIN = $row["CIN"];
            $ID_ADM = $row["ID_ADM"];
            $sql_et = "SELECT * FROM etudiant WHERE CNE='$CNE'";
            $result_et = $con->query($sql_et);
            if ($result_et && mysqli_num_rows($result_et) > 0) {
              $etudiant = mysqli_fetch_assoc($result_et);
            
            $nmET=$etudiant['NOM_ET'];
            $pnET=$etudiant['PRENOM_ET'];}

            ?>
            <tr>
                <td><span id="Date_Reclamation"><?php echo $Date_Reclamation; ?></span></td>
                <td><span id="Etat_Reclamation"><?php echo $Etat_Reclamation; ?></span></td>
                <td><span id="Type_Reclamation"><?php echo $Type_Reclamation; ?></span></td>
                <td><span id="ID_Reclamation"><?php echo $nmET; ?>  <?php echo $pnET; ?></span></td>
                <?php if ($Etat_Reclamation != "clôturé") { ?>
                <td><a href="traitementreclamation_ens.php?reclamation_id=<?php echo $ID_Reclamation; ?>&$ensId=<?php echo $ensId; ?>">Traiter</a></td>
                <?php  } else{ ?>
                  <td><a href="traitementreclamation_ens.php?reclamation_id=<?php echo $ID_Reclamation; ?>&$ensId=<?php echo $ensId; ?>">Retraiter</a></td>
<?php
                }
              ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
	</table>
  
  </section>
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

