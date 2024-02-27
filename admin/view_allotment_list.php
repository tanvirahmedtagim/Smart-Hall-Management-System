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
<title>HALL MANAGEMENT SYSTEM | ALLOTMENT</title>

<!-- Include HeaderScripts -->
<?php include_once "../includes/headerScripts.php";?>
<link rel="stylesheet" href="../css/common.css">


</head>

<body>

    <!-- Include Admin Navbar -->
    <?php include_once "../includes/adminNavbar.php";?>

<div style="text-align: center;" class="form-group">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
   </div>
    <div class="container">
        <div class="row">
            <section class="col-md-12">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed" id="myTable">


                        <thead>
                            <tr class="tableizer-firstrow">
							    <th>Student ID</th>
                                <th>First Name </th>
                                <th>Lastname</th>
                                <th>Department</th>
								<th>Batch</th>
								<th>Room</th>
								<th>Floor</th>
								<th>Avatar</th>
								<th>Action1</th>
								<th>Action2</th>
                            </tr>
                        </thead>

                        <tbody>
        
		
		
		
		
		
                            <?php

try {

    # Sql Query
    $sql = "SELECT * FROM user_information";

    # Prepare Query
    $result = $conn->prepare($sql);

    # Execute Query
    $result->execute();

    # Checking Wether Count Greater than 0
    if ($result->rowCount() > 0) {

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            ?>

                            <tr>
							    <td><?php echo $row["stud_id"]; ?></td>
                                <td><?php echo $row["firstName"]; ?></td>
                                <td><?php echo $row["lastName"]; ?></td>
                                <td><?php echo $row["dept"]; ?></td>
								<td><?php echo $row["batch"]; ?></td>
								<td><?php echo $row["room_no"]; ?></td>
								<td><?php echo $row["floor_no"]; ?></td>
								<td><img src="upload/<?php echo $row['avatar'] ?>" alt="" width="100px" height="100px" id="cimg"></td>
								<td>
								<form action="edit2.php" method="POST">
								<input type="hidden" name="edit_id" value="<?php echo $row['stud_id'] ?>">
								<button type="submit" name="edit_data_btn" class="btn nbtn-success"> Edit </button>
								</form>
								</td>
								<td>
								<form action="delete.php" method="POST">
								<input type="hidden" name="delete_id" value="<?php echo $row['stud_id'] ?>">
								<button type="submit" name="delete_data_btn" class="btn nbtn-success"> Delete </button>
								</form>
								</td>
                            </tr>


                            <?php

        }

        ?>

                        </tbody>
                    </table>

                    <?php

    } else {
        echo "<tr><td colspan='4'>No Records Found</td></tr>";
    }

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>
                </div>

            </section>
        </div>
    </div>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



    <!-- Include FooterScripts -->
    <?php include_once "../includes/footerScripts.php";?>

</body>

</html>