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
$sql = "INSERT INTO registeredUsers1 (fName, lName, email,mobile,dob,password,gender,country,address,vacation,business)
VALUES ('$fname','$lname','$email',$mobNo,'$date','$password','$gender','$Country','$address',1,1)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("Location: login.php");
    exit();
} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location: signup.php?msg=failed");
  exit();
}

$conn->close();
?>
