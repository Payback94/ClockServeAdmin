<?php
include('../api/session.php');
include('../pages/Layout/header.php');
?>
<div class="container ms-5 mt-5">
    <h1>Enter new employee details here.</h1>
    <p><i>For remote purposes</i></p>
    <form class="form-inline" action="../api/register_api.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Employee First Name:</label>
                    <input class="form-control" type="text" name="emp_first_name">
                </div>
                <div class="col-md-3">
                    <label>Employee Last Name:</label>
                    <input class="form-control" type="text" name="emp_last_name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <label>Employee Gender:</label>
                    <select class="form-control" name="emp_gender" id="emp_gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Employee Race:</label>
                    <input class="form-control" type="text" name="emp_race">
                </div>
                <div class="col-md-2">
                    <label>Employee Religion:</label>
                    <input class="form-control" type="text" name="emp_religion">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>Email:</label>
                    <input class="form-control" type="text" name="emp_email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Password:</label>
                    <input class="form-control" type="password" name="emp_password">
                </div>
                <div class="col-md-3">
                    <label>Confirm Password:</label>
                    <input class="form-control" type="password" name="emp_confirm_password">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>Address Line 1: </label>
                    <input class="form-control" type="text" name="emp_address_1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Address Line 2: </label>
                    <input class="form-control" type="text" name="emp_address_2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Address Line 3: </label>
                    <input class="form-control" type="text" name="emp_address_3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label>Zip Code: </label>
                    <input class="form-control" type="text" name="emp_address_4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label>State: </label>
                    <input class="form-control" type="text" name="emp_address_5">
                </div>
            </div>


        </div>
        <br />
        <input class="btn btn-primary btn-block" type="submit" name="Submit">
    </form>
</div>


<?php
include('../pages/Layout/footer.php');
?>