<?php
include('../api/session.php');
include('../pages/Layout/header.php');

$employee_total_sql = "SELECT * From employee";
$employee_total_result = mysqli_query($conn, $employee_total_sql);
$employee_count = mysqli_num_rows($employee_total_result);

$today=date("Y-m-d");

$attendance_sql = "SELECT 
                        e.emp_first_name as emp_first_name, 
                        e.emp_last_name as emp_last_name, 
                        a.attendance_id, 
                        a.emp_id,
                        a.attendance_day, 
                        a.attendance_date, 
                        a.attendance_timeIn, 
                        a.attendance_timeOut
                    FROM 
                        attendance a                     
                    LEFT JOIN 
                        employee e on a.emp_id = e.emp_id 
                    WHERE
                        a.attendance_date=$today
                    ORDER BY
                        a.attendance_date DESC";
$attendance_result = mysqli_query($conn, $attendance_sql);

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
                        <a class="card-footer text-white clearfix small z-1" href="../pages/annual_request.php">
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
            <h4 class="border-bottom mb-4">Daily Attendance Table</h4>
            <i>Shows who has clocked in recently</i>
            <table class="table">
                <tr class="bg-secondary text-white">
                    <td>#</td>
                    <td>Employee Name</td>
                    <td>Day</td>
                    <td>Date</td>
                    <td>Clock In</td>
                    <td>Lunch Out</td>
                    <td>Lunch In</td>
                    <td>Clock Out</td>
                </tr>
                <?php
                $attendCount = 1;
                while ($attendance_row = mysqli_fetch_assoc($attendance_result)) {
                ?>
                    <tr>
                        <td><?php echo $attendCount ?></td>
                        <td><?php echo ucwords($attendance_row['emp_first_name'])." ".ucwords($attendance_row['emp_last_name']) ?></td>
                        <td><?php echo $attendance_row['attendance_day'] ?></td>
                        <td><?php echo $attendance_row['attendance_date'] ?></td>
                        <td><?php echo $attendance_row['attendance_timeIn'] ?></td>
                        <td>$LunchOut</td>
                        <td>$LunchIn</td>
                        <td><?php echo $attendance_row['attendance_timeOut'] ?></td>
                    </tr>

                <?php
                $attendCount = $attendCount+1;
                }
                ?>

            </table>
        </div>
    </div>
</div>



<?php
include('../pages/Layout/footer.php');
?>