<?php
require('./api/config.php');
session_start();
if (!isset($_SESSION['adminid'])) {
    header('Location:pages/login.php');
}   else {
    header('Location:pages/home.php');
}

?>
