<?php
include('../api/session.php');
include('../pages/Layout/header.php');

$employee_List_sql = "SELECT * FROM employee";
$employee_List_result = mysqli_query($conn, $employee_List_sql);


?>
<div class="container ms-5 mt-5">
   <div>
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="#">Employees</a>
         </li>
         <li class="breadcrumb-item active">Employee List</li>
      </ol>
   </div>
   <div class="col-xl-10">
      <div class="row">
         <div class="card p-2">
            <table class="table">
               <tr>
                  <td>#</td>
                  <td>First Name</td>
                  <td>Last Name</td>
                  <td>Gender</td>
                  <td>Email</td>
                  <td>Race</td>
                  <td></td>
               </tr>
               <?php
               $empCount = 1;
               while ($employee_Lists = mysqli_fetch_assoc($employee_List_result)) {
                  $emp_id = $employee_Lists['emp_id'];
                  echo "<tr><td>" . ($empCount) . "</td>";
                  echo "<td>" . ucwords($employee_Lists['emp_first_name']) . " </td>";
                  echo "<td>" . ucwords($employee_Lists['emp_last_name']) . " </td>";
                  echo "<td>" . ucwords($employee_Lists['emp_gender']) . " </td>";
                  echo "<td>" . ($employee_Lists['emp_email']) . " </td>";
                  echo "<td>" . ucwords($employee_Lists['emp_race']) . " </td>";
                  echo "<td><font color='blue'><a href='profile.php?emp_id=$emp_id'>View Profile</a></font></td>";
                  echo "</tr>";
                  $empCount = $empCount+1;
               }

               ?>
               <div>

               </div>
            </table>
         </div>

      </div>
   </div>
</div>
<?php
include('../pages/Layout/footer.php');
?>