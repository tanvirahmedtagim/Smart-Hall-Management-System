<?php

//--------------------------------->> DB CONFIG
require_once "../config/configPDO.php";

//--------------------------------->> START SESSION
session_start();

//--------------------------------->> START SESSION
if (isset($_SESSION["admin"])) {
    header("location: adminIndex.php");
}

?>
 <?php

try {
  if (isset($_POST['UN']) && isset($_POST['PASS'])) {
    $userName = $_POST['UN'];
    $password = $_POST['PASS'];
} else {
    die();
}
        # Sql Query
        $sql = "SELECT password from hall_provost WHERE userName = :userName";

        # Prepare Query
        $result = $conn->prepare($sql);

        # Binding Value
        $result->bindValue(":userName", $userName);

        # Execute Query
        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $dbpassword = $row["password"];

        if (password_verify($password, $dbpassword)) {

            # If verify redirect to Index Page
            $_SESSION['admin'] = $userName;
            header("Location: adminIndex.php");

        } else {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Unable to Login',
                text: 'Please Check Your Credentials'
              })</script>";
             header("Location: ../index.php");
        }

}
 catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>
