<?php
	session_start();

	$status = $_POST['status'];
	include('connection.php');
	
	$username = $_SESSION['aadhaarid'];
	if($status == "+ve"){
		$query1 = "update covid_status set status = '+ve' where aadhaar_id = '$username'";
		$result1 = mysqli_query($conn, $query1);
		header('location: symp.php');
	}

	elseif ($status == "-ve"){
		$query2 = "update covid_status set status = '-ve' where aadhaar_id = '$username'";
		$result2 = mysqli_query($conn, $query2);
		header('location: symp.php');
	}

	else{
		echo "<script> alert('Wrong Input')</script>";
		echo "<script>location.replace('index1.php')</script>"; 
	}
?>