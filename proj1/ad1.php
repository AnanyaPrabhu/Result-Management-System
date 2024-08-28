<?php
ini_set('display_error',1);
ini_set('display_startup_error',1);
error_reporting(E_ALL);
// error_reporting(0);
// $HOSTNAME='localhost';
// $USERNAME='root';
// $PASSWORD='';
// $DATABASE='result';

// $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
// if(!$con){
  

//   die(mysqli_error($con));
// }
// $name=$_POST['name'];
// $usn=$_POST['usn'];
// $internalMarks1=$_POST['internalMarks1'];
// $internalMarks2=$_POST['internalMarks2'];
// $internalMarks3=$_POST['internalMarks3'];
// $internalMarks4=$_POST['internalMarks4'];
// $internalMarks5=$_POST['internalMarks5'];
// $externalMarks1=$_POST['externalMarks1'];
// $externalMarks2=$_POST['externalMarks2'];
// $externalMarks3=$_POST['externalMarks3'];
// $externalMarks4=$_POST['externalMarks4'];
// $externalMarks5=$_POST['externalMarks5'];
// $totalMarks1=$_POST['totalMarks1'];
// $totalMarks2=$_POST['totalMarks2'];
// $totalMarks3=$_POST['totalMarks3'];
// $totalMarks4=$_POST['totalMarks4'];
// $totalMarks5=$_POST['totalMarks5'];
// $grade1=$_POST['grade1'];
// $grade2=$_POST['grade2'];
// $grade3=$_POST['grade3'];
// $grade4=$_POST['grade4'];
// $grade4=$_POST['grade5'];
// $sql="INSERT INTO result1 (name,usn,internalMarks1,internalMarks2,internalMarks3,internalMarks4,internalMarks5,externalMarks1,externalMarks2,externalMarks3
// externalMarks4,externalMarks5,totalMarks1,totalMarks2,totalMarks3,totalMarks4,totalMarks5,grade1,grade2,grade3,grade4,grade5) VALUES(
//   '$name','$usn','$internalMarks1','$internalMarks2','$internalMarks3','$internalMarks4','$internalMarks5','$externalMarks1','$externalMarks2','$externalMarks3'
// '$externalMarks4','$externalMarks5','$totalMarks1','$totalMarks2','$totalMarks3','$totalMarks4','$totalMarks5','$grade1','$grade2','$grade3','$grade4','$grade5')";
// $execute=mysqli_query($con,$sql);
// if($execute){
//   echo "Data is inserted successfully";
// }
// else{
//   echo "Data is not inserted";
// }


