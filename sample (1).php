<?php
	session_start();

	include('connection.php');
	if($conn == false){
		die("Error: Could not connect.".mysqli_connect_error());
}
	$username = $_SESSION['aadhaarid'];
	
	
	if (!empty($_COOKIE['lat'])){
		$lat = $_COOKIE['lat'];
	}
	
	if (!empty($_COOKIE['long'])){
		$long = $_COOKIE['long'];
	}

	$sql = "UPDATE location SET latitude = '$lat', longitude = '$long', date = CURRENT_TIMESTAMP() where aadhaar_id = '$username'";
	
		if(mysqli_query($conn, $sql)){
			header('Location: index2/index.php');
		}
		else{
			echo "<script>alert('ERROR')</script>";
		}

	
	
?>
