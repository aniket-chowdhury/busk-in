<?php
	include('config.php');
	if($db === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	
	$email = mysqli_real_escape_string($db, $_REQUEST['email']);
	
	if($email) {echo "Success";}
	else {echo "failure";}

	$sql = "INSERT INTO subscribe(email) VALUES ('$email')";

	mysqli_query($db,$sql)
 

?>