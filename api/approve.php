<?php 
    include('../api/config.php');
    

    $requestID = mysqli_escape_string($conn, $_POST['request_id']);
    $empID = mysqli_escape_string( $conn, $_POST['emp_id']);

    echo $empID.'</br>';
    echo $requestID.'</br>';
    if(isset($_POST['approve'])){
        $rsql = "UPDATE request SET request_approval = 'APPROVED' WHERE request_id = ? AND emp_id=?";
        $stmt= $conn->prepare($rsql);
        $stmt->bind_param('ii', $requestID, $empID);
        
        if($stmt->execute()){
            header("Location:../pages/approval.php?status=success_approved");
        } else {
            header("Location:../pages/approval.php?status=failed_approved");
        }

    } 
    elseif(isset($_POST['deny'])){
        $rsql = "UPDATE request SET request_approval='DENIED' WHERE request_id=? AND emp_id=?";
        $stmt= $conn->prepare($rsql);
        $stmt->bind_param('ii', $requestID,$empID);
        if($stmt->execute()){
            header("Location:../pages/approval.php?status=success_deny");
        } else {
            header("Location:../pages/approval.php?status=failed_deny");
        }
    }
?>