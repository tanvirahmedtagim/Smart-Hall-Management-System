
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['update']))
{
 $stud_id=$_POST['edit_id'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $department=$_POST['department'];
 $batch=$_POST['batch'];
  $phone=$_POST['phone'];
 $email=$_POST['email'];
 $room_no=$_POST['room_no'];
 $floor_no=$_POST['floor_no'];
  $tempname = $_FILES["avatar"]["name"];
  $bannerpath="upload/".$tempname;
    move_uploaded_file($_FILES["avatar"]["tmp_name"],$bannerpath);
  $query= "UPDATE user_information SET email='$email', firstName='$firstname', lastName='$lastname', dept='$department', batch='$batch', phone='$phone', room_no='$room_no', floor_no='$floor_no', avatar='$tempname' WHERE stud_id='$stud_id'";
$query_run= mysqli_query($conn, $query);

if(mysqli_query($conn, $query)){
    echo "Records were updated successfully.";
	  include_once 'view_allotment_list.php';
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 
}

?>


