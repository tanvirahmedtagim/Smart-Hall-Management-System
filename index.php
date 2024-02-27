<?php
if (isset($_GET['generated']) && $_GET['generated'] == "false") {
    unset($_GET['generated']);
    echo '<script>alert("Timetable not generated yet!!");</script>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Smart Hall Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- BOOTSTRAP CORE STYLE CSS -->
	
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
   
	<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  <style>
  /* Make the image fully responsive */
  .navbar-brand {
    font-weight: bold;
	font-family: monospace;
	font-size: 19px;
  }
  .navbar-dark .navbar-nav .nav-link {
    font-weight: 700;
	font-size: 14px;
	text-transform: uppercase;
  }
   .navbar-dark .navbar-nav .nav-item {
    margin: 0 15px;
	
  }
  
 body {
    padding-right: 0 !important;
    overflow-y: scroll!important;
}
  </style>
  <style>
.btn {
  background-color: #0DB21F;
  border: none;
  color: white;
  padding: 5.2px 19px;
  text-align: center;
  font-size: 14px;
  margin: 05px 02px;
  opacity: 0.6;
  transition: 0.3s;
}

.btn:hover {opacity: 1}




</style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0B2435;">
<div class="container">
  <a class="navbar-brand" href="#">SMART HALL MANAGEMENT SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="col-auto" >
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
	  
	   <li class="nav-item active">
        <a class="nav-link" href="hall_charge.php">HALL CHARGE</a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="SHMS/index.php">LOGIN</a>
      </li>
    <!-- <form class="form-inline my-2 my-lg-0">
      <button class="btn" type="button" class="btn btn-primary"data-toggle="modal" data-target="#myModal" >LogIn</button>
    </form> -->
        </div>
    </ul>
    
     
   
  </div>
   </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel" 
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slide2.jpg" alt="Slide1" width="1100" height="100">
      <div class="carousel-caption">
        <h3>Honorable VC Speech</h3>
        <p>BORAL HALL PROGRAM</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide2.jpg" alt="Slide2" width="1100" height="100">
      <div class="carousel-caption">
        <h3>5th Anniversary Program</h3>
        <p>Student Collabaration</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide3.jpg" alt="Slide3" width="1100" height="100">
      <div class="carousel-caption">
        <h3>BORAL HALL</h3>
        <p>The behind beauty of BORAL HALL, BAUET</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<script type="text/javascript">
    function genpdf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('demo timetable.pdf');
        });
        window.alert("Downloaded!");
    }
</script>

 <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">LOGIN OPTION:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div align="center" STYLE="margin-top: 30px">
    <button class="btn" type="button" class="btn btn-primary" 
            class="btn btn-info btn-lg"data-toggle="modal" data-target="#modalLoginForm">ADMIN LOGIN
    </button>
    <button class="btn" type="button" class="btn btn-primary" 
            class="btn btn-info btn-lg"data-toggle="modal" data-target="#modalTeachersForm">HALL PROVOST LOGIN
    </button>
	    <button class="btn" type="button" class="btn btn-primary" 
            class="btn btn-info btn-lg"data-toggle="modal" data-target="#modalStudentsForm">STUDENT LOGIN
    </button>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<br>
<div style=" border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Leave us a message to get information and queries:</p>
  </div>
  <div style="content: "";
  display: table;
  clear: both;">
    <div style=" float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;">
      <img src="assets/img/my.jpg" style="width:100%">
    </div>
    <div style="content: "";
  display: table;
  clear: both;">
    <div style=" float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;">
     <form  action="contactvalidation.php" method="post" enctype="multipart/form-data">
        <label for="name">Full Name</label>
        <input style=" width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;" type="text" id="name" name="name" placeholder="Your name..">
        <label for="email">Email</label>
        <input style=" width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;"type="text" id="email" name="email" placeholder="Your last name..">
        <label for="subject">Subject</label>
        <textarea style=" width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;"id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input style="  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;" name="Submit" type="submit" value="Submit">
      </form>
    </div>
  </div>
<br>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Admin LogIn</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
		<form action="admin/admin_login.php" method="POST">
          <i class="fas fa-user prefix grey-text"></i>
		  <input type="text" class="form-control" id="adminname" placeholder="User Email" name="UN" >
          <label for="adminname"></label>
		  
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
           <input type="password" class="form-control" id="password" placeholder="Password" name="PASS"
                               >
          <label for="password"></label>
		 
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalTeachersForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Hall Provost LogIn</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
		<form action="hall_provost/hallprovost_login.php" method="POST">
          <i class="fas fa-user prefix grey-text"></i>
		  <input type="text" class="form-control" id="adminname" placeholder="User Email" name="UN" >
          <label for="adminname"></label>
		  
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
           <input type="password" class="form-control" id="password" placeholder="Password" name="PASS"
                               >
          <label for="password"></label>
		 
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalStudentsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Student LogIn</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
		<form action="login.php" method="POST">
          <i class="fas fa-user prefix grey-text"></i>
		  <input type="text" class="form-control" id="studentname" placeholder="Student ID" name="UN" >
          <label for="studentname"></label>
		  
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
           <input type="password" class="form-control" id="password" placeholder="Password" name="PASS"
                               >
          <label for="password"></label>
		 
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
	  </form>
    </div>
  </div>
</div>




<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var adminForm = document.getElementById("adminForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";

    }
    teacherLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>





<!-- Footer -->
<footer style="
  clear: both;
    position: relative;
    height: 100%;
    margin-top: -200px; 
 " class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">ACADEMICS</h6>
        
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Other</h6>
        <p>
          <a href="#!">Programming</a>
        </p>
        <p>
          <a href="#!">Admissions</a>
        </p>
        <p>
          <a href="#!">Newsletter</a>
        </p>
        <p>
          <a href="#!">FAQs</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Featured links</h6>
        <p>
          <a href="#!">Library</a>
        </p>
        <p>
          <a href="#!">Medical</a>
        </p>
        <p>
          <a href="#!">Hall</a>
        </p>
        <p>
          <a href="#!">Alumni</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Qadirabad Cantonment, Natore</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@bauet.ac.bd</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +8801708503504</p>
        <p>
          <i class="fas fa-print mr-3"></i> +8801708503510</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2023 Copyright:
          <a href="#">
            <strong> Developed by Tanvir</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->


<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
