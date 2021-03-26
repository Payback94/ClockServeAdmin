<?php
include('../api/session.php');
include('../pages/Layout/header.php');

$employee_total_sql = "SELECT * From employee";
$employee_total_result = mysqli_query($conn, $employee_total_sql);
$employee_count = mysqli_num_rows($employee_total_result);


?>

<!--main display-->
<div class="container ms-5 mt-5">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <div class="row mb-2">
        <div class="col-xl-3 mb-5">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </div>

                    <div class="mr-5 mb-2 text-white">
                        <?php echo $employee_count; ?>
                        Employee(s)
                    </div>
                    <div class="row">
                        <a class="card-footer text-white clearfix small z-1" href="../pages/employeeList.php">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-5">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </div>

                    <div class="mr-5 mb-2 text-white">
                        Attendance
                    </div>
                    <div class="row">
                        <a class="card-footer text-white clearfix small z-1" href="">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-5">
            <div class="card bg-danger">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5 mb-2 text-white">
                        Requests
                    </div>
                    <div class="row">
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div></div>
        <div>
            <h4 class="border-bottom mb-4">Attendance Table</h4>
            <i>Shows who has clocked in recently</i>
            <table class="table">
                <tr class="bg-secondary text-white">
                    <td>#</td>
                    <td>Employee ID</td>
                    <td>Employee Name</td>
                    <td>Day</td>
                    <td>Date</td>
                    <td>Clock In 1</td>
                    <td>Clock Out 1</td>
                    <td>Clock In 2</td>
                    <td>Clock Out 2</td>
                </tr>
                <tr>
                    <td>$number</td>
                    <td>$emp_id</td>
                    <td>$emp_name</td>
                    <td>$emp_day</td>
                    <td>$attendDate</td>
                    <td>$attendTime1</td>
                    <td>$attendTime1</td>
                    <td>$attendTime2</td>
                    <td>$attendTime2</td>
                </tr>
            </table>
        </div>
    </div>
</div>



<?php
include('../pages/Layout/footer.php');
?>