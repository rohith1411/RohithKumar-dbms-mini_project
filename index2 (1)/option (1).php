<?php
	session_start();
	
	$option = $_POST['option'];
	include('connection.php');
	
	$username = $_SESSION['aadhaarid'];

	if($option == "Yes"){
		$query1 = "update covid_status set test = 'Yes' where aadhaar_id = '$username'";
		$result1 = mysqli_query($conn, $query1);
		header('location: index1.php');
	}

	elseif ($option == "No"){
		
		$query2 = "update covid_status set test = 'No' where aadhaar_id = '$username'";
		$result2 = mysqli_query($conn, $query2);
		header('location: index3/order form.php');
	}

	else{
		echo "<script> alert('Wrong Input')</script>";
		echo "<script>location.replace('index.php')</script>"; 
	}
?>