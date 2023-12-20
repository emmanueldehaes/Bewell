<!-- Page de déconnexion -->

<?php
session_start();
$_SESSION = array();
session_destroy();
$deco = home_url('/connexion');
    header("Location: $deco");
?>