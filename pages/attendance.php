<?php
include('../api/session.php');
include('../pages/Layout/header.php');
//declare date variable
//did it like this so i can reuse it in here
$sql_attendance = "SELECT * from attendance";
$today = " where attendance_date = CURDATE()";

//employee sql
$employee_total_sql = "SELECT * From employee";
$employee_total_result = mysqli_query($conn, $employee_total_sql);
$employee_count = mysqli_num_rows($employee_total_result);
//attendance sql
$attendance_list_today = mysqli_query($conn, $sql_attendance.$today);
$total_attendance_today = mysqli_num_rows($attendance_list_today);

?>
<div class="container ms-5 mt-5">
   <!-- This part shows how many people have attended today -->
   <div>
      <h1 class="col-md-8 bg-danger">Under Construction</h1>
      <div class="row mb-5">
         <h3 class="border-bottom">Attendance Number</h3>
         <div class="col-md-4">
            <div class="card mb-2">
               <div class="card-body"><?php echo $total_attendance_today; ?> DAILY EMPLOYEE ATTENDANCE</div>
            </div>
            <div class="card">
               <div class="card-body"><?php echo $employee_count; ?> TOTAL EMPLOYEE</div>
            </div>
         </div>

      </div>
   </div>
   <!-- This part shows the list of people who attended today -->
   <div class="row mb-3">
      <h4 class="border-bottom">Daily Attendance Chart</h4>
      <div class="col-md-8">
         <div class="card">
            <div class="card-body">This section shows the chart for everyday attendance</div>
            <table class="table">
               <tr>
                  <td>Day</td>
                  <td>Date</td>
                  <td>Name</td>
                  <td>Time In 1</td>
                  <td>Time Out 1</td>
               </tr>

               <?php
               while ($attendance_today = mysqli_fetch_assoc($attendance_list_today)) {
                  echo "<tr><td>".($attendance_today[('attendance_day')])."</td>";
                  echo "<td>".($attendance_today[('attendance_date')])."</td>";
                  echo "<td>".($attendance_today[('user_name')])."</td>";
                  echo "<td>".($attendance_today[('attendance_timeIn_1')])."</td>";
                  echo "<td>".($attendance_today[('attendance_timeOut_1')])."</td></tr>";
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