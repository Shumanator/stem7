<?php
session_start();
include 'db.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create 'main-topics'

$sql = "CREATE TABLE creative(
skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
skill_name VARCHAR(20) NOT NULL,
college_id VARCHAR(50),
comment VARCHAR(200)
)";


if (mysqli_query($conn, $sql)) {
    echo "Skill creative created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql2 = "CREATE TABLE communication(
    skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(20) NOT NULL,
    college_id VARCHAR(50),
    comment VARCHAR(200)
    )";
    
    
    if (mysqli_query($conn, $sql2)) {
        echo "Skill communication created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql3 = "CREATE TABLE problem(
        skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        skill_name VARCHAR(20) NOT NULL,
        college_id VARCHAR(50),
        comment VARCHAR(200)
        )";
        
        
        if (mysqli_query($conn, $sql3)) {
            echo "Skill problem created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }

        $sql4 = "CREATE TABLE intellectual(
            skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            skill_name VARCHAR(20) NOT NULL,
            college_id VARCHAR(50),
            comment VARCHAR(200)
            )";
            
            
            if (mysqli_query($conn, $sql4)) {
                echo "Skill intellectual created successfully";
            } else {
                echo "Error creating table: " . mysqli_error($conn);
            }

            $sql5 = "CREATE TABLE decisions(
                skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                skill_name VARCHAR(20) NOT NULL,
                college_id VARCHAR(50),
                comment VARCHAR(200)
                )";
                
                
                if (mysqli_query($conn, $sql5)) {
                    echo "Skill decisions created successfully";
                } else {
                    echo "Error creating table: " . mysqli_error($conn);
                }


                $sql6 = "CREATE TABLE flexibility(
                    skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    skill_name VARCHAR(20) NOT NULL,
                    college_id VARCHAR(50),
                    comment VARCHAR(200)
                    )";
                    
                    
                    if (mysqli_query($conn, $sql6)) {
                        echo "Skill flexibility created successfully";
                    } else {
                        echo "Error creating table: " . mysqli_error($conn);
                    }

                    $sql7 = "CREATE TABLE collaboration(
                        skill_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        skill_name VARCHAR(20) NOT NULL,
                        college_id VARCHAR(50),
                        comment VARCHAR(200)
                        )";
                        
                        
                        if (mysqli_query($conn, $sql7)) {
                            echo "Skill collaboration created successfully";
                        } else {
                            echo "Error creating table: " . mysqli_error($conn);
                        }


mysqli_close($conn);
