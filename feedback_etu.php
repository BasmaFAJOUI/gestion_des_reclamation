<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Réponse du traitement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .success {
            color: #4CAF50;
        }

        .error {
            color: #F44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Vérifier si le message a été défini dans l'URL
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $type = $_GET['type'];

            // Afficher le message avec la classe de style appropriée
            if ($type === 'success') {
                echo '<h2 class="success">Succès</h2>';
            } elseif ($type === 'error') {
                echo '<h2 class="error">Erreur</h2>';
            }

            echo '<p>' . $message . '</p>';
        }
        ?>
    </div>
</body>
</html>