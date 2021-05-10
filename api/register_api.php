<?php 
    session_start();
    require('../api/config.php');

    //assign data and declaration
    $employee_first_name      = mysqli_escape_string($conn,$_POST['emp_first_name']);
    $employee_last_name     = mysqli_escape_string($conn,$_POST['emp_last_name']);
    $employee_gender    = mysqli_escape_string($conn,$_POST['emp_gender']);
    $employee_birthdate    = mysqli_escape_string($conn,$_POST['emp_birthdate']);
    $employee_race      = mysqli_escape_string($conn,$_POST['emp_race']);
    $employee_email  = mysqli_escape_string($conn,$_POST['emp_email']);
    $employee_password  = mysqli_escape_string($conn,$_POST['emp_password']);
    $employee_password1    = mysqli_escape_string($conn,$_POST['emp_password1']);

    //sql command
    $sql="INSERT INTO employee(
        emp_first_name, 
        emp_last_name, 
        emp_birth_date, 
        emp_email, 
        emp_password,
        emp_gender, 
        emp_race) 
        VALUES 
        (?,?,?,?,?,?,?)";

    if(empty($employee_first_name) || empty($employee_last_name) || empty($employee_email) || empty($employee_gender) || empty($employee_birthdate) || empty($employee_race) || empty($employee_password) || empty($employee_password1)) 
    {
        header('Location:../pages/addEmployee.php?register_error=passwordError');
        exit(); 
    } else {
        $stmt = $conn->prepare($sql);
        
        if($employee_password == $employee_password1){
            $hashed = password_hash($employee_password, PASSWORD_DEFAULT);

            $stmt->bind_param('sssssss', 
                $employee_first_name, 
                $employee_last_name, 
                $employee_birthdate, 
                $employee_email, 
                $hashed,
                $employee_gender,
                $employee_race
            );
            if($stmt->execute()){
                echo 'success';
            } else {
                header('Location:../pages/addEmployee.php?register_error=addError');
            }
        } else {
            header('Location:../pages/addEmployee.php?register_error=password_error');
        }
    }
    
    
    
?>