<?php
	session_start();
	$i = 0;
	$medicine = $_SESSION['medicine'];
	$dosage = $_SESSION['dosage'];
	$days = $_SESSION['days'];
	$note = $_SESSION['note'];

	while($i < sizeof($medicine))
	{	
		echo $medicine[$i]." ".$dosage[$i]." ".$days[$i]." ".$note[$i];
		echo "<br>";
		$i++;
		
	}
?>