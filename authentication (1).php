<?php   
   
session_start();   
    
    include('connection.php');
    $username = $_POST['aadhaar'];  
    $password = $_POST['dob'];  
     
      
        $sql = "select * from aadhaar where aadhaar_id = '$username' and dob = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
        $name = $row['name']; 
       
        if($count == 1){ 

	    $_SESSION['aadhaarid'] = $username;
	    $_SESSION['name'] = $name;

	    $query1 = "create table if not exists log_".$username." (aadhaar_id BIGINT(12), log_in DATETIME, log_out DATETIME)";
	    $result1 = mysqli_query($conn, $query1);

	    $query2 = "insert into log_".$username." (aadhaar_id, log_in) values ('$username', CURRENT_TIMESTAMP())";	
	    $result2 = mysqli_query($conn, $query2);
	    
	    $query3 = "select *from log_".$username." where log_in = CURRENT_TIMESTAMP()";
	    $result3 = mysqli_query($conn, $query3);
	    $row1 = mysqli_fetch_array($result3);

	    $login = $row1['log_in'];
	
	    $_SESSION['login'] = $login;	

            header('Location: geolocation.html');
	    
        }  
        else{  
	    echo "<script>alert('Check your Credentials')</script>";
            echo "<script>location.replace('index.html')</script>";  
        }     
?>  