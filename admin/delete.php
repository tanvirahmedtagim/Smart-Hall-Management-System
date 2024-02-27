
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['delete_data_btn']))
{
	 $stud_id=$_POST['delete_id'];
$query="DELETE FROM user_information WHERE stud_id='$stud_id'";
$query_run= mysqli_query($conn, $query);

if(mysqli_query($conn, $query)){
    echo "Records were deleted successfully.";
	 include_once 'view_allotment_list.php';
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 
}

?>


