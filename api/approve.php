<?php 
    include('../api/config.php');
    

    $requestID = mysqli_escape_string($conn, $_POST['request_id']);
    $empID = mysqli_escape_string( $conn, $_POST['emp_id']);

    echo $empID;
    if(isset($_POST['approve'])){
        $rsql = "UPDATE request SET request_approval='Approved' WHERE request_id=? AND emp_id=?";
        $stmt= $conn->prepare($rsql);
        $stmt->bind_param('ss',$empID, $requestID);
        if($stmt->execute()){
            header("Location:../pages/approval.php?status=success_approved");
        } else {
            header("Location:../pages/approval.php?status=failed_approved");
        }

    } elseif(isset($_POST['deny'])){
        $rsql = "UPDATE request SET request_approval='Denied' WHERE request_id=? AND emp_id=?";
        $stmt= $conn->prepare($rsql);
        $stmt->bind_param('ss',$empID, $requestID);
        if($stmt->execute()){
            header("Location:../pages/approval.php?status=success_deny");
        } else {
            header("Location:../pages/approval.php?status=failed_deny");
        }
    }
?>