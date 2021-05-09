<?php 
    include('./api/config.php');
    $rsql = "UPDATE request SET request_approval=APPROVED WHERE emp_id=?";
    $result = mysqli_query($conn, $rsql);

    $empID = mysqli_escape_string($_GET['emp_id'], $conn);

    
?>