session_start(); // Start the session at the beginning of your script

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'result';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if (!$con) {
    die(mysqli_error($con));
}

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $usn = $_POST['usn'];
//echo  "testtttt";
    // Check if the usn already exists
    $check_query = "SELECT * FROM result1 WHERE usn='$usn'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Duplicate entry for USN. Please enter a unique USN.";
    } else {
        // Continue with the insertion
        $internalMarks1 = $_POST['internalMarks1'];
        $internalMarks2 = $_POST['internalMarks2'];
        $internalMarks3 = $_POST['internalMarks3'];
        $internalMarks4 = $_POST['internalMarks4'];
        $internalMarks5 = $_POST['internalMarks5'];
        $externalMarks1 = $_POST['externalMarks1'];
        $externalMarks2 = $_POST['externalMarks2'];
        $externalMarks3 = $_POST['externalMarks3'];
        $externalMarks4 = $_POST['externalMarks4'];
        $externalMarks5 = $_POST['externalMarks5'];
        // $sgpa=$POST['sgpa'];
    // $totalMarks1 = $_POST['totalMarks1'];
    // $totalMarks2 = $_POST['totalMarks2'];
    // $totalMarks3 = $_POST['totalMarks3'];
    // $totalMarks4 = $_POST['totalMarks4'];
    // $totalMarks5 = $_POST['totalMarks5'];
    // $grade1 = $_POST['grade1'];
    // $grade2 = $_POST['grade2'];
    // $grade3 = $_POST['grade3'];
    // $grade4 = $_POST['grade4'];
    // $grade5 = $_POST['grade5'];
    
    // $sql = "INSERT INTO result1 (name,usn,internalMarks1,internalMarks2,internalMarks3,internalMarks4,internalMarks5,
    //         externalMarks1,externalMarks2,externalMarks3,externalMarks4,externalMarks5,totalMarks1,totalMarks2,
    //         totalMarks3,totalMarks4,totalMarks5,grade1,grade2,grade3,grade4,grade5) VALUES(
    //         '$name','$usn','$internalMarks1','$internalMarks2','$internalMarks3','$internalMarks4','$internalMarks5',
    //         '$externalMarks1','$externalMarks2','$externalMarks3','$externalMarks4','$externalMarks5','$totalMarks1',
    //         '$totalMarks2','$totalMarks3','$totalMarks4','$totalMarks5','$grade1','$grade2','$grade3','$grade4','$grade5')";

    $sql = "INSERT INTO result1 (name,usn,internalMarks1,internalMarks2,internalMarks3,internalMarks4,internalMarks5,
            externalMarks1,externalMarks2,externalMarks3,externalMarks4,externalMarks5) VALUES(
            '$name','$usn','$internalMarks1','$internalMarks2','$internalMarks3','$internalMarks4','$internalMarks5',
            '$externalMarks1','$externalMarks2','$externalMarks3','$externalMarks4','$externalMarks5')
            ON DUPLICATE KEY UPDATE 
            internalMarks1='$internalMarks1', internalMarks2='$internalMarks2', internalMarks3='$internalMarks3',
            internalMarks4='$internalMarks4', internalMarks5='$internalMarks5', 
            externalMarks1='$externalMarks1', externalMarks2='$externalMarks2', externalMarks3='$externalMarks3',
            externalMarks4='$externalMarks4', externalMarks5='$externalMarks5'";

        $execute = mysqli_query($con, $sql);
  

        if ($execute) {
            //echo "Data is inserted successfully";
            echo "<script type='text/javascript'>alert('Data is inserted successfully');</script>";
        } else {
            //echo "Data is not inserted";
            echo "<script type='text/javascript'>alert('Data is not inserted successfully');</script>";

        }
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Marks entry Page</title>
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
  .box1{
    margin-right:70px;
    margin-bottom:70px;
    padding-top:30px;
  }
  #footer{
    /* padding:30px 90px; */
    width:1980px;
    height:104px;
    margin-top:70px;
    margin-bottom:0px;
    overflow-x:hidden;
   
  }
  .text-md-end {
    margin-right:50px;
  }
  #c1{
    background-color: rgb(177, 177, 219);
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
        width: 50%;
        border-collapse: collapse;
        margin-bottom: 16px;
        background-color: #B4D4FF;
        border: 3px solid black;
      }

      th,
      td {
        border: 2px solid black;
        padding: 8px;
        text-align: left;
        font-weight: bold;
      }
      h2{
        margin-top:100px;
        margin-bottom:40px;
        color:white;
        font-family
      }

      th {
        background-color: #176B87;
        color: #fff;
        padding: 14px;
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
        color: #4F6F52;
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
        background-color:#176B87;
        width:300px;
        padding-left:90px;
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
  
</style>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" style="text-decoration: none;"><a href="indexadmin.html">Result Management System<span>.</span></a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="indexadmin.html"><b>Home</b></a></li>
          <li><a class="nav-link scrollto" href="indexadmin.html"><b>About</b></a></li>

          <li><a class="nav-link scrollto" href="indexadmin.html"><b>Toppers</b></a></li>
          <li><a class="nav-link scrollto" href="ad1.php"><b>Marks entry</b></a></li>
     
          
          
          
          <li><button class="btn btn-primary" onclick="logout()" role="button">Logout</button></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
    </div>
    
  </header>

 
  </section>
  <form action="" method="post">
  <!-- <br><section id="hero" class="d-flex align-items-center"> -->
  <h2>STUDENT MARKS PORTAL</h2>
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
   <div class="row">
       <table>
    <tr>
      <th><label>Name</label></th><td><input type="text" required id="name" placeholder="Enter the student's name" name="name"></td>
    </tr>
    <tr>
      <th><label>USN</label></th><td><input type="text" required id="name" placeholder="Enter the student's USN" name="usn"></td>
    </tr>
    </table><br>
    
    <table class="box">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Internal Marks</th>
          <th>External Marks</th>
          <th>Total Marks</th>
          <th>Grade Point</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <!-- Subject 1: Mathematics -->
        <tr>
          <td>Mathematics</td>
          <td>
            <input
              type="number"
              class="internalMarks"
              name="internalMarks1"
              placeholder="Enter internal marks" required
            />
          </td>
          <td>
            <input
              type="number"
              class="externalMarks"
              name="externalMarks1"
              placeholder="Enter external marks"required
            />
          </td>
          <td class="totalMarks"name="totalMarks1">0</td>
          <td class="gradep"name="gradep1">0</td>
          <td class="grade" name="grade1"></td>
        </tr>

        <!-- Subject 2: Physics -->
        <tr>
          <td>Physics</td>
          <td>
            <input
              type="number"
              class="internalMarks"
              name="internalMarks2"
              placeholder="Enter internal marks" required
            />
          </td>
          <td>
            <input
              type="number"
              class="externalMarks"
              name="externalMarks2"
              placeholder="Enter external marks" required
            />
          </td>
          <td class="totalMarks" name="totalMarks2">0</td>
          <td class="gradep"name="gradep2">0</td>
          <td class="grade"name="grade2"></td>
        </tr>

        <!-- Subject 3: Chemistry-->
        <tr>
          <td>Chemistry</td>
          <td>
            <input
              type="number"
              class="internalMarks"
              name="internalMarks3"
              placeholder="Enter internal marks" required
            />
          </td>
          <td>
            <input
              type="number"
              class="externalMarks"
              name="externalMarks3"
              placeholder="Enter external marks" required
            />
          </td>
          <td class="totalMarks" name="totalMarks3">0</td>
          <td class="gradep"name="gradep3">0</td>
          <td class="grade" name="grade3"></td>
        </tr>

        <!-- Subject 4: Electronics-->
        <tr>
          <td>Electronics</td>
          <td>
            <input
              type="number"
              class="internalMarks"
              name="internalMarks4"
              placeholder="Enter internal marks"required
            />
          </td>
          <td>
            <input
              type="number"
              class="externalMarks"
              name="externalMarks4"
              placeholder="Enter external marks" required
            />
          </td>
          <td class="totalMarks" name="totalMarks4">0</td>
          <td class="gradep"name="gradep4">0</td>
          <td class="grade" name="grade4"></td>
        </tr>
        <!-- Subject 4: Computer Science-->
        <tr>
          <td>Computer Science</td>
          <td>
            <input
              type="number"
              class="internalMarks"
              name="internalMarks5"
              placeholder="Enter internal marks" required
            />
          </td>
          <td>
            <input
              type="number"
              class="externalMarks"
              name="externalMarks5"
              placeholder="Enter external marks"required
            />
          </td>
          <td class="totalMarks" name="totalMarks5">0</td>
          <td class="gradep" name="gradep5">0</td>
          <td class="grade"name="grade5"></td>
        </tr>
        <!-- Add more subjects as needed -->
      </tbody>
    </table>
    <br>
    <table class="box">
      <tr>
      <th class="b1"><label>The SGPA is:</label></th>
        <td class="sgpa" name="sgpa"></td>
    </tr>
    </table> 

    <script>
  // Get references to the input fields and total marks cell
  const internalMarksInputs = document.querySelectorAll(".internalMarks");
  const externalMarksInputs = document.querySelectorAll(".externalMarks");
  const totalMarksCells = document.querySelectorAll(".totalMarks");
  const gradeCells = document.querySelectorAll(".grade");
  const gradepCells = document.querySelectorAll(".gradep");


  // Add input event listeners to all input fields
  internalMarksInputs.forEach((input, index) =>
    input.addEventListener("input", () => updateTotalMarksAndGrade(index))
  );
  externalMarksInputs.forEach((input, index) =>
    input.addEventListener("input", () => updateTotalMarksAndGrade(index))
  );

  // Function to update the total marks and grade for a specific subject
  function updateTotalMarksAndGrade(index) {
    const internalMarks = parseFloat(internalMarksInputs[index].value) || 0;
    const externalMarks = parseFloat(externalMarksInputs[index].value) || 0;

    // Calculate the total marks for the specific subject
    const totalMarks = internalMarks + externalMarks;

    // Display the total marks in the corresponding cell
    totalMarksCells[index].textContent = totalMarks;

    // Calculate the grade based on the total marks for the specific subject
    let grade;

    if (internalMarks < 22 || externalMarks < 18 || totalMarks < 40) {
      grade = "F";
    } else {
      grade = "P";
    }

    // Display the grade in the corresponding cell
    gradeCells[index].textContent = grade;
    gradeCells[index].className = "grade " + grade.toLowerCase(); // Add class for styling

    // Calculate the gradep for the specific subject
    const gradep = calculateGradep(totalMarks);
    gradepCells[index].textContent = gradep;
    gradepCells[index].className = "gradep"; // Add class for styling

    // Recalculate SGPA
    calculateSGPA();
  }

  // Function to calculate gradep based on total marks
  function calculateGradep(totalMarks) {
    // Add your logic to calculate gradep based on the total marks
    if (totalMarks >= 90 && totalMarks <= 100) {
      return 10;
    } else if (totalMarks >= 80 && totalMarks <= 89) {
      return 9;
    } else if (totalMarks >= 70 && totalMarks <= 79) {
      return 8;
    } else if (totalMarks >= 60 && totalMarks <= 69) {
      return 7;
    } else if (totalMarks >= 50 && totalMarks <= 59) {
      return 6;
    } else if (totalMarks >= 40 && totalMarks <= 49) {
      return 5;
    } else {
      return 0;
    }
  }

  // Function to calculate SGPA
  function calculateSGPA() {
    const creditPoints = [3, 4, 3, 3, 3]; // Adjust based on the credit hours for each subject
    let totalCreditPoints = 0;
    let totalCreditHours = 0;

    // Loop through each subject and accumulate credit points and credit hours
    for (let i = 0; i < gradepCells.length; i++) {
      const creditPoint = parseFloat(gradepCells[i].textContent);
      totalCreditPoints += creditPoint * creditPoints[i];
      totalCreditHours += creditPoints[i];
    }

    // Calculate SGPA
    const sgpa = totalCreditPoints / totalCreditHours;
  //   <?php
  //   $call1='call p(sgpa,$usn)';
  //   $execute=mysqli_query($con,$call1);
  // ?>

    // Display SGPA
    document.querySelector('.sgpa').textContent = sgpa.toFixed(2); // Display SGPA with two decimal places
  }
  
</script>
        <div class="col-xl-6">
          
         
          
        </div>
      </div>
    </div>
    <input class="btn btn-primary" id="submitButton" type="submit" name="submit" value="Submit"/>

  <!-- </section>End Hero -->
</form>
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
  </script>

  <!-- ======= Footer ======= -->
  <footer id="footer">
<div class =box1>
    <div class="container d-md-flex py-7">
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
  <script>
  function logout() {
    // Perform logout actions, such as redirecting to the logout page
    window.location.href = "http://localhost/Result_management/proj2/log.php";
  }
</script>
</body>

</html>