<?php
if(!isset($_POST['username']) && !isset($_POST['password'])){
    header('Location: /thalassante-admin/identification.php');
}
    require_once('../modules/User.php');
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));
    $u = new User;
    $error = $u->login($username, $password);
    if($error != ""){
        echo $error;
    }else{
        session_start();
        $_SESSION['user'] = $u;
    }
?>