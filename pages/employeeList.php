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
         <table class="table">
            <tr>
               <td>Employee ID</td>
               <td>First Name</td>
               <td>Last Name</td>
               <td>Gender</td>
               <td>Email</td>
               <td>Race</td>
               <td></td>
            </tr>
            <?php
            $empCount=0;
               while($employee_Lists = mysqli_fetch_assoc($employee_List_result)){
                  echo "<tr><td>".($employee_Lists['employee_id'])."</td>";
                  echo "<td>".($employee_Lists['employee_first_name'])." </td>";
                  echo "<td>".($employee_Lists['employee_last_name'])." </td>";
                  echo "<td>".($employee_Lists['employee_gender'])." </td>";
                  echo "<td>".($employee_Lists['employee_email'])." </td>";
                  echo "<td>".($employee_Lists['employee_race'])." </td>";
                  echo "<td><font color='blue'><a href='#'>View Profile</a></font></td>";
                  echo "</tr>";
               }
            
            ?>
            <div>

            </div>
         </table>
      </div>
   </div>
</div>
<?php
include('../pages/Layout/footer.php');
?>