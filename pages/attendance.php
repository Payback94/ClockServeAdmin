<?php
include('../api/session.php');
include('../pages/Layout/header.php');
//declare date variable
//did it like this so i can reuse it in here
$today=date("Y-m-d");
$sql_attendance = "SELECT 
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
                  ORDER BY
                     a.attendance_date DESC";


//employee sql
$employee_total_sql = "SELECT * From employee";
$employee_total_result = mysqli_query($conn, $employee_total_sql);
$employee_count = mysqli_num_rows($employee_total_result);
//attendance sql
$attendance_list_today = mysqli_query($conn, $sql_attendance);
$total_attendance_today = mysqli_num_rows($attendance_list_today);

?>
<div class="container">
   <!-- This part shows how many people have attended today -->
   <div class="col-lg-12 p-5">
      <div class="row">
         <h3 class="border-bottom">Attendance Number</h3>
         <div class="col-md-6">
            <div class="card mb-2">
               <div class="card-body"><?php echo $total_attendance_today; ?> DAILY EMPLOYEE ATTENDANCE</div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="card">
               <div class="card-body"><?php echo $employee_count; ?> TOTAL EMPLOYEE</div>
            </div>
         </div>
      </div>
      <!-- This part shows the list of people who attended today -->
      <div class="row mb-3">
         <h4 class="border-bottom">Monthly Attendance Table</h4>
         <div class="col-md-8">
            <div class="card">
               <div class="card-body">This section shows the chart for everyday attendance</div>
               <table class="table">
                  <tr>
                     <td>Employee Name</td>
                     <td>Day</td>
                     <td>Date</td>
                     <td>Time In</td>
                     <td>Time Out</td>
                  </tr>
                  <?php
                  while ($attendance_today = mysqli_fetch_assoc($attendance_list_today)) {
                     echo "<tr><td>" . ucwords($attendance_today['emp_first_name']) ." ". ucwords($attendance_today['emp_last_name'])."</td>";
                     echo "<td>" .$attendance_today['attendance_day']. "</td>";
                     echo "<td>" .$attendance_today['attendance_date']. "</td>";
                     echo "<td>" .$attendance_today['attendance_timeIn']. "</td>";
                     echo "<td>" .$attendance_today['attendance_timeOut']. "</td></tr>";
                  }
                  ?>
               </table>
            </div>
         </div>
         <div class="col-md-8 mt-3">
            <?php include('../pages/Layout/chartdaily.php'); ?>
         </div>
      </div>
      <!-- This part shows the number of employees that has attended over the past months-->
      <div class="row mb-3">
         <h4 class="border-bottom">Monthly Attendance Chart</h4>
         <div class="col-md-8">
            <div class="card">
               <div class="card-body">This section shows the chart for monthly attendance</div>
            </div>
         </div>
      </div>

   </div>




</div>