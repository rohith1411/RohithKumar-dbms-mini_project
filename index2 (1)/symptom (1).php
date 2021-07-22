<?php
session_start();   
    
        include('connection.php');
	
	$temp = $_POST['temp'];
	$username = $_POST['aadhaar'];
	$name = $_POST['user'];
	
	$check = $_POST['checklist'];
	
	$i = 0;

	while($i < sizeof($check))
	{
		
		$query1 = "select *from medicine where symptom_name = '$check[$i]'";
		$query2= "insert into summary_".$username." (aadhaar_id, name, date, symptom, temperature) values ('$username', '$name', CURDATE(), '$check[$i]', $temp)";
		$query3 = "create table if not exists summary_".$username." (aadhaar_id BIGINT(12), name VARCHAR(50), date DATE, symptom VARCHAR(100), temperature INT(10))";	
		
		$result1 = mysqli_query($conn, $query1);  
        	$row1 = mysqli_fetch_array($result1);
	
		$medicine[$i] = $row1['med_name'];
		$dosage[$i] = $row1['dosage'];
		$days[$i] = $row1['days'];
		$note[$i] = $row1['note'];
		
		$result3 = mysqli_query($conn, $query3);		
		$result2 = mysqli_query($conn, $query2);
		
		//echo '<p style="font-family:arial; color: blue;"> MEDICINE: '.$medicine[$i].' DOSAGE: '.$dosage[$i].' DAYS: '.$days[$i].' NOTE: '.$note[$i].'</p><br>';
		
		$i++;
		

		
		
	}

	$query4 = "select *from medicine where symptom_name = 'supplement'";
	$result4 = mysqli_query($conn, $query4);
	$row2 = mysqli_fetch_array($result4);

	$med = $row2['med_name'];
	$dos = $row2['dosage'];
	$da = $row2['days'];
	$no = $row2['note'];


	$_SESSION['med'] = $med;
	$_SESSION['dos'] = $dos;
	$_SESSION['da'] = $da;
	$_SESSION['no'] = $no;

	$_SESSION['medicine'] = $medicine;
	$_SESSION['dosage'] = $dosage;
	$_SESSION['days'] = $days;
	$_SESSION['note'] = $note;

	header('Location: print.php');

?>