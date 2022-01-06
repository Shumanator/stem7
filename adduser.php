<?php
session_start();
include 'db.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$icollegeid = $_POST["college_id"];
$ifirst = $_POST["firstname"];
$ilast = $_POST["lastname"];
$ipassword = $_POST["password"];
$istaff = 0;

$sql = "INSERT INTO users (college_id, firstname, lastname, password, staff) VALUES
('$icollegeid', '$ifirst', '$ilast', '$ipassword', '$istaff')";

if (mysqli_query($conn, $sql)) {
    echo "New user added";
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}



?>
