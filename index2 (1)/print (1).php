<?php
	session_start();
	$i = 0;
	$medicine = $_SESSION['medicine'];
	$dosage = $_SESSION['dosage'];
	$days = $_SESSION['days'];
	$note = $_SESSION['note'];

	$med = $_SESSION['med'];
	$dos = $_SESSION['dos'];
	$da = $_SESSION['da'];
	$no = $_SESSION['no'];

	

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style>
      table {
  font-family: arial, sans-serif;
  font-weight: bold;
  font-size: 150%;
  border-collapse: collapse;
  width: 100%;
}
th {
	font-weight: 1000;
}
td, th {
  border: 3px solid black;
  text-align: left;
  padding: 8px;
}
 
.button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: auto;
  cursor: pointer;
}

.log {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
 
  font-size: 10px;
 
  cursor: pointer;
}      
</style>      


	<SCRIPT type="text/javascript">
 		window.history.forward();
 		function noBack() { window.history.forward(); }
	</SCRIPT>
	
	

</head>
  <body style="      background-image: url('prescription.jpg'); background-repeat: no-repeat; background-size: cover;">
    
    <form action="log_out.php">
    <h1 style="text-align: center; font-size: 60px; font-weight: bold;"> PRESCRIPTION 
    <input class = "log" style = "float:right;" type="submit" value="Log out"/>
    </h1>
	</form>
    <table>
      <tbody>
        <tr>
          <th>Medicine Name</th>
          <th>Dosage</th>
          <th>Days</th>
          <th>Note</th>
        </tr>
        <?php
		while($i < sizeof($medicine))		
		{
			echo"<tr>
				<td>$medicine[$i]</td>
				<td>$dosage[$i]</td>
				<td>$days[$i]</td>
				<td>$note[$i]</td>
			</tr>";
			$i++;
		}
		
		echo"<tr>
				<td>$med</td>
				<td>$dos</td>
				<td>$da</td>
				<td>$no</td>
			</tr>";
	?>
        
      </tbody>
    </table>
	
    <p><br></p>
    <button class="button"  onclick="window.print()">PRINT</button>
    
  </body>
</html>
