<?php
session_start();
include 'db.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$ucollege_id = mysqli_real_escape_string($conn,$_POST["college_id"]);

$sql = "DELETE FROM users WHERE college_id = '$ucollege_id'";

mysqli_query($conn, $sql);
  
mysqli_close($conn);
header('location: admin.php');