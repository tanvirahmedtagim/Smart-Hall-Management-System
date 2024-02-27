
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['update']))
{
 $tutor_id=$_POST['edit_id'];
 $name=$_POST['name'];
 $department=$_POST['department'];
 $floor_incharge=$_POST['floor_incharge'];
  $tempname = $_FILES["avatar"]["name"];
  $bannerpath="upload/".$tempname;
    move_uploaded_file($_FILES["avatar"]["tmp_name"],$bannerpath);
  $query= "UPDATE house_tutor SET name='$name', department='$department', floor_incharge='$floor_incharge', avatar='$tempname' WHERE tutor_id='$tutor_id'";
$query_run= mysqli_query($conn, $query);

if(mysqli_query($conn, $query)){
    echo "Records were updated successfully.";
	  include_once 'view_house_tutor.php';
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 
}

?>


