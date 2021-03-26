<?php
session_start();
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Log In - ClockServe</title>
</head>

<body>
    <!-- navigation -->
    <div class="container">
        <div class="row bg-black">
            <div class="col-md-12 mt-5">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <h1>ClockServe</h1>
                        <h3>Log In</h3>
                        <form action="../api/login_api.php" method="post">
                            <div class="form-group">
                                <label>User Name :</label>
                                <input class="form-control" type="text" name="username">
                            </div>
                            <div class="form-group">
                                <label>Password: </label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <br />

                            <input class="btn btn-primary btn-block" type="submit" name="Submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--main display-->
    <div class="main-display">

    </div>
</body>

</html>