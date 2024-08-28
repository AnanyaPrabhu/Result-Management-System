<?php
$success = 0;
$user = 0;
$admin_login = 0;
$passwordMismatch = 0; // Added to check password mismatch

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect1.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Check if it is an admin login attempt
    $admin_sql = "SELECT * FROM register2 WHERE username='$username' AND password='$password' AND role='admin'";
    $admin_result = mysqli_query($con, $admin_sql);

    if ($admin_result && mysqli_num_rows($admin_result) == 1) {
        // Admin login success
        // $admin_login = 1;
        // header('location: sign.php'); // Redirect to the admin page
        if ($password != $repassword) {
            // Passwords do not match
            $passwordMismatch = 1;
        }
        else {
        // Passwords match, set user flag
        $admin_login = 1;
    }
    }
    
    else {
        // Check if the username already exists for regular user registration
        $sql = "SELECT * FROM register2 WHERE username='$username' AND password='$password' AND role='user'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                // User already exists
                // $user = 1;
                if ($password != $repassword) {
                    // Passwords do not match
                    $passwordMismatch = 1;
                }
                else {
                // Passwords match, set user flag
                $user = 1;
            }
            } else {
                // Check if the passwords match
                if ($password != $repassword) {
                    // Passwords do not match
                    $passwordMismatch = 1;
                } else {
                    // Insert new user
                    $sql = "INSERT INTO register2(username, password, repassword, role) VALUES ('$username', '$password', '$repassword', 'user')";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        // Signup successful
                        $success = 1;
                        // Use JavaScript to display an alert and redirect
                        echo '<script>';
                        echo 'alert("Success: You are successfully signed up.");';
                        echo 'window.location.href = "sign.php";';
                        echo '</script>';
                        exit; // Ensure that no further PHP code is executed after the redirection
                    } else {
                        die(mysqli_error($con));
                    }
                }
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href='style.css' rel='stylesheet'>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
        .wrapper .btn{
            background:rgb(95, 205, 227);
            color:white;
           font-weight: 600;
        }
body{
    background:url(img2.jpg);
}
        .alert-container {
            margin-bottom: 150px;
        }

        .alert {
            width: 800px;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            text-align: center;
            margin-bottom:64px;
        }

        .input-box {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <header class="text"> -->
            <div class="alert-container">
                <?php
                if($user){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong></strong> You already have an account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                }
                ?>

                <?php
                if($admin_login){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong></strong> You already have an account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                }
                ?>
                

                <?php
                
                if($success){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success </strong> You are successfully signed up.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                    
                }
                ?>
                <?php
                // Display password mismatch error inside a styled div
                if ($passwordMismatch) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error:</strong> Passwords do not match.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
                }
                ?>
            </div>
        </header>

        <div class="box">
            <div class="wrapper">
                <form action="" method="post">
                    <h1>Signup</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" name="username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Retype password" name="repassword" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="register-link">
                        <p>Already have an account? <a href="sign.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
