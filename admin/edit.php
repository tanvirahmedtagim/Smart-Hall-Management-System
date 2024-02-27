<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['edit_data_btn']))
{
 $day=$_POST['edit_id'];
$query="SELECT *FROM meal_chart WHERE day='$day' ";
$query_run= mysqli_query($conn, $query);
}

?>







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
<title>HALL MANAGEMENT SYSTEM | MEAL CHART</title>

<!-- Include HeaderScripts -->
<?php include_once "../includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">


</head>

<body>

    <!-- Include Admin Navbar -->
    <?php include_once "../includes/adminNavbar.php";?>

<div id="main-content">
    <h2 style="text-align: center;">Meal Chart Record</h2>
	<br>
	<?php
	foreach($query_run as $row)
	{
		?>
    <form class="post-form" action="update.php" method="post">
	 <h2 style="text-align: center;"><?php echo $row['day']?></h2>
	 <br>
      <div style="text-align: center;" class="form-group">
          <label>BreakFast</label>
          <input type="text" name="breakfast" value="<?php echo $row['breakfast']?>"/>
      </div>
      <div style="text-align: center;" class="form-group">
          <label>Lunch</label>
          <input type="text" name="lunch" value="<?php echo $row['breakfast']?>"/>
      </div>
       <div style="text-align: center;" class="form-group">
          <label>Dinner</label>
          <input type="text" name="dinner" value="<?php echo $row['dinner']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
	   <input type="hidden" name="edit_id" value="<?php echo $row['day'] ?>">
          <input  style=" vertical-align: middle;" name="update" class="submit" type="submit" value="Update"/>
      </div>
      
    </form>
	
	<?php
	}
		?>
</div>
</div>
 <!-- Include FooterScripts -->
    <?php include_once "../includes/footerScripts.php";?>
</body>
</html>
