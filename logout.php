<?php 
    session_start();
    unset($_SESSION['user'] );
    unset($_SESSION['userPassword']);
    header("location: loginPage.php?val=index");
?>