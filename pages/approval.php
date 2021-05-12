<?php
include('../api/session.php');
include('../pages/Layout/header.php');

?>

<div class="container p-5">
   <div>
      <h1>Approval Section</h1>
      <div>
         <p><i>View employee's leave requests and decide approvals</i></p>
      </div>

      <div class="container">
         <div class="col-lg-12">
            <?php
            $fullurl = "$_SERVER[REQUEST_URI]";
            if (strpos($fullurl, "status=success_approved")) {
               echo  "<div class='container p-3 mb-2 rounded bg-success text-white'>Approved!</div>";
            } elseif (strpos($fullurl, "status=failed_approved")) {
               echo  "<div class='container p-3 mb-2 rounded bg-danger text-white'>Approval Failed</div>";
            } elseif (strpos($fullurl, "status=success_deny")) {
               echo  "<div class='container p-3 mb-2 rounded bg-secondary text-white'>Request denied</div>";
            } elseif (strpos($fullurl, "status=failed_deny")) {
               echo  "<div class='container p-3 mb-2 rounded bg-danger text-white'>Deny failed</div>";
            }
            ?>
            <div class="row">
               <div class="col-lg-4">
                  <div class="card p-4">
                     <div class="card-block">
                        <img src="../asset/img/travelling.png" height="50">
                        <h4 class="card-title">Annual Leave</h4>
                        <p class="card-text">Employees are requesting annual leave. Approve them here</p>
                     </div>
                     <a class="btn btn-primary" href="../pages/annual_request.php">Go!</a>
                  </div>

               </div>
               <div class="col-lg-4">
                  <div class="card p-4">
                     <div class="card-block">
                        <img src="../asset/img/hospital.png" height="50">
                        <h4 class="card-title">Medical Leave</h4>
                        <p class="card-text">Employees are requesting medical leave. Approve them here</p>
                     </div>
                     <a class="btn btn-primary" href="../pages/medical_request.php">Go!</a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card p-4">
                     <div class="card-block">
                        <img src="../asset/img/alarm.png" height="50">
                        <h4 class="card-title">Emergency Leave</h4>
                        <p class="card-text">Something came up! Employee has sent a request.</p>
                     </div>
                     <a class="btn btn-primary" href="../pages/emergency_request.php">Go!</a>
                  </div>
               </div>

            </div>
         </div>

      </div>
   </div>

   <?php
   include('../pages/Layout/footer.php');
   ?>