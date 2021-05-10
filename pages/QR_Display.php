<?php
include('../api/session.php');
include('../phpqrcode/qrlib.php');
include('../pages/Layout/header.php');

//qr_string permitted rule
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
//random string
$qr_string = substr(str_shuffle($permitted_chars), 0, 10);
$date = date('Y-m-d H:i:s');
$time = date('H:i:s');
$qr_array = array("session_id" => $qr_string, "date" => $date, "time" => $time);
$qrJSON = json_encode($qr_array);
?>
<div class="container">
    <div class="col-lg-12 d-flex justify-content-center">
    <div class="col-lg-6">
    <div class="container m-5">
    <h4>Scan the QR Code to Clock In</h4>
    </div>
    <div class="card p-5 m-5">
    <?php
        echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=$qrJSON&amp;size=400x400'/>";
        echo '<p>Use your employee app to scan and clock in your attendance</p>';
        echo $qrJSON;
    ?>
    </div>
    </div>
    
        
    </div>


</div>