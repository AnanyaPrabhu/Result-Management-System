

<?php 
//$HOSTNAME = 'localhost';
//$USERNAME = 'root';
//$PASSWORD = '';
//$DATABASE = 'result';

//$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
//if ($con) {
   // echo "connection";
//}
//else{
  
  //die(mysqli_error($con));
//}
// $usn1=$_POST['usn1'];
// $sql= "SELECT * FROM result1 where usn='$usn1'";
// $result=mysqli_query($con,$sql);

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Result Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <link href="../style.css" rel="stylesheet"/>
    <link href="../css/result.css" rel="stylesheet"/>

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

  
  <link href="assets/css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
<style>
  .text-danger{
    /* margin-left:100px; */
    text-align:center;
  }
  .mt-2{
    margin-top:300px !important;
  }
  #c1{
    /* background-color: rgb(177, 177, 219); */
    padding-top:90px ;
  }
  #c2{
    margin-left: 300px;
  }
  #container{
    margin-top:60px;
  }
  #hero h2{
    margin-top:60px;
    font-family:cursive;
    font-size:40px;
  }
  #hero:before{
    background-color:#86A789 !important;
  }
h4{
  font-family:cursive;
}
label{
    font-size: 10px;
}
table{
    background-color: #DCF2F1;
    width:550px;
    border-radius: 10px;
    
}
input{
    border-radius: 10px;
    border: none;
    box-shadow: 0 0 10px gray;
    margin-right:30px;
    font-size:23px;

}
.row{
  margin-bottom:440px;
  margin-right:600px;
  margin-top:300px;
}
label{
  margin-right:30px;
  margin-top:20px;
  margin-left:20px;
}
form{
  margin-left:280px;
}
.t1{
  border: 2px solid black;
  text-align:center;
  font-size:20px;
  width:1050px;
  margin-left:95px;


}
.t2{
  border: 2px solid black;
  text-align:center;
  font-size:20px;
  width:800px;
  height:30px;
}


