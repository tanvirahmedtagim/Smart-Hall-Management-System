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
<title>HALL MANAGEMENT SYSTEM | MEAL GENERATE</title>

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

                <h1 class="text-center font-Staatliches-heading">MEAL GENERATE</h1>
				
				
<form style="text-align: center;" action="" method="post" enctype="multipart/form-data">	
<label style="text-align: center;" for="month">Choose Month:</label>
<select style="text-align: center;" id="month" name="month">
  <option value="november22">November 2022</option>
  <option value="december22">December 2022</option>
  <option value="january23">January 2023</option>
  <option value="february23">February 2023</option>
</select>
<br>
	<button class="button" name="Button1" value="Button1">Submit</button>
	<br>
	<br>
                             </form>			
							
<?php if(isset($_POST['Button1']))
{
	?>
                <div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped" >


                        <thead>
                            <tr class="tableizer-firstrow">
                                <th>Student ID</th>
                                <th>Day 1</th>
                                <th>Day 2</th>
								 <th>Day 3</th>
								  <th>Day 4</th>
								   <th>Day 5</th>
								   <th>Day 6</th>
                                <th>Day 7</th>
								 <th>Day 8</th>
								  <th>Day 9</th>
								   <th>Day 10</th>
								   <th>Day 11</th>
                                <th>Day 12</th>
								 <th>Day 13</th>
								  <th>Day 14</th>
								   <th>Day 15</th>
								   <th>Day 16</th>
                                <th>Day 17</th>
								 <th>Day 18</th>
								  <th>Day 19</th>
								   <th>Day 20</th>
								   <th>Day 21</th>
                                <th>Day 22</th>
								 <th>Day 23</th>
								  <th>Day 24</th>
								   <th>Day 25</th>
								   <th>Day 26</th>
                                <th>Day 27</th>
								 <th>Day 28</th>
								  <th>Day 29</th>
								   <th>Day 30</th>
								   <th>Day 31</th>
								   
                            </tr>
                        </thead>

                        <tbody>

                            <?php

try {
	$a="meal_info_";
		$month=$_POST['month'];
	
	$monthname=$a.$month;
	

    # Sql Query
    $sql = "SELECT * FROM $monthname";

    # Prepare Query
    $result = $conn->prepare($sql);

    # Execute Query
    $result->execute();

    # Checking Wether Count Greater than 0
    if ($result->rowCount() > 0) {

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            ?>

                            <tr>
                                <td><?php echo $row["stud_id"]; ?></td>
                                <td><?php echo $row["Day1"]; ?></td>
                                <td><?php echo $row["Day2"]; ?></td>
                                <td><?php echo $row["Day3"]; ?></td>
								<td><?php echo $row["Day4"]; ?></td>
                                <td><?php echo $row["Day5"]; ?></td>
                                <td><?php echo $row["Day6"]; ?></td>
								<td><?php echo $row["Day7"]; ?></td>
								<td><?php echo $row["Day8"]; ?></td>
                                <td><?php echo $row["Day9"]; ?></td>
                                <td><?php echo $row["Day10"]; ?></td>
								<td><?php echo $row["Day11"]; ?></td>
                                <td><?php echo $row["Day12"]; ?></td>
                                <td><?php echo $row["Day13"]; ?></td>
								<td><?php echo $row["Day14"]; ?></td>
                                <td><?php echo $row["Day15"]; ?></td>
                                <td><?php echo $row["Day16"]; ?></td>
								<td><?php echo $row["Day17"]; ?></td>
								<td><?php echo $row["Day18"]; ?></td>
                                <td><?php echo $row["Day19"]; ?></td>
                                <td><?php echo $row["Day20"]; ?></td>
								<td><?php echo $row["Day21"]; ?></td>
                                <td><?php echo $row["Day22"]; ?></td>
                                <td><?php echo $row["Day23"]; ?></td>
								<td><?php echo $row["Day24"]; ?></td>
                                <td><?php echo $row["Day25"]; ?></td>
                                <td><?php echo $row["Day26"]; ?></td>
								<td><?php echo $row["Day27"]; ?></td>
								<td><?php echo $row["Day28"]; ?></td>
                                <td><?php echo $row["Day29"]; ?></td>
                                <td><?php echo $row["Day30"]; ?></td>
								<td><?php echo $row["Day31"]; ?></td>
                            </tr>


                            <?php

        }

        ?>

                        </tbody>
                    </table>

                    <?php

    } else {
        echo "<tr><td class='text-center' colspan='4'>No Records Found</td></tr>";
    }

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}
}
?>
 <h1 class="text-center font-Staatliches-heading">MEAL PROCESS</h1>
<form style="text-align: center;"  action="" method="post" enctype="multipart/form-data">
<label style="vertical-align: middle;" for="month">Choose Month:</label>
<select style="text-align: center;" id="month" name="month">
  <option value="november22">November 2022</option>
  <option value="december22">December 2022</option>
  <option value="january23">January 2023</option>
  <option value="february23">February 2023</option>
</select>	
<br>
<label style="text-align: center;" for="day">Choose Day To Process Meal:</label>
<select style="text-align: center;" id="day" name="day">
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
	<button class="button" name="Button2" value="Button2">Process</button>
	<br>
	<br>
                             </form>
<?php
if(isset($_POST['Button2']))
{
	$day=$_POST['day'];
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

 $sql = "SELECT * FROM meal_status";
        $result = mysqli_query($conn, $sql);
             $a="meal_info_";
		$month=$_POST['month'];
	
	$monthname=$a.$month;    
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  $id=$row['stud_id'];
	  $status=$row['status'];
  if ($status == "On") {
	$sql1 = "UPDATE $monthname SET $day='1' WHERE stud_id=$id";
	if (mysqli_query($conn, $sql1)) {

} 
  }
    else {
	$sql1 = "UPDATE $monthname SET $day='0' WHERE stud_id=$id";
	if (mysqli_query($conn, $sql1)) {

} 
  }
}
}
}
?>
                </div>

            </section>
        </div>
    </div>

<br>


    <!-- Include FooterScripts -->
    <?php include_once "../includes/footerScripts.php";?>

</body>

</html>