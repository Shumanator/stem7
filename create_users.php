<?php

session_start();
include 'db.php';

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
	die("Connection Failed: ". mysqli_connect_error());
}

// create table called "forum_users", with username, password and admintype/level, email and user_ID

$sql = "CREATE Table users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
college_id INT(11) NOT NULL,
firstname varchar(20) NOT NULL,
lastname varchar(20) NOT NULL,
password varchar (20) NOT NULL,
staff int(11)
)";

if(mysqli_query($conn,$sql))
{
	echo "Table Created";
}
else
{
	echo "Error Creating Table: " .mysqli_error($conn);
}

//Enter Data into Table
$sql = "INSERT INTO users (firstname, lastname, password, staff) Values ('Dan', 'Shuman', 'pw', 0)";

//Check if user has been made
if(mysqli_query($conn,$sql)){
	echo " User 'Dan' Created ";
}
else
{
	echo "Error Creating User Dan: " .$sql . "<br>" .mysqli_error($conn);
}

	

mysqli_close($conn);

?>

