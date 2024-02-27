<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['edit_data_btn']))
{
 $id=$_POST['edit_id'];
$query="SELECT *FROM house_tutor WHERE tutor_id='$id' ";
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
<title>HALL MANAGEMENT SYSTEM | HOUSE TUTOR</title>

<!-- Include HeaderScripts -->
<?php include_once "../includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">


</head>

<body>

    <!-- Include Admin Navbar -->
    <?php include_once "../includes/adminNavbar.php";?>

<div id="main-content">
    <h2 style="text-align: center;">House Tutor Record</h2>
	<br>
	<?php
	foreach($query_run as $row)
	{
		?>
    <form class="post-form" action="update1.php" method="post" enctype="multipart/form-data">
	 <br>
      <div style="text-align: center;" class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $row['name']?>"/>
      </div>
      <div style="text-align: center;" class="form-group">
          <label>Department</label>
          <input type="text" name="department" value="<?php echo $row['department']?>"/>
      </div>
       <div style="text-align: center;" class="form-group">
          <label>Floor Incharge</label>
          <input type="text" name="floor_incharge" value="<?php echo $row['floor_incharge']?>"/>
      </div>
	   <div style="text-align: center;" class="form-group">
                                      <label for="" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="avatar" onchange="displayImg(this,$(this))">
                                                <img src="upload/<?php echo $row['avatar'] ?>" alt="" width="100px" height="100px" id="cimg">
      </div>
	   <div style="text-align: center;" class="form-group">
	   <input type="hidden" name="edit_id" value="<?php echo $row['tutor_id'] ?>">
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
