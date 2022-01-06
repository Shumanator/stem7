<?php
session_start();
include 'db.php';
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection Failed: ". mysqli_connect_error());
}
$sql="Select * From creative";

$result=mysqli_query($conn,$sql);

$creative=array();
while($row = mysqli_fetch_array($result))
{
	$creative[]=$row;
}
mysqli_close($conn);
foreach($creative as $creative):
	echo $creative["skill_id"] ." ";
	echo $creative["skill_name"] ." ";
	echo $creative["college_id"] ." ";
	echo $creative["comment"] ." ";

	echo "<br>";

endforeach;