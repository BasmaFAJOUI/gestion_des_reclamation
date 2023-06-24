<?php

//include('dbconf.php');
$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";

//creating database connection
$con = mysqli_connect($host, $username, $password, $database);
$sql = "SELECT * FROM Reclamation WHERE Type_Reclamation = 'sanction'";
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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Mon Sidebar</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }
      #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 200px;
        background-color: #333;
        color: #fff;
        padding: 20px;
        box-sizing: border-box;
      }
      #sidebar h2 {
        font-size: 1.2em;
        margin: 0 0 20px 0;
        padding: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: normal;
      }
      #sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
      #sidebar li {
        margin: 0 0 10px 0;
      }
      #sidebar a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }
      #sidebar a:hover {
        background-color: #555;
      }
      #content {
        margin: 0 auto;
        width: 800px;
        padding: 20px;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <div id="sidebar">
      <h2>Menu</h2>
      <ul>
        <li><a href="about_adm.php">À propos</a></li>
        <li><a href="create_account.php">gerer les comptes</a></li>
        <li><a href="messagerie_adm.php">messagerie</a></li>
      </ul>
    </div>
    <div id="content">
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Réclamations à traiter</title>
	<style>
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
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Réclamations à traiter</h1>
	<table>
		<thead>
    <tr>
            <th>ID_Reclamation</th>
            <th>Date_Reclamation</th>
            <th>Etat_Reclamation</th>
            <th>Type_Reclamation</th>
            <th>CNE</th>
            <th>ID_ADM</th>
            <th></th>
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
            ?>
            <tr>
                <td><span id="ID_Reclamation"><?php echo $ID_Reclamation; ?></span></td>
                <td><span id="Date_Reclamation"><?php echo $Date_Reclamation; ?></span></td>
                <td><span id="Etat_Reclamation"><?php echo $Etat_Reclamation; ?></span></td>
                <td><span id="Type_Reclamation"><?php echo $Type_Reclamation; ?></span></td>
                <td><span id="ID_Reclamation"><?php echo $CNE; ?></span></td>
                <td><span id="ID_Reclamation"><?php echo $CIN; ?></span></td>
                <td><span id="ID_Reclamation"><?php echo $ID_ADM; ?></span></td>
                <td><a href="traitementreclamation.php?reclamation_id=<?php echo $ID_Reclamation; ?>">Traiter</a></td>
            </tr>
            <?php
        }
        ?>

		</tbody>
	</table>
</body>
</html>
