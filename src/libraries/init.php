<?php
    require_once('src/modules/User.php');
    session_start();

    if(isset($_GET['d'])){
        session_destroy();
        header('Location: /thalassante-admin/');
    }

?>