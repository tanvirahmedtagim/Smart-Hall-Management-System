<?php
//--------------------------------->> DB CONFIG
require_once "../config/configPDO.php";

//--------------------------------->> SESSION START
session_start();

//--------------------------------->> CHECK USER
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
	<title>HOSTEL MANAGEMENT SYSTEM | REGISTER</title>

	<!-- Include HeaderScripts -->
	  <?php include_once "../includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">

</head>

<body>
   <?php include_once "../includes/adminNavbar.php";?>
<?php

try {

    if (isset($_POST["register-user"])) {

        $stud_id = htmlspecialchars($_POST["stud_id"]);
        $email = htmlspecialchars($_POST["email"]);
        $firstName = htmlspecialchars($_POST["firstName"]);
        $lastName = htmlspecialchars($_POST["lastName"]);
        $password = htmlspecialchars($_POST["password"]);
		$department = htmlspecialchars($_POST["department"]);
        $batch = htmlspecialchars($_POST["batch"]);
		$phone = htmlspecialchars($_POST["phone"]);
        $familycontact = htmlspecialchars($_POST["familycontact"]);
		$address = htmlspecialchars($_POST["address"]);
        $room = htmlspecialchars($_POST["room"]);
		$floor = htmlspecialchars($_POST["floor"]);
        $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

		
		$tempname = $_FILES["avatar"]["name"];  

 $bannerpath="../admin/upload/".$tempname;
 move_uploaded_file($_FILES["avatar"]["tmp_name"],$bannerpath);
		 $bannerpath1="../hall_provost/upload/".$tempname;
 move_uploaded_file($_FILES["avatar"]["tmp_name"],$bannerpath1);

        $sql1 = "SELECT * FROM user_information  WHERE stud_id = :stud_id";

        $result1 = $conn->prepare($sql1);

        $result1->bindValue(":stud_id", $stud_id);


                # Hash Password
                $hashPass = password_hash($password, PASSWORD_BCRYPT);
                $hashConPass = password_hash($confirmPassword, PASSWORD_BCRYPT);

                # Sql Query
                $sql = "INSERT INTO user_information (stud_id, email, firstName, lastName, dept, batch, phone, family_contact, address, password, room_no, floor_no, avatar) VALUES
		(:stud_id,:email,:firstName,:lastName,:department,:batch,:phone,:familycontact,:address,:hashPass,:room,:floor,'$tempname')";
                 $name=$firstName.' '.$lastName; 
				  
				  
                # Prepare Query
                $result = $conn->prepare($sql);

                # Binding Value
                $result->bindValue(":stud_id", $stud_id);
                $result->bindValue(":firstName", $firstName);
                $result->bindValue(":lastName", $lastName);
                $result->bindValue(":hashPass", $hashPass);
                $result->bindValue(":email", $email);
                $result->bindValue(":department", $department);
				 $result->bindValue(":batch", $batch);
                $result->bindValue(":phone", $phone);
                $result->bindValue(":familycontact", $familycontact);
                $result->bindValue(":address", $address);
				 $result->bindValue(":room", $room);
                $result->bindValue(":floor", $floor);
                
				
				
				
				 

// check if the user has clicked the button "UPLOAD" 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql2 = "INSERT INTO hall_dues (stud_id, name, room_no, floor_no, hall_charge, meal_charge, total_charge) VALUES
		('$stud_id','$name','$room','$floor','','','')"; 
if (mysqli_query($conn1, $sql2)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
}
$time=date("Y-m-d h:i:sa");
$status="On";
$sql3 = "INSERT INTO meal_status (stud_id, status, date_created) VALUES
		('$stud_id','$status','$time')"; 
if (mysqli_query($conn1, $sql3)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
}
 $a="meal_info_";
		$month=$_POST['month'];
	
	$monthname=$a.$month; 
$sql4 = "INSERT INTO $monthname (stud_id, Day1, Day2, Day3, Day4, Day5, Day6, Day7, Day8, Day9, Day10, Day11, Day12, Day13, Day14, Day15, Day16, Day17, Day18, Day19, Day20, Day21, Day22, Day23, Day24, Day25, Day26, Day27, Day28, Day29, Day30, Day31) VALUES
		('$stud_id','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')"; 
if (mysqli_query($conn1, $sql4)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
}
mysqli_close($conn1);

    



                # Execute Query
                $result->execute();
				 

                if ($result) {
                    echo "<script>Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'You have registered successfully!',
				})</script>";

                } else {
                    echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'We failed to register you!',
                })</script>";
                }

             }
  

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>

	<!-- Include Auth Navbar -->
   <?php

?>


	<div class="container my-5">
		<div class="row">

			<div class="col-md-6 offset-md-3">

				<h3 class="font-time  text-center text-uppercase">Add New Student</h3>

				<form action="" method="post" id="userRegisterForm" enctype="multipart/form-data">

				<div class="form-group">
					<label for="stud_id">Student ID</label>
					<input type="text" name="stud_id" id="stud_id" class="form-control"
						placeholder="Enter Student Student ID">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control"
						placeholder="Enter Student Email">
				</div>


				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" class="form-control"
						placeholder="Enter Student First Name">
				</div>

				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" class="form-control"
						placeholder="Enter Student Last Name" aria-describedby="helpId">
				</div>

                	<div class="form-group">
					<label for="department">Department</label>
					<input type="text" name="department" id="department" class="form-control"
						placeholder="Enter Student department">
				</div>
					<div class="form-group">
					<label for="batch">Batch</label>
					<input type="text" name="batch" id="batch" class="form-control"
						placeholder="Enter Student Batch">
				</div>
					<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" name="phone" id="phone" class="form-control"
						placeholder="Enter Your Phone">
				</div>
					<div class="form-group">
					<label for="familycontact">Family Contact</label>
					<input type="text" name="familycontact" id="familycontact" class="form-control"
						placeholder="Enter Your Family Contact" >
				</div>
				
				
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" name="address" id="address" class="form-control"
						placeholder="Enter Your Address" >
				</div>
				
				<div class="form-group">
					<label for="room">Room No</label>
					<input type="text" name="room" id="room" class="form-control"
						placeholder="Enter Your Room" >
				</div>
				
				<div class="form-group">
					<label for="floor">Floor No</label>
					<input type="text" name="floor" id="floor" class="form-control"
						placeholder="Enter Your Floor" >
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control"
						placeholder="Enter Your Password" aria-describedby="helpId">
						 <small class="text-danger">Password should Contain atleast 8 Character, Minimum one uppercase letter,
               Minimum one lowercase letter,
               minimum one number, Minimum one special character. </small>
				</div>

				<div class="form-group">
					<label for="confirmPassword">Confirm Password</label>
					<input type="password" name="confirmPassword" id="confirmPassword" class="form-control"
						placeholder="Confirm Your Password" aria-describedby="helpId">
				</div>
                <div class="form-group">
					<label for="floor">Avatar</label>
					<input type="file" class="form-control" name="avatar" onchange="displayImg(this,$(this))">
				</div>
				 <div class="form-group">
                <label for="month">Choose Month:</label>
<select id="month" name="month">
  <option value="november22">November 2022</option>
  <option value="december22">December 2022</option>
  <option value="january23">January 2023</option>
  <option value="february23">February 2023</option>
</select>
</div>

				<button type="submit" name="register-user" id="register-user"
					class="btn btn-primary mt-3">Submit</button>

					</form>


			</div>
		</div>
	</div>

	<!-- Include FooterScripts -->
	<?php include_once "../includes/footerScripts.php";?>

	<!-- Javascript -->
	<script src="js/register.js"></script>

</body>

</html>