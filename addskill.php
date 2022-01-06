<?php
session_start();
include 'db.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$uskill = mysqli_escape_string($conn, $_POST['skill']);
$ucomment = mysqli_escape_string($conn, $_POST['comment']);
$id = mysqli_escape_string($conn, $_POST['cid']);



if ($uskill = 'creative') {
    $sql = "INSERT INTO creative (college_id, comment) VALUES ('$id','$ucomment')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
} elseif ($uskill = 'communication') {
    $sql = "INSERT INTO communication (comment, college_id) VALUES ('$ucomment', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
} elseif ($uskill = 'problem') {
    $sql = "INSERT INTO problem (comment, college_id) VALUES ('$ucomment', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
} elseif ($uskill = 'intellectual') {
    $sql = "INSERT INTO intellectual (comment, college_id) VALUES ('$ucomment', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
} elseif ($uskill = 'decisions') {
    $sql = "INSERT INTO decisions (comment, college_id) VALUES ('$ucomment', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
} elseif ($uskill = 'flexibility') {
    $sql = "INSERT INTO flexibility (comment, college_id) VALUES ('$ucomment', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
} elseif ($uskill = 'collaboration') {
    $sql = "INSERT INTO collaboration (comment, college_id) VALUES ('$ucomment', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Skill Added";
    } else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
}

mysqli_close($conn);
