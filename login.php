<?php
session_start();

include 'db.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form 
     
     $myid = mysqli_real_escape_string($conn,$_POST['college_id']);
     $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
     
     $sql = "SELECT * FROM users WHERE college_id = '$myid' and password = '$mypassword'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $active = $row['active'];
     
     $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        //session_register;
		
		$_SESSION["collegeid"] = $myid;
        $_SESSION["password"] = $mypassword;
		
		
        
       header("Location: index.php");
        
}

    else {
        echo "Your Login Name or Password is invalid";
     }
  }
?>