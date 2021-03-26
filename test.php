<?php 
    $adminpassword = '536203';
    $hashedpw = password_hash($adminpassword, PASSWORD_DEFAULT);

    echo $hashedpw;
?>