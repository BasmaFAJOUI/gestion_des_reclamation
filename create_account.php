<?php

//include('dbconf.php');
$host = "localhost";
$username = "root";
$password = "";
$database = "base_rec";
$con = mysqli_connect($host, $username, "", $database);
if (!$con) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}


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
    <div class="container">
        <h1>Gestion des comptes:</h1>
        <div class="btn-container">
            <button id="etudiant-btn">Créer un Compte étudiant</button>
            <button id="enseignant-btn">Créer un Compte enseignant</button>
            <button id="etudiant-supp-btn">Supprimer un compte étudiant</button>
            <button id="enseignant-supp-btn">Supprimer un compte enseignant</button>


        </div>
    </div>

    <script>
        // Ajoutez ici votre code JavaScript pour gérer les clics sur les boutons

        document.getElementById("etudiant-btn").addEventListener("click", function() {
            // Redirige vers la page de création de compte étudiant
            window.location.href = "create_account_etu.php";
        });

        document.getElementById("enseignant-btn").addEventListener("click", function() {
            // Redirige vers la page de création de compte enseignant
            window.location.href = "create_account_ens.php";
        });

        document.getElementById("etudiant-supp-btn").addEventListener("click", function() {
            // Redirige vers la page de création de compte étudiant
            window.location.href = "delete_account_etu.php";
        });

        document.getElementById("enseignant-supp-btn").addEventListener("click", function() {
            // Redirige vers la page de création de compte étudiant
            window.location.href = "delete_account_ens.php";
        });
    </script>
</body>
</html>

