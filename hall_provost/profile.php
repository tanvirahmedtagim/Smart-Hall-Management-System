<?php

//------------------------->> DB CONFIG
require_once "../config/configPDO.php";

//------------------------->> SESSION START
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
	<title>HALL MANAGEMENT SYSTEM |  Profile</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include HeaderScripts -->
	<?php include_once "../includes/headerScripts.php";?>

<link rel="stylesheet" href="../css/common.css">
</head>

<body>
<!-- Include HeaderScripts -->
    <?php include_once "../includes/hallNavbar.php";?>
 <div class="container">

		
			
<?php

try {

    $sql = "SELECT * FROM hall_provost";

    # Prepare Query
    $result = $conn->prepare($sql);

    # Execute Query
    $result->execute();
     
 

                  


} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}
  $row = $result->fetch(PDO::FETCH_ASSOC)
?>
     <img style=" display: block;
  margin-left: auto;
  margin-right: auto;" src="../hall_provost/upload/<?php echo $row['avatar'] ?>" alt="" width="300px" height="300px" id="cimg"></td> 
 <h1 class="text-center font-Staatliches-heading"><?php echo "Hall Provost" ?></h1> 
 <h3 style="text-align: center;"><?php echo $row["name"] ?></h3> 
 <h5 style="text-align: center;">Eamil: <?php echo $row["userName"]; ?></h5>
  <h5 style="text-align: center;">Phone: +880-1708503567</h5>
 <h5 style="text-align: center;">Designation: Assoc. Prof. and head</h5>
  <h5 style="text-align: center;">Department of Physics</h5>
    </div>
	<div style=" padding: 70px 0; border: 3px solid green;text-align: center;">
	             <h5 style="text-align: center;">Message From Hall Provost:</h5>
  <p>This is a six storeyed hall for the accommodation of male students of BAUET. The hall is given its name according to the prominent river ‘Boral’ of Natore. Number of seat capacity is 466. The hall provides various facilities for the comfort and pleasure of the students, such as modern building and room with tiles, steel cot, mattress, shoe rack, modern toilet, geyser, Wi-fi facility, newspaper, hygienic kitchen and dining room, purified water, TV with other indoor and outdoor recreational facilities, standard cook and hygienic food at competitive price, CC TV, PA system, biometric exit and entry machine, 24/7 hours security, prayer room, reading room, standby generator, and medical facility.</p>
</div>
<br>
	<!-- Include FooterScripts -->
	<?php include_once "../includes/footerScripts.php";?>

</body>

</html>