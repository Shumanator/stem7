<?php
session_start();
include 'db.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//drop table
$sql = "DROP Table creative";

if (mysqli_query($conn, $sql)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}

$sql2 = "DROP Table communication";

if (mysqli_query($conn, $sql2)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}

$sql3 = "DROP Table problem";

if (mysqli_query($conn, $sql3)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}

$sql = "DROP Table intellectual";

if (mysqli_query($conn, $sql)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}

$sql2 = "DROP Table decisions";

if (mysqli_query($conn, $sql2)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}

$sql3 = "DROP Table flexibility";

if (mysqli_query($conn, $sql3)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}


$sql3 = "DROP Table collaboration";

if (mysqli_query($conn, $sql3)) {
    echo "Table dropped";
} else {
    echo "Error dropping table " . mysqli_error($conn);
}

mysqli_close($conn);
?>