body{
  background-color:#86A789;
}
.t1 tr:nth-child(even) {
  border: 2px solid black;
  /* background-color: rgb(98, 227, 237); */

  }
  .t2 tr:nth-child(even) {
  border: 2px solid black;
  /* background-color: rgb(98, 227, 237); */
  width:800px;
  height:30px;


  }
  .t1 td:nth-child(even) {
  border: 2px solid black;
  background-color:#B4D4FF;
  height:30px;

  }
  .t2 td:nth-child(even) {
  border: 2px solid black;
  background-color: #B4D4FF;
  width:800px;
  height:30px;


  }
  .t1 td:nth-child(odd) {
  border: 2px solid black;
  background-color: #B4D4FF;
  height:30px;
  

  }
  .t2 td:nth-child(odd) {
  border: 2px solid black;
  background-color: #B4D4FF;
  width:800px;
  height:30px;
  

  }
  .t1 th {
  border: 2px solid black;
  background-color:#176B87;
   color:white;
   width:700px;
   height:60px;

  }
  .t2 th {
  border: 2px solid black;
  background-color:#176B87;
   color:white;
   width:400px;
   height:60px;

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
.col-md-7{
  width:4000px;
}
h2{
  font-family:cursive;
}
.submit{
  font-family:cursive;
  border-radius:5px;
  background-color:beige;
}
h1{
  padding-right:70px;
}
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

  
  </section>
  <section id="hero" class="d-flex align-items-center" style="height:500px;">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <form action="" method="POST" >
                    <br>
                    <h2 align="center"><b>RESULTS<b></h2>
                    <br><br>
                    <table align="center">
                        <tr>
                            <td> <label align="center"><h4>Enter the USN</h4></label></td>
                            <td><input type="text" id="usn1" required  name="usn1" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br><input type="submit" value="Submit" onsubmit="formValidator()" name="submit" class="submit"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <script>
            function formValidation(){
                var usn=document.getElementById('usn1').value;
                
                if(isCorrect(usn)){
                    {
                        return true;
                    }
                    return false;
                }
            }
           
            function isCorrect(elem1){
                var alphaexp1=/[1-4][A-Za-z][A-Za-z][0-9][0-9][A-Za-z][A-Za-z][0-9][0-9][0-9]/;
                if(elem1.length==0){
                    alert("Please enter the USN");
                    elem1.focus();
                    return false;
                }
                else if(!elem1.match(alphaexp1)){
                    alert("Enter the input in DAADDAADDD format");
                    elem1.focus();
                    return false;
                }
                // else{
                //     alert("USN is correct");
                //     return true;
                // }
             }
        </script> 
        </section>

           <!-- <div class="container my-5">
            
            <table class="t1">
            <table class="t2"> -->

                <?php
                $HOSTNAME = 'localhost';
                $USERNAME = 'root';
                $PASSWORD = '';
                $DATABASE = 'result';
                
                $con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
                //if ($con) {
                   // echo "connection";
               // }
               // else{
                  
                 // die(mysqli_error($con));
               // }
                if (isset($_POST['submit'])) {
                  // echo "<script type='text/javascript'>alert('Data is inserted successfully');</script>";
                   $usn1 = $_POST['usn1'];
                    $sql = "SELECT * FROM result1 WHERE usn='$usn1'";
                   // echo $sql;
                  //  $sql = "SELECT * FROM result1 WHERE usn='4cb21cs068'";
                    $result = mysqli_query($con, $sql);
                    // echo "<script type='text/javascript'>alert('$sql');</script>";
                    
                    if ($result) {
                      if (mysqli_num_rows($result) != null) {
                          $studentInfo = mysqli_fetch_assoc($result);
                          $studentName = $studentInfo['name'];
                          $studentUSN = $studentInfo['usn'];
                          $studentSGPA =$studentInfo['sgpa'];
              
                          echo '<div class="container my-5">';
                          echo '<h2 style="color:white; text-align:center;"><b>RESULTS OF UG/PG May/June-2023 EXAMINATION</b></h2><br><br>';
                          echo '<table class="t2" align="center">';
                          echo "<tr><th>Name</th><td>$studentName</td></tr>";
                          echo "<tr><th>USN</th><td>$studentUSN</td></tr>";
                          echo '</table></br></br>';
              
                          echo '<table class="t1">';
                          echo '<tr>
                                  <th>Subject</th>
                                  <th>Internal Marks</th>
                                  <th>External Marks</th>
                                  <th>Total Marks</th>
                                  <th> Grade Point</th>
                                  <th>Result</th>
                              </tr>
                              <tbody>';
              
                          // Displaying internal, external, total marks, and grades for each subject
                          $subjectNames = ['Mathematics', 'Physics', 'Chemistry', 'Electronics', 'Computer Science'];
                          $internalMarks = ['internalMarks1', 'internalMarks2', 'internalMarks3', 'internalMarks4', 'internalMarks5'];
                          $externalMarks = ['externalMarks1', 'externalMarks2', 'externalMarks3', 'externalMarks4', 'externalMarks5'];
                          $totalMarks = ['totalMarks1', 'totalMarks2', 'totalMarks3', 'totalMarks4', 'totalMarks5'];
                          $gradep = ['gradep1', 'gradep2', 'gradep3', 'gradep4', 'gradep5'];
                          $grades = ['grade1', 'grade2', 'grade3', 'grade4', 'grade5'];
              
                          for ($i = 0; $i < count($subjectNames); $i++) {
                              echo '<tr>';
                              echo "<th>{$subjectNames[$i]}</th>";
                              echo "<td>{$studentInfo[$internalMarks[$i]]}</td>";
                              echo "<td>{$studentInfo[$externalMarks[$i]]}</td>";
                              echo "<td>{$studentInfo[$totalMarks[$i]]}</td>";
                              echo "<td>{$studentInfo[$gradep[$i]]}</td>";
                              echo "<td>{$studentInfo[$grades[$i]]}</td>";
                              echo '</tr>';
                          }
              
                          echo '</tbody></table></div>';



                          echo '<table class="t2" align="center">';
                          echo "<tr><th> Your SGPA is</th><td>$studentSGPA</td></tr>";
                          
                          echo '</table></br></br>';
                      } else {
                          echo '<h2 class="text-danger">Data not found</h2>';
                      }
                  }
              }
              ?>
            </table>
        </div>
    
            

  
  
 <br/><br/><br/>
 <br/><br/><br/><br/><br/><br/>
 <script>
    function logout() {
      // Perform logout actions, such as redirecting to the logout page
      window.location.href = "http://localhost/proj2/log.php";
    }
  </script>
  <!-- ======= Footer ======= -->
  <footer id="footer">

  

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
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
  </footer>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>