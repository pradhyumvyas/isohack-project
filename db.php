<?php

$fist = $_POST['first'];
$last = $_POST['last'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$state = $_POST['state'];
$file = $_POST['file'];

$servername = "192.168.0.126";
$username = "root";
$password = "";
$dbname = "mysql";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  patientdb(First_name, Last_name, DOB, City, State1, File_upload)
VALUES ('$first', '$last', '$dob', '$city', '$state', '$file')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert(Data Successfull Registered)</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>