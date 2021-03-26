<?php 
    include('config.php');
    session_start();

    $user_check = $_SESSION['adminuser'];

    $ses_sql = mysqli_query($conn, "SELECT admin_name from admin where admin_name = '$user_check'");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['admin_name'];

    if(!isset($_SESSION['adminuser'])){
        header('location:../pages/login.php');
        die();
    }
?>