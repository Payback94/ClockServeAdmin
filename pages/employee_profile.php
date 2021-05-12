<?php
    include_once("../api/session.php");
    include_once("../api/config.php");
    include('../pages/Layout/header.php');

    $emp_id = mysqli_escape_string($conn,$_GET['emp_id']);

    $sql = "SELECT * FROM employee where emp_id=$emp_id";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    
?>

<div class="container">
    <div class="col-lg-12 p-5">
        <h2>Employee Info</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Employees</a>
            </li>
            <li class="breadcrumb-item active">Employee Info</li>
        </ol>
        <div class="card">
            <div class="card-body">
                <div class="Row">
                    <div class="col-2">
                        <h5>First Name</h5>
                        <p><?php echo ucwords($result['emp_first_name']);?></p>
                    </div>
                    <div class="col-2">
                        <h5>Last Name</h5>
                        <p><?php echo ucwords($result['emp_last_name']);?></p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php
    include('../pages/Layout/footer.php');
    ?>