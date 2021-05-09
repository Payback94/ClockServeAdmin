<?php 
    session_start();
    require('./api/config.php');

    //assign data and declaration
    $employee_name      = mysqli_escape_string($conn,$_POST('emp_first_name'));
    $employee_email     = mysqli_escape_string($conn,$_POST('emp_last_name'));
    $employee_gender    = mysqli_escape_string($conn,$_POST('emp_gender'));
    $employee_race      = mysqli_escape_string($conn,$_POST('emp_race'));
    $employee_religion  = mysqli_escape_string($conn,$_POST('emp_religion'));
    $employee_password  = mysqli_escape_string($conn,$_POST('emp_email'));
    $employee_address   = mysqli_escape_string($conn,$_POST('emp_address_1'));

    //sql command
    $sql="Insert into users where values (?,?,?,?) ";
    
    //initialize prepared statement
    $register = mysqli_stmt_init($conn);

?>