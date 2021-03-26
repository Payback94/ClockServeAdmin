<?php 
    include('config.php');
    session_start();
    // $adminusername = mysqli_real_escape_string($conn, $_POST['username']);
    // $adminpassword = mysqli_real_escape_string($conn, $_POST['password']);
    // $hashedpw = password_hash($adminpassword, PASSWORD_DEFAULT);
    // //check in database for admin account
    // $sql = "SELECT admin_id FROM admin WHERE admin_name='$adminusername' && admin_password='$adminpassword'";
    
    // $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];
    // //check if result exists
    // $count = mysqli_num_rows($result);
    // //when result exists bring user to home page
    // //set session to admin name
    // if($count == 1 ){
    //     $_SESSION['adminuser'] = $adminusername;
    //     header("location:../pages/home.php");
    // }
    // else {
    //     header('location:../pages/login.php');
    // }
    //check if email is entered

    if (isset($_POST['username'])){
        $adminusername = mysqli_real_escape_string($conn, $_POST['username']);
    }   else {
        $res['message']="Please enter username!";
        echo json_encode($res);
    }
    
    //checkk if password is entered
    if (isset($_POST['password'])){
        $adminpassword = mysqli_real_escape_string($conn,$_POST['password']);
    } else {
        $res['message']="Please enter password!";
        echo json_encode($res);
    }
    //prepared statement to check if user under the email exists
    if($stmt = $conn ->prepare('SELECT admin_id, admin_password from admin Where admin_name=?')){
        //bind string parameter to statement
        $stmt->bind_param('s', $adminusername);
        $stmt->execute();
        //store result from database after successful query
        $stmt->store_result();
        if ($stmt->num_rows>0){
            $stmt->bind_result($id, $dbpassword);
            $stmt->fetch();
            //account exist, take user info
            if(password_verify($adminpassword, $dbpassword)){
                $_SESSION['adminid'] = $id;
                $_SESSION['adminuser'] = $adminusername;
                header("location:../pages/home.php");
            }
            else 
            {
            echo 'Incorrect password';
            header('location:../pages/login.php');
            }
        }

        $stmt->close();
    }
    //incorrect username
    else {
        echo 'Incorrect user name';
    }
    ?>
