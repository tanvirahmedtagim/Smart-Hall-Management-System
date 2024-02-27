<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['edit_data_btn']))
{
 $stud_id=$_POST['edit_id'];
$query="SELECT *FROM hall_dues WHERE stud_id='$stud_id' ";
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
    <h2 style="text-align: center;">Hall Dues Record</h2>
	<br>
	<?php
	foreach($query_run as $row)
	{
		?>
    <form class="post-form" action="update3.php" method="post">
	 <br>
      <div style="text-align: center;" class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $row['name']?>"/>
      </div>
	    <div style="text-align: center;" class="form-group">
          <label>Room NO</label>
          <input type="text" name="room_no" value="<?php echo $row['room_no']?>"/>
      </div>
      <div style="text-align: center;" class="form-group">
          <label>Floor NO</label>
          <input type="text" name="floor_no" value="<?php echo $row['floor_no']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
          <label>Hall Charge</label>
          <input type="text" name="hall_charge" value="<?php echo $row['hall_charge']?>"/>
      </div>
	    <div style="text-align: center;" class="form-group">
          <label>Meal Charge</label>
          <input type="text" name="meal_charge" value="<?php echo $row['meal_charge']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
          <label>Total Charge</label>
          <input type="text" name="total_charge" value="<?php echo $row['total_charge']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
	   <input type="hidden" name="edit_id" value="<?php echo $row['stud_id'] ?>">
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
