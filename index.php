<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/style.css">
    <link rel="stylesheet" href="templates/css/animations.css">
    <link rel="shortcut icon" href="templates/images/favicon.png" type="image/x-icon">
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
                    <p>Clément Caillat</p>
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
            <ul>
                <li class="selected">
                    <a href="/thadminpanel/">
                        <div class="nav-button-icon">
                            <i class="fas fa-columns"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="agenda.php">
                        <div class="nav-button-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Agenda</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="slack.php">
                        <div class="nav-button-icon">
                            <i class="fab fa-slack"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Slack</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <div class="nav-button-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Contact</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="newsletter.php">
                        <div class="nav-button-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Newsletter</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="adherants.php">
                        <div class="nav-button-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Adhérents</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="equipe.php">
                        <div class="nav-button-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Équipe</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="content.php">
                        <div class="nav-button-icon">
                            <i class="fas fa-pager"></i>
                        </div>
                        <div class="nav-button-title">
                            <span>Contenu</span>
                        </div>
                    </a>
                </li>
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
    <script>
</script>
</body>
<!-- JQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!-- VueJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<!-- ChartJS CDN -->
<script src="src/libraries/Chart.bundle.min.js"></script>
<!-- FontAwesome CDN -->
<script src="https://kit.fontawesome.com/8bb77e2df3.js" crossorigin="anonymous"></script>
<script src="src/libraries/components.js"></script>
<script src="src/libraries/app.js"></script>
</html> 