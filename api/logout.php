<?php
    session_start();
//remove session
//redirect to login page
    if(session_destroy()) {
        header('location:../pages/login.php');
     }
?>
