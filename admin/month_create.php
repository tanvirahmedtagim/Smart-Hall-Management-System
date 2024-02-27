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
<title>HALL MANAGEMENT SYSTEM | MONTH CREATE</title>

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

                <h1 class="text-center font-Staatliches-heading">MEAL MONTH CREATE</h1>

<form  style="text-align: center;" action="" method="post" enctype="multipart/form-data">
<label for="month">Select New Month Name:</label>

<select id="month" name="month">
  <option value="november22">November 2022</option>
  <option value="december22">December 2022</option>
  <option value="january23">January 2023</option>
  <option value="february23">February 2023</option>
</select>
  <br>
     	<button class="button" name="Button2" value="Button2">Create</button>
		<br>
		<br>
                             </form>              

                    <?php
if(isset($_POST['Button2']))
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

             $a="meal_info_";
		$month=$_POST['month'];
	
	$monthname=$a.$month;
	$sql = "CREATE TABLE $monthname (
`stud_id` varchar(150) NOT NULL PRIMARY KEY,
  `Day1` varchar(2) NULL,
  `Day2` varchar(2) NULL,
  `Day3` varchar(2) NULL,
  `Day4` varchar(2) NULL,
  `Day5` varchar(2) NULL,
  `Day6` varchar(2) NULL,
  `Day7` varchar(2) NULL,
  `Day8` varchar(2) NULL,
  `Day9` varchar(2) NULL,
  `Day10` varchar(2) NULL,
  `Day11` varchar(2) NULL,
  `Day12` varchar(2) NULL,
  `Day13` varchar(2) NULL,
  `Day14` varchar(2) NULL,
  `Day15` varchar(2) NULL,
  `Day16` varchar(2) NULL,
  `Day17` varchar(2) NULL,
  `Day18` varchar(2) NULL,
  `Day19` varchar(2) NULL,
  `Day20` varchar(2) NULL,
  `Day21` varchar(2) NULL,
  `Day22` varchar(2) NULL,
  `Day23` varchar(2) NULL,
  `Day24` varchar(2) NULL,
  `Day25` varchar(2) NULL,
  `Day26` varchar(2) NULL,
  `Day27` varchar(2) NULL,
  `Day28` varchar(2) NULL,
  `Day29` varchar(2) NULL,
  `Day30` varchar(2) NULL,
  `Day31` varchar(2) NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table $monthname created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
 $sql = "SELECT * FROM meal_status";
        $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  $id=$row['stud_id'];
	  $sql4 = "INSERT INTO $monthname (stud_id, Day1, Day2, Day3, Day4, Day5, Day6, Day7, Day8, Day9, Day10, Day11, Day12, Day13, Day14, Day15, Day16, Day17, Day18, Day19, Day20, Day21, Day22, Day23, Day24, Day25, Day26, Day27, Day28, Day29, Day30, Day31) VALUES
		('$id','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')"; 
if (mysqli_query($conn, $sql4)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  }
		}
		$sql5 = "INSERT INTO meal_info_charge (Month_name, Day1, Day2, Day3, Day4, Day5, Day6, Day7, Day8, Day9, Day10, Day11, Day12, Day13, Day14, Day15, Day16, Day17, Day18, Day19, Day20, Day21, Day22, Day23, Day24, Day25, Day26, Day27, Day28, Day29, Day30, Day31) VALUES
		('$month','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')"; 
if (mysqli_query($conn, $sql5)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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