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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HALL MANAGEMENT SYSTEM | MEAL CHARGE</title>

<!-- Include HeaderScripts -->
<?php include_once "../includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">


</head>

<body>

    <!-- Include Admin Navbar -->
    <?php include_once "../includes/adminNavbar.php";?>


    <div class="container">
        <div class="row mt-5">
            <section class="col-md-12">

                <h1 class="text-center font-Staatliches-heading">ADD MEAL CHARGE</h1>

<form style="text-align: center;" action="" method="post" enctype="multipart/form-data">
<label for="month">Select New Month Name:</label>
<select id="month" name="month">
  <option value="november22">November 2022</option>
  <option value="december22">December 2022</option>
  <option value="january23">January 2023</option>
  <option value="february23">February 2023</option>
</select>
<br>
<label for="day">Choose Day To Process Meal:</label>
<select id="day" name="day">
  <option value="Day1">Day 1</option>
  <option value="Day2">Day 2</option>
  <option value="Day3">Day 3</option>
  <option value="Day4">Day 4</option>
  <option value="Day5">Day 5</option>
  <option value="Day6">Day 6</option>
  <option value="Day7">Day 7</option>
  <option value="Day8">Day 8</option>
    <option value="Day9">Day 9</option>
  <option value="Day10">Day 10</option>
   <option value="Day11">Day 11</option>
  <option value="Day12">Day 12</option>
  <option value="Day13">Day 13</option>
  <option value="Day14">Day 14</option>
  <option value="Day15">Day 15</option>
  <option value="Day16">Day 16</option>
  <option value="Day17">Day 17</option>
  <option value="Day18">Day 18</option>
    <option value="Day19">Day 19</option>
  <option value="Day20">Day 20</option>
     <option value="Day21">Day 21</option>
  <option value="Day22">Day 22</option>
  <option value="Day23">Day 23</option>
  <option value="Day24">Day 24</option>
  <option value="Day25">Day 25</option>
  <option value="Day26">Day 26</option>
  <option value="Day27">Day 27</option>
  <option value="Day28">Day 28</option>
    <option value="Day29">Day 29</option>
  <option value="Day30">Day 30</option>
   <option value="Day31">Day 31</option>
</select>
<br>
             <div class="form-group">
					<label for="stud_id">Meal Cost</label>
					<input type="text" name="meal_cost" id="meal_cost" class="form-control"
						placeholder="Enter Meal Cost">
				</div>

     	<button class="button" name="Button2" value="Button2">Submit</button>
                             </form>              
<br>
                    <?php
if(isset($_POST['Button2']))
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$cost=$_POST['meal_cost'];
		$month=$_POST['month'];
$day=$_POST['day'];

$sql = "UPDATE meal_info_charge SET $day='$cost' WHERE Month_name='$month'";
	if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} 
else{
	echo "Failed";
}

    
mysqli_close($conn);
  }
?>
                </div>

            </section>
        </div>
    </div>




    <!-- Include FooterScripts -->
    <?php include_once "../includes/footerScripts.php";?>

</body>

</html>