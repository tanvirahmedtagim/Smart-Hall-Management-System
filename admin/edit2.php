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
$query="SELECT *FROM user_information WHERE stud_id='$stud_id' ";
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
    <h2 style="text-align: center;">Student Record</h2>
	<br>
	<?php
	foreach($query_run as $row)
	{
		?>
    <form class="post-form" action="update2.php" method="post" enctype="multipart/form-data">
	 <br>
      <div style="text-align: center;" class="form-group">
          <label>First Name</label>
          <input type="text" name="firstname" value="<?php echo $row['firstName']?>"/>
      </div>
	    <div style="text-align: center;" class="form-group">
          <label>Last Name</label>
          <input type="text" name="lastname" value="<?php echo $row['lastName']?>"/>
      </div>
      <div style="text-align: center;" class="form-group">
          <label>Department</label>
          <input type="text" name="department" value="<?php echo $row['dept']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
          <label>Batch</label>
          <input type="text" name="batch" value="<?php echo $row['batch']?>"/>
      </div>
	    <div style="text-align: center;" class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?php echo $row['phone']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $row['email']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
          <label>Room No</label>
          <input type="text" name="room_no" value="<?php echo $row['room_no']?>"/>
      </div>
       <div style="text-align: center;" class="form-group">
          <label>Floor No</label>
          <input type="text" name="floor_no" value="<?php echo $row['floor_no']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
                                      <label for="" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="avatar" onchange="displayImg(this,$(this))">
                                                <img src="upload/<?php echo $row['avatar'] ?>" alt="" width="100px" height="100px" id="cimg">
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
