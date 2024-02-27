
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['update']))
{
 $day=$_POST['edit_id'];
 $breakfast=$_POST['breakfast'];
 $lunch=$_POST['lunch'];
 $dinner=$_POST['dinner'];
$query="UPDATE meal_chart SET breakfast='$breakfast', lunch='$lunch', dinner='$dinner' WHERE day='$day'";
$query_run= mysqli_query($conn, $query);

if(mysqli_query($conn, $query)){
    echo "Records were updated successfully.";
	 include_once 'view_meal_chart.php';
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 
}

?>


