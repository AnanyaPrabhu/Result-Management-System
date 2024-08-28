<?php
session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect1.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    

    $sql="SELECT * from register2 where username='$username' and password='$password' and role = 'admin'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
          
        $login=1;
        // session_start();
        $_SESSION['username']=$username;
        header('location:http://localhost/Result_management/proj1/indexadmin.html');
       
        }
        else
        {
              
              $invalid=1;

            


        }
    }


    $sql="SELECT * from register2 where username='$username' and password='$password' and role='user'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
          
        $login=1;
        // session_start();
        $_SESSION['username']=$username;
        // header('location:http://localhost/proj1/index.html');
        header('location:http://localhost/Result_management/proj2/user.html');
       
        }
        else
        {
              
              $invalid=1;

            


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
<!------ Include the above in your HEAD tag ---------->
<title>Login</title>
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
    .btn{
        margin-left: -10px;
        margin-top:30px;
        
    }
    
        .container1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
        .alert-container {
            width:1500px;
            /* margin-bottom:10px; */
            margin-bottom:20px;
        } 
       
        .img-fluid{
          height:460px;
        }
        .copy-text{
          padding-left:30px;
        }
        a{
          color:#e03a3c;
          margin-top:40px;
        }
</style>


</head>
<body>
<div class="container1">
        <!-- <header class="text"> -->
            <div class="alert-container">
            <?php
                if($login){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong> You already have an account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                    
                }
                ?>

                <?php
                if($invalid){
                    echo '<div class="alert alert-danger alert-dismissible fade show" id="a1" role="alert">
                    <strong>Error</strong> Invalid credentials
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                }
                ?>
            </div>
       
    <div class="box">
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-5 login-sec">
		    <h2 class="text-center">Login</h2>
		    <form class="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="username" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
    <!-- <div class="copy-text">Forgot your password? <a href="log.php">/a></div> -->
    <a href="#">Forgot your password?</a>
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Retype Password</label>
    <input type="password" class="form-control" placeholder="Retype your password" name="repassword">
  </div> -->
  
  
    <div class="form-check">
    
    <button type="submit" class="btn btn-login btn-block">Submit</button>
  </div>

<div class="copy-text">Don't have an account? <a href="log.php">Signup now</a></div>
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

</html>