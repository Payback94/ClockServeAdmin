<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>ClockServe Admin</title>
</head>

<body> 
     <!-- navigation -->
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ClockServe</h3>
            </div>

            <ul class="list-unstyled components">
                <p><a href="../index.php">Welcome <?php echo $login_session; ?></a> </p>
                <li class="active">
                    <a href="#homeSubmenu" aria-expanded="false">Employees</a>
                    <ul class="list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../pages/employeeList.php">Employee List</a>
                        </li>
                        <li>
                            <a class="nav-link" href="../pages/addEmployee.php">Add Employee</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../pages/attendance.php">Attendance List</a>
                </li>
                <li>
                    <a href="../pages/approval.php">Requests Approvals</a>
                </li>
                <li>
                    <a href="../pages/QR_Display.php">QR Display</a>
                </li>
                <li>
                    <a href="../api/logout.php">Log Out</a>
                </li>
            </ul>
        </nav>

