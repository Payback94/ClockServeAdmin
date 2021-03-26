<?php 
    define('DB_SERVER', 'localhost');
    define('DB_DATABASE', 'ClockServe');
    define('DB_USERNAME', 'root');
    define('DB_PASWORD', '');

    //create connection
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASWORD,DB_DATABASE);
    //check connection
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }
?>