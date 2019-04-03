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
$sql = "SELECT email,fname from registeredUsers1 where email='$email' AND password='$password' ";
$result = $conn->query($sql);
if ($result) {
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["email"] = $row['email'];
        setcookie("user",$row['fname'], time() + (86400 * 30), "/");
        header('Location: mainPage.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: login.php?msg=failed');
        exit();
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: login.php?msg=failed');
    exit();
}

$conn->close();
?>
