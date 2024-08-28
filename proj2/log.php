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
                        echo 'window.location.href = "log1.php";';
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
<html>
    <head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Sign up</title>
<!------ Include the above in your HEAD tag ---------->
<link href="log.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--  -->
<style>
    .row{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        margin-top: 0px;
        margin-bottom:75px;
    }
    button{
        margin-left: 150px;
    }
        .container1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
        .alert-container {
            width:1391px;
            /* margin-bottom:10px; */
            padding-top:60px;
        } 
       
        .img-fluid{
          height:460px;
        }
        .copy-text{
          padding-left:60px;
        }
</style>


</head>
<body>
<div class="container1">
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
        <!-- </header> -->
    <div class="box">
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-5 login-sec">
		    <h2 class="text-center">Signup</h2>
		    <form class="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="username" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Retype Password</label>
    <input type="password" class="form-control" placeholder="Retype your password" name="repassword" required>
  </div>
  
  
    <div class="form-check">
    
    <button type="submit" class="btn btn-login">Register</button>
  </div>

<div class="copy-text">Already have an account? <a href="log1.php">Login now</a></div>
 </form>
		</div>
		<div class="col-md-7 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="st2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="st1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
    </div>
    </div>
    
            </div>	   
		    
		</div>
	</div>
</div>
</section>
</div>
</body>
</head>
</html>