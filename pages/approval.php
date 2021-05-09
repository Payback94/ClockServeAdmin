<?php
include('../api/session.php');
include('../pages/Layout/header.php');

?>

<div class="container ms-5 mt-5">
   <div>
      <h1>Approval Section</h1>
      <div>
         <p><i>View employee's leave requests and decide approvals</i></p>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <div class="card p-4">
                  <div class="card-block">
                     <h4>Annual Leave</h4>
                     <p>Employees are requesting annual leave. Approve them here</p>
                     
                  </div>
<a class="btn btn-primary" href="../pages/annual_request.php">Go!</a>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card p-4">
                  <div class="card-body">
                     <h4 class="card-title">Medical Leave</h4>
                     <p class="card-text">Employees are requesting medical leave. Approve them here</p>

                  </div>
                  <a class="btn btn-primary" href="../pages/medical_request.php">Go!</a>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card p-4">
                  <h4>Emergency Leave</h4>
                  <p class="card-text">Something came up! Employee has sent a request. Approve them here.</p>
                  <a class="btn btn-primary" href="../pages/emergency_request.php">Go!</a>
               </div>
            </div>

         </div>
      </div>
   </div>

   <?php
   include('../pages/Layout/footer.php');
   ?>