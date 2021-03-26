<?php
include('../api/session.php');
include('../phpqrcode/qrlib.php');
include('../pages/Layout/header.php');

    //qr_string permitted rule
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    //random string
    $qr_string = substr(str_shuffle($permitted_chars),0,10);
    $date = date('Y-m-d H:i:s');
    $time= date('H:i:s');
    $qr_array = array("session_id"=>$qr_string, "date"=>$date, "time"=>$time);
    $qrJSON = json_encode($qr_array);
?>
<div class="container md-5 mt-5">
<?php 
        echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=$qrJSON&amp;size=500x500'/>";
        echo '<p>Use your employee app to scan and clock in your attendance</p>';
        echo $qrJSON;
        
?>

</div>