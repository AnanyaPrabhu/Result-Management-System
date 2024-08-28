
<?php
ini_set('display_error',1);
ini_set('display_startup_error',1);
error_reporting(E_ALL);

session_start(); // Start the session at the beginning of your script

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'result';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if (!$con) {
    die(mysqli_error($con));
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = $_POST['name'];
//     $usn = $_POST['usn'];

    $check_query = "SELECT * FROM result1 ORDER BY sgpa DESC";
    $check_result = mysqli_query($con, $check_query);

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rank List Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <link href="css/styles.css" rel="stylesheet" />
  <link href="assets/css/styles.css" rel="stylesheet">
<style>
 .container{
  margin-right:50px;
 }
 .box1{
    margin-right:290px;
    margin-top:20px;
  }
  #footer{
   
    width:1980px;
    height:100px;
    
    left:0px;
    right:0px;
    bottom:0px;
   margin-top:350px;
    padding:2px;
    
  }
  .text-md-end {
    margin-right:50px;
  }
  #c1{
    /* background-color: rgb(177, 177, 219); */
    padding-top:90px ;
  }
  #c2{
    margin-left: 300px;
  }body {
        font-family: Arial, sans-serif;
        /* background-color: #f5e6ff; */
        margin: 0;
        /* padding: 20px; */
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow-x:hidden;
      
        background-color:#86A789;
      
        
      }
      

      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 16px;
        background-color: lightcyan;
        border: 3px solid black;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      th,
      td {
        border: 2px solid black;
        padding: 8px;
        text-align: left;
        font-weight: bold;
      }
      h2{
        /* margin-top:100px; */
        margin-bottom:40px;
        color:black;
        padding-bottom:700px;
        font-family:cursive;
      }

      th {
        background-color: #4caf50;
        color: #fff;
        padding: 4px;
        /* width:300px; */
      }

      input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0 0 10px;
        background-color: #dbd7ed;
        margin-bottom: 10px;
      }

      .grade {
        font-weight: bold;
        color: #4caf50;
      }
      tbody tr:hover {
        background-color: #f2f2f2;
      }

      tbody td {
        transition: background-color 0.3s ease;
      }
      #submitButton{
        width:100px;
        box-shadow:none;
      }
      .b1{
        background-color:#4caf50;
        width:300px;
        padding-left:90px;
      }
      .col{
        margin-top:100px;
        margin-left:100px;
        margin-right:200px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
      .card-header{
        /* padding-bottom:-300px; */
        /* margin-top:-20px; */
        /* margin-bottom:30px; */
        height:80px;
        padding-bottom:70px;
      }
      .f1{
        margin-top:70px;  
      }
      a {
  color: #e03a3c;
  text-decoration: none;
  font-family: cursive;
  font-size: 35px;
}


  .btn{
    margin-left: 30px;
  }
.btn-primary{
  margin-left: 30px;
  --bs-btn-border-color:none;
}

#header{
  /* background-color: rgb(252, 242, 227); */
  background-color:beige;
}
#navbar ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
  list-style: none;
  padding: 0; /* Remove default padding */
}
.btn-primary{
--bs-btn-color: #fff;
    background-color: #e03a3c;
  
}
/* .mt-2{
  margin-top:40px !important;
  margin-right:50px;
} */
  
</style>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" style="text-decoration: none;"><a href="user.html">Result Management System<span>.</span></a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="user.html"><b>Home</b></a></li>
          <!-- <li><a class="nav-link scrollto" href="index.html"><b>About</b></a></li> -->

          <li><a class="nav-link scrollto" href="user.html"><b>Toppers</b></a></li>
          <li><a class="nav-link scrollto" href="result1.php"><b>Results</b></a></li>
          <li><a class="nav-link scrollto" href="detail.php"><b>Rank List</b></a></li>
          <li><a class="nav-link scrollto" href="contact.php"><b>Contact</b></a></li>
     
          
          
          
          <li><button class="btn btn-primary" onclick="logout()" role="button">Logout</button></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
    </div>
    
  </header>
  <div class="container">
            <div class="row mt-2">
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-header">
                            <h2 class="display-6 text-center"><i> RANK LIST</i></h2>
                         </div>
                         <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Name</td>
                                    <td>USN</td>
                                    <td>SGPA</td>
                                    </tr>
                                    <tr>
                                    <?php
                                    while($row=mysqli_fetch_assoc($check_result))
                                    {
                                      ?>
                                      <td><?php echo $row['name']; ?></td>
                                      <td><?php echo $row['usn']; ?></td>
                                      <td><?php echo $row['sgpa']; ?></td>
                                      </tr>
                                      <?php
                                    }
                                    ?>
                                    
                                  
                             </table>
                         </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                     
    </table>
 
 
  
  
       

        

    
        

  
<!-- </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      // Add event listener to the form submit event
      document.querySelector('form').addEventListener('submit', function (event) {
        if (!message()) {
          event.preventDefault(); // Prevent form submission if message() returns false
        }
      });

      function message() {
        var name = document.getElementById('name');
        var usn = document.getElementById('usn');
        var internalMarks1 = document.getElementById('internalMarks1');
        var internalMarks2 = document.getElementById('internalMarks2');
        var internalMarks3 = document.getElementById('internalMarks3');
        var internalMarks4 = document.getElementById('internalMarks4');
        var internalMarks5 = document.getElementById('internalMarks5');
        var externalMarks1 = document.getElementById('externalMarks1');
        var externalMarks2 = document.getElementById('externalMarks2');
        var externalMarks3 = document.getElementById('externalMarks3');
        var externalMarks4 = document.getElementById('externalMarks4');
        var externalMarks5 = document.getElementById('externalMarks5');

        // Check for empty fields using trim()
        if (
          name.value.trim() === '' ||
          usn.value.trim() === '' ||
          internalMarks1.value.trim() === '' ||
          internalMarks2.value.trim() === '' ||
          internalMarks3.value.trim() === '' ||
          internalMarks4.value.trim() === '' ||
          internalMarks5.value.trim() === '' ||
          externalMarks1.value.trim() === '' ||
          externalMarks2.value.trim() === '' ||
          externalMarks3.value.trim() === '' ||
          externalMarks4.value.trim() === '' ||
          externalMarks5.value.trim() === ''
        ) {
          alert("Fields can't be empty");
          return false; // Prevent form submission
        } else {
          alert("Form is submitted successfully");
          return true; // Allow form submission
        }
      }
    });
  </script> -->

  <!-- ======= Footer ======= -->
  <div class="f1">
  <footer id="footer">
<div class =box1>
    <div class="container d-md-flex py-6">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Result</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a href="index.html">Result</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
          </div>
  </footer>
  </div>
     <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script>
    function logout() {
      // Perform logout actions, such as redirecting to the logout page
      window.location.href = "http://localhost/proj2/log.php";
    }
  </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>