<?php
    require_once('src/libraries/init.php');
    if(!isset($_SESSION['user'])){
        header("Location: login/");
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/style.css">
    <link rel="stylesheet" href="templates/css/animations.css">
    <link rel="shortcut icon" href="templates/images/favicon.png" type="image/x-icon">
    <!-- VueJS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <!-- JQuery CDN -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <!-- ChartJS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/8bb77e2df3.js" crossorigin="anonymous"></script>
    <script src="src/modules/utils.js"></script>
    <script src="src/libraries/app.js"></script>
    <title>Thalassanté - Dashboard</title>
</head>
<body>
    <div class="loading" rel="preload">
        <img src="templates/images/logo.png">
        <img id="loader" src="templates/images/loader.png">
    </div>
    <?php require_once('templates/header.php'); ?>
    <main>
        <nav>
            <div class="options">
                <div class="user">
                    <img src="templates/images/avatars/avatar.jpg" alt="">
                    <p><?php echo $_SESSION['user']->username; ?></p>
                </div>
                <div class="search">
                    <form method="GET">
                        <div class="search-box">
                            <input type="search" name="q" id="admin_search" autocomplete="off" placeholder="Rechercher">
                            <i class="fas fa-search"></i>
                        </div>
                    </form>
                </div>
            </div>
            <ul id="navigation-menu">
                <nav-menu-button :active="true" title="Dashboard" link="/thalassante-admin/" icon="fas fa-tachometer-alt"></nav-menu-button>
                <nav-menu-button title="Agenda" link="agenda/" icon="far fa-calendar-alt"></nav-menu-button>
                <nav-menu-button title="Tâches" link="tasks/" icon="fas fa-list-ul"></nav-menu-button>
                <nav-menu-button title="Slack" link="slack/" icon="fab fa-slack"></nav-menu-button>
                <nav-menu-button title="Diffusion" link="flux/" icon="fas fa-rss"></nav-menu-button>
                <nav-menu-button title="Contact" link="contact/" icon="fas fa-book-open"></nav-menu-button>
                <nav-menu-button title="Équipe" link="team/" icon="fas fa-users"></nav-menu-button>
                <nav-menu-button title="Newsletter" link="newsletter/" icon="fas fa-envelope"></nav-menu-button>
                <nav-menu-button title="Adhérents" link="people/" icon="fas fa-user-friends"></nav-menu-button>
                <nav-menu-button title="Fiches" link="sheets/" icon="fas fa-file-alt"></nav-menu-button>
                <nav-menu-button title="Serveur" link="server/" icon="fas fa-server"></nav-menu-button>
            </ul>
        </nav>
        <div class="wrapper" id="dashboard">
            <div class="box main-process">
                <canvas id="myChart"></canvas>
            </div>
            <div class="box" id="instagram-followers">
                {{ followers }}
            </div>
            <div class="box">
                <chart class="success"></chart>
            </div>
            <div class="box">

            </div>
            <div class="box">

            </div>
            <div class="box" id="line">

            </div>
            <div class="box">

            </div>
            <div class="box">

            </div>
            <div class="box">

            </div>
            <div class="box">

            </div>
        </div>
    </main>
    <script src="src/modules/components.js"></script>
</body>
</html> 