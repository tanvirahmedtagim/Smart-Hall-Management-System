<?php

//--------------------------------->> DB CONFIG
require_once "../config/configPDO.php";

//--------------------------------->> START SESSION
session_start();

//--------------------------------->> START SESSION
if (!isset($_SESSION["admin"])) {
    header("location: admin_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HALL MANAGEMENT SYSTEM | ADMINISTRATOR DASHBOARD</title>

  <!-- Include HeaderScripts -->
  <?php include_once "../includes/headerScripts.php";?>
  <link rel="stylesheet" href="../css/common.css">

  <style>
    .navbar-brand {
      font-size: 1.8em;

    }

    #topContainer {
      background-image: url("images/7.jpg");
      height: 500px;
      width: 100%;
      background-size: cover;
      /*  FOR FULL IMAGE TO BE DISPLAYED NOT JUST PART OF IT  */
    }

    #topRow {
      margin-top: 100px;
      text-align: center;

    }

    #topRow h1 {
      font-size: 250%;
      color: #000000;
      padding-top: 40px;

    }

    .bold {
      font-weight: bold;

    }

    .margintop {
      margin-top: 30px;


    }

    .center {
      text-align: center;


    }

    .title {
      margin-top: 100px;
      font-size: 300%;

    }

    #footer {
      background-color: #B0D1FB;
      padding-top: 70px;
      width: 100%;

    }

    .marginbottom {
      margin-bottom: 30px;

    }

    .appstoreimage {
      width: 250px;

    }
  </style>
</head>

<body>

  <!-- Include Admin Navbar -->
  <?php include_once "../includes/adminNavbar.php";?>

  <div class="container">
    <div class="row mt-5">

      <section class="col-md-12 text-center">
        <h1 class="text-center font-Staatliches-heading">Welcome Administrator Dashboard</h1>
      </section>
	 <div class="container-fluid">
        <div class="row">
<?php 

// Create connection
$con = mysqli_connect("localhost","root","","hostel_management");
$sql ="SELECT * from user_information";
if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $allotment = mysqli_num_rows( $result );
    
    // Display result
    
 }
?>
          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-primary rounded-0">
              <div class="card-header bg-primary rounded-0">
                <h5 class="card-title text-white mb-1">Total Allotment</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-primary text-center"><?php echo $allotment;?></h1>
              </div>
            </div>
          </div>
<?php 

// Create connection
$con = mysqli_connect("localhost","root","","hostel_management");
$sql ="SELECT * from complaints";
if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $complain = mysqli_num_rows( $result );
    
    // Display result
    
 }
?>
          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-success rounded-0">
              <div class="card-header bg-success rounded-0">
                <h5 class="card-title text-white mb-1">Total Complaints</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-success text-center"><?php echo $complain;?></h1>
              </div>
            </div>
          </div>
<?php 

// Create connection
$con = mysqli_connect("localhost","root","","hostel_management");
$sql ="SELECT * from feedback";
if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $feedback = mysqli_num_rows( $result );
    
    // Display result
    
 }
?>
          <div class="col-lg-4 p-2">
            <div class="card border-danger rounded-0">
              <div class="card-header bg-danger rounded-0">
                <h5 class="card-title text-white mb-1">Total Feedback</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-danger text-center"><?php echo $feedback;?></h1>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
<?php 

// Create connection
$con = mysqli_connect("localhost","root","","hostel_management");
$sql ="SELECT tutor_id from house_tutor";
if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $housetutor = mysqli_num_rows( $result );
    
    // Display result
    
 }
?>
          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-primary rounded-0">
              <div class="card-header bg-primary rounded-0">
                <h5 class="card-title text-white mb-1">Total House Tutor</h5>
              </div>
              <div class="card-body"> 
                <h1 class="display-4 font-weight-bold text-primary text-center"><?php echo $housetutor;?></h1>
              </div>
            </div>
          </div>
<?php 

// Create connection
$con = mysqli_connect("localhost","root","","hostel_management");
$sql ="SELECT * from meal_chart";
if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $mealchart = mysqli_num_rows( $result );
    
    // Display result
    
 }
?>
          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-success rounded-0">
              <div class="card-header bg-success rounded-0">
                <h5 class="card-title text-white mb-1">Total Meal Chart</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-success text-center"><?php echo $mealchart;?></h1>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-2">
            <div class="card border-danger rounded-0">
              <div class="card-header bg-danger rounded-0">
                <h5 class="card-title text-white mb-1">Total Admin</h5>
              </div>
              <div class="card-body">
                <h1 class="display-4 font-weight-bold text-danger text-center">1</h1>
              </div>
            </div>
          </div>

        </div>
</div>

    </div>
  </div>

  <!-- Include FooterScripts -->
  <?php include_once "../includes/footerScripts.php";?>

</body>

</html>