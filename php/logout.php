<?php 
    session_start();
    if( isset( $_SESSION['username']  )){
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        unset($_COOKIE['username']);
        setcookie("username", null, -1, '/');
        unset($_COOKIE['level']);
        setcookie("level", null, -1, '/');
    }
    header('location:../index.php');
?>