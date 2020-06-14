<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: /thalassante-admin/');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../templates/css/style.css">
    <link rel="stylesheet" href="../templates/css/animations.css">
    <link rel="shortcut icon" href="../templates/images/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8bb77e2df3.js" crossorigin="anonymous"></script>
    <title>Thalassanté - Connexion</title>
</head>
<body id="identification">
    <section>
        <div id="background">
            <p>Thalas<span>santé</span></p>
        </div>
        <div id="content">
            <div class="title">
                <h5>Identification</h5>
            </div>
            <div class="form">
                <input type="text" id="login-username" placeholder="Nom d'utilisateur">
                <input type="password" id="login-password" placeholder="Mot de passe">
                <button id="login-button">Connexion</button>
                <div id="message">
                </div>
            </div>
        </div>
    </section>
</body>
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="../src/libraries/login.js"></script>
</html>