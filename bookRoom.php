<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hotel Management System";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
extract($_POST);
$user=$_COOKIE["user"];
$sql = "INSERT INTO bookings (startDate,endDate,people,userName)
VALUES ('$startDate','$endDate','$people','$user')";
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
    header("Location: mainPage.php?booked=true");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  //header("Location: signup.php?msg=failed");
  exit();
}

$conn->close();
?>
