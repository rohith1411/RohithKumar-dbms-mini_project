<?php
	session_start();
	
	include('connection.php');
	$login = $_SESSION['login'];
	$username = $_SESSION['aadhaarid'];

	$sql = "update log_".$username." set log_out = CURRENT_TIMESTAMP() where log_in = '$login'";
	$result = mysqli_query($conn, $sql);
	 
	unset($_SESSION['aadhaarid']);
	session_destroy();
	
	header('Location: /Project/index.html ');

	exit();
?>