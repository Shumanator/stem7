<?php

session_start();
include 'db.php';


$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed: ". mysqli_connect_error());
}

$sql = "INSERT INTO creative (skill_name, comment) Values ('Creative', 'dfadf')";

if(mysqli_query($conn,$sql)){
	echo " Name 'creative' Created ";
}
else
{
	echo "Error Creating User creative: " .$sql . "<br>" .mysqli_error($conn);
}

$sql2 = "INSERT INTO communication (skill_name, comment) Values ('communication', 'ddfafd')";

if(mysqli_query($conn,$sql2)){
	echo " Name 'communication' Created ";
}
else
{
	echo "Error Creating User communication: " .$sql2 . "<br>" .mysqli_error($conn);
}

$sql3 = "INSERT INTO problem (skill_name, comment) Values ('problem', 'dfdadf')";

if(mysqli_query($conn,$sql3)){
	echo " Name 'problem' Created ";
}
else
{
	echo "Error Creating User problem: " .$sql3 . "<br>" .mysqli_error($conn);
}

$sql4 = "INSERT INTO intellectual (skill_name, comment) Values ('intellectual', 'dfadf')";

if(mysqli_query($conn,$sql4)){
	echo " Name 'intellectual' Created ";
}
else
{
	echo "Error Creating User intellectual: " .$sql4 . "<br>" .mysqli_error($conn);
}

$sql5 = "INSERT INTO decisions (skill_name, comment) Values ('decisions', 'dfaddaf')";

if(mysqli_query($conn,$sql5)){
	echo " Name 'decisions' Created ";
}
else
{
	echo "Error Creating User decisions: " .$sql5 . "<br>" .mysqli_error($conn);
}

$sql6 = "INSERT INTO flexibility (skill_name, comment) Values ('flexibility', 'dafd')";

if(mysqli_query($conn,$sql6)){
	echo " Name 'flexibility' Created ";
}
else
{
	echo "Error Creating User flexibility: " .$sql6 . "<br>" .mysqli_error($conn);
}

$sql7 = "INSERT INTO collaboration (skill_name, comment) Values ('collaboration', 'dafdf')";

if(mysqli_query($conn,$sql7)){
	echo " Name 'collaboration' Created ";
}
else
{
	echo "Error Creating User collaboration: " .$sql7 . "<br>" .mysqli_error($conn);
}


	

mysqli_close($conn);

?>