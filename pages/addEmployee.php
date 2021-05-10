<?php
include('../api/session.php');
include('../pages/Layout/header.php');
?>
<div class="container">
    <div class="col-lg-12 p-5">
        <div class="container bg-primary p-3 rounded mb-3 text-white">
            <h3>Employee Admin Registration</h3>
            <p><i>For remote purposes</i></p>
        </div>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Employees</a>
                </li>
                <li class="breadcrumb-item active">Add New Employee</li>
            </ol>
        </div>
        <?php 
            $fullurl="$_SERVER[REQUEST_URI]";
            if(strpos($fullurl, "register_error=registerEmpty")){
                echo  "<div class='container p-3 rounded bg-danger text-white'>Please fill the fields</div>";
            } elseif (strpos($fullurl, "register_error=addError")){
                echo "<div class='container p-3 rounded bg-danger text-white'>Something bad happened</div>";
            } elseif (strpos($fullurl, "register_error=password_error")) {
                echo "<div class='container p-3 rounded bg-danger text-white'>Match your password please</div>";
            } elseif (strpos($fullurl, "register_error=char")) {
                echo "<div class='container p-3 rounded bg-danger text-white'>Please input only alphabets in name fields</div>";
            }
        ?>
        <div class="card p-5 shadow mt-2 mb-4">
            <form class="form-inline" action="../api/register_api.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Employee First Name:</label>
                            <input class="form-control" type="text" name="emp_first_name">
                        </div>
                        <div class="col">
                            <label>Employee Last Name:</label>
                            <input class="form-control" type="text" name="emp_last_name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Employee Gender:</label>
                            <select class="form-select" name="emp_gender" id="emp_g ender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Employee Race:</label>
                            <input class="form-control" type="text" name="emp_race">
                        </div>
                        <div class="col">
                            <label>Employee Religion:</label>
                            <input class="form-control" type="date" name="emp_birthdate">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Email:</label>
                            <input class="form-control" type="text" name="emp_email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Password:</label>
                            <input class="form-control" type="password" name="emp_password">
                        </div>
                        <div class="col">
                            <label>Confirm Password:</label>
                            <input class="form-control" type="password" name="emp_password1">
                        </div>
                    </div>
                </div>
                <br />
                <input class="btn btn-primary btn-block" type="submit" name="Submit">
                <input class="btn btn-secondary btn-block" type="reset" name="Clear">
            </form>
        </div>
        
    </div>


</div>


<?php
include('../pages/Layout/footer.php');
?>