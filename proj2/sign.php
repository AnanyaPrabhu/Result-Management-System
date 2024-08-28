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
        header('location:http://localhost/proj1/indexadmin.html');
       
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
        header('location:http://localhost/proj1/index.html');
       
        }
        else
        {
              
              $invalid=1;

            


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
        body{
            background:url(img2.jpg);
        }
        .wrapper .btn{
            background:rgb(95, 205, 227);
            color:white;
           font-weight: 600;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
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
            margin-bottom:100px;
        }

        .input-box {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="text">
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
        </header>
   <div class="box">
            <div class="wrapper">
                <form action="sign.php" method="post">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" name="username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="reg1.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>