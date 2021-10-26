<?php 
    session_start();
    unset($_SESSION['email'] );
    unset($_SESSION['address']);
    unset($_SESSION['fullname']);
    header("location: login.php");

?>