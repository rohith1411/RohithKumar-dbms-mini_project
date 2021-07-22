<?php
		session_start();
	
		include('connection.php');

		$username = $_SESSION['aadhaarid'];
		$name = $_SESSION['name'];
		$orderid = uniqid();
		$address = $_POST['address'];

		$sql = "create table if not exists selfkit_order (order_id varchar(20) PRIMARY KEY, date DATE, aadhaar_id BIGINT(12), name varchar(50), address varchar(100), status varchar(20))";
		$result = mysqli_query($conn, $sql);

		$query1 = "insert into selfkit_order (order_id, aadhaar_id, date, name, address, status) values ('$orderid', '$username', CURDATE(), '$name', '$address', 'ordered')";
		$result1 = mysqli_query($conn, $query1);
		
		header('Location: /Project/index2/symp.php');
?>
