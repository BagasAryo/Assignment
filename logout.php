<?php
    // session_start();
    // session_unset();
    // session_destroy();
    // header('location: index.php');
    session_start();
    unset($_SESSION["username"]);
    header("location: index.php");
?>