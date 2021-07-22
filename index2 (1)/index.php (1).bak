<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Covid Test</title>
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="  background-color: #33ffff;">
    <div class="signupSection">
      <div class="info">
        <h2><?php 	
			session_start();
		  $username = $_SESSION['aadhaarid'];
			$name = $_SESSION['name'];
			echo "Welcome, ".$name." .";
			
			
			?></h2>
        <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
        <p>CovidTracker</p>
      </div>
      <form name="f2" action="option.php" method="POST" class="signupForm" >
        <h2>Did you take the COVID test?</h2>
        <ul class="noBullet">
          <li> <label for="option"></label> <input class="inputFields" id="option"

              name="option" placeholder="Yes/No" value="" oninput="return userNameValidation(this.value)"

              required="" type="text"> </li>
          <li id="center-btn"> <input id="join-btn" name="submit" alt="Submit"

value="Submit" type="submit"> </li>
        </ul>
      </form>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>
