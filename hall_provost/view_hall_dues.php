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
    <?php include_once "../includes/hallNavbar.php";?>


    <div class="container">
        <div class="row mt-5">
            <section class="col-md-12">

                <h1 class="text-center font-Staatliches-heading">HALL DUES</h1>

                <div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">


                        <thead>
                            <tr class="tableizer-firstrow">
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Room No</th>
                                <th>Floor No</th>
								<th>Hall Charge</th>
                                <th>Meal Charge</th>
                                <th>Total Charge</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

try {

    # Sql Query
    $sql = "SELECT * FROM hall_dues";

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
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["room_no"]; ?></td>
                                <td><?php echo $row["floor_no"]; ?></td>
								<td><?php echo $row["hall_charge"]; ?></td>
                                <td><?php echo $row["meal_charge"]; ?></td>
                                <td><?php echo $row["total_charge"]; ?></td>
                            </tr>


                            <?php

        }

        ?>

                        </tbody>
                    </table>

                    <?php

    } else {
        echo "<tr><td class='text-center' colspan='4'>No Records Found</td></tr>";
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




    <!-- Include FooterScripts -->
    <?php include_once "../includes/footerScripts.php";?>

</body>

</html>