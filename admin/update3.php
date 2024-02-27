
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
 $name=$_POST['name'];
 $room_no=$_POST['room_no'];
 $floor_no=$_POST['floor_no'];
 $hall_charge=$_POST['hall_charge'];
 $meal_charge=$_POST['meal_charge'];
 $total_charge=$_POST['total_charge'];
$query="UPDATE hall_dues SET name='$name', room_no='$room_no', floor_no='$floor_no', hall_charge='$hall_charge', meal_charge='$meal_charge', total_charge='$total_charge' WHERE stud_id='$stud_id'";
$query_run= mysqli_query($conn, $query);

if(mysqli_query($conn, $query)){
    echo "Records were updated successfully.";
	 include_once 'view_hall_dues.php';
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 
}

?>


