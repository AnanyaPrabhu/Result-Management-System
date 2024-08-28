<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'result';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if ($con) {
    echo "connection";
}
else{
  
  die(mysqli_error($con));
}
$usn1=$_POST['usn1'];
$sql= "SELECT * FROM result1 where usn='$usn1'";
$result=mysqli_query($con,$sql);





?>
























<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
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
  /* #hero{
    background-color:lightblue;
  }
   */
  h1{
    color:blueviolet;
}
input{
 font-size:25px;
}
label{
    font-size: 10px;
}
table{
    background-color: antiquewhite;
    /* padding: 50px; */
    border-radius: 10px;
    /* margin-top:0px;
   */
}
input{
    border-radius: 10px;
    border: none;
    box-shadow: 0 0 10px gray;
    margin-right:30px;
}
.row{
  margin-bottom:450px;
}
label{
  margin-right:30px;
  margin-top:20px;
  margin-left:20px;
}

</style>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Result Management System<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html">About</a></li>
          
          <li><a class="nav-link scrollto" href="#team">Toppers</a></li>
          <li><a class="nav-link scrollto" href="result.html">Result</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li><a class="nav-link scrollto" href="index.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     
    </div>
    
  </header>

  
  </section>
  <br><section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <!-- <div class="col-xl-6"> -->
          
        <form onsubmit="return formValidation()">
     <br> <br><h1 align="center">Results</h1><br><br>
    <table align="center">
        <tr>
            <td> <label align="center"><h4>Enter the USN</h4></label></td>
            <td><input type="text" id="usn1" name="usn1"/></td>
        </tr>
        <tr>
            <td></td>
            <td><br><input type="submit" value="SUBMIT"/></td>
        </tr>
    </table>
    </form>
        <script>
            function formValidation(){
                var usn=document.getElementById('usn1').value;
                // var sem=document.getElementById('sem1').value;
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
          </form>
        </div>
      </div>
    </div>
    <br><div class="container">
            <div class="row mt-2">
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-header">
                            <h2 class="display-6 text-center"><i> Result</i></h2>
                         </div>
                         <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Name</td></tr>
                                   <tr> <td>USN</td></tr>
                                   <tr>
                                   <td>Subject</td>
                                    <td>Internal Marks</td>
                                    <td>External Marks</td>
                                    <td>Total</td>
                                    <td>Result</td>
            </tr>
                                    <tr><th>Mathematics</th></tr>
                                    <tr><th>Physics</th></tr>
                                    <tr><th>Chemistry</th></tr>
                                    <tr><th>Electronics</th></tr>
                                    <tr><th>Computer Science</th></tr>




                                     <tr>
                                    <?php
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                      ?>
                                      <tr><td><?php echo $row['name']; ?></td></tr>
                                     <tr> <td><?php echo $row['usn']; ?></td></tr>
                                      <tr><td><?php echo $row['internalMarks1']; ?></td>
                                      <td><?php echo $row['externalMarks1']; ?></td>
                                      <td><?php echo $row['totalMarks1']; ?></td>
                                      <td><?php echo $row['grade1']; ?></td>
                                    </tr>
                                    <tr><td><?php echo $row['internalMarks2']; ?></td>
                                      <td><?php echo $row['externalMarks2']; ?></td>
                                      <td><?php echo $row['totalMarks2']; ?></td>
                                      <td><?php echo $row['grade2']; ?></td>
                                    </tr>
                                    <tr><td><?php echo $row['internalMarks3']; ?></td>
                                      <td><?php echo $row['externalMarks3']; ?></td>
                                      <td><?php echo $row['totalMarks3']; ?></td>
                                      <td><?php echo $row['grade3']; ?></td>
                                    </tr>
                                    <tr><td><?php echo $row['internalMarks4']; ?></td>
                                      <td><?php echo $row['externalMarks4']; ?></td>
                                      <td><?php echo $row['totalMarks4']; ?></td>
                                      <td><?php echo $row['grade4']; ?></td>
                                    </tr>
                                    <tr><td><?php echo $row['internalMarks5']; ?></td>
                                      <td><?php echo $row['externalMarks5']; ?></td>
                                      <td><?php echo $row['totalMarks5']; ?></td>
                                      <td><?php echo $row['grade5']; ?></td>
                                    </tr>



                                      
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


  </section><!-- End Hero -->
  
  <main id="main">

    

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 
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
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
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