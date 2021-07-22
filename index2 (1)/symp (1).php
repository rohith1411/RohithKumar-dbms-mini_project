<?php 
	session_start(); 	include('connection.php');	$username = $_SESSION['aadhaarid'];	$sql = "select * from aadhaar where aadhaar_id = '$username'";	$result = mysqli_query($conn, $sql);    $row = mysqli_fetch_array($result); 		$address = $row['address'];	$phone = $row['phone_number'];?>
<!DOCTYPE html><html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Symptom Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"

      rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"

      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"

      crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h5 {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/c43630149befa5c9559813f72e99bcb6bf149e62.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio, label.check {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      .checkbox-item label {
      margin: 5px 20px 10px 0;
      }
      label.radio:before, label.check:before {
      content: "";
      position: absolute;
      left: 0;
      }
      label.radio:before {
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #095484;
      }
      label.check:before {
      top: 2px;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #095484;
      }
      input[type=checkbox]:checked + .check:before {
      background: #095484;
      }
      label.radio:after {
      left: 5px;
      border: 3px solid #095484;
      }
      label.check:after {
      left: 4px;
      border: 3px solid #fff;
      }
      label.radio:after, label.check:after {
      content: "";
      position: absolute;
      top: 6px;
      width: 8px;
      height: 4px;
      background: transparent;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form name="symptom" action="symptom.php" method="POST">
        <div class="banner">
          <h1>Symptom Form</h1>
        </div>
        <br>
        <div class="item">
          <p>Name <span class="required">*</span></p>
          <input readonly="readonly" name="user" required="" value="<?php
                        $name = $_SESSION['name'];                        echo $name;                        ?>"

            type="text"> </div>
        <div class="item">
          <p>Aadhaar ID<span class="required">*</span></p>
          <input readonly="readonly" name="aadhaar" required="" value="<?php
                        $username = $_SESSION['aadhaarid'];                        echo $username;                        ?>"

            type="text"></div>
        <div class="item">
          <p>Phone<span class="required">*</span></p>
          <input readonly="readonly" name="name" required="" value="<?php
                        echo $phone;                        ?>" type="text">
        </div>
        <div class="item">
          <p>Temperature (in degree Fahrenheit)l<span class="required">*</span></p>
          <input name="temp" required="" type="text"> </div>
        <div class="item">
          <p>Address<span class="required">*</span></p>
          <input readonly="readonly" name="name" required="" value="<?php
                        echo $address;                        ?>" type="text">
        </div>
        <br>
        <div class="question">
          <p>Symptoms:<span class="required">*</span></p>
          <small>Please select those symptoms you feel you are having.</small>
          <div class="question-answer checkbox-item">
            <div> <input value="none" id="check_14" name="checklist[]" type="checkbox">
              <label for="check_14" class="check"><span>None</span></label> </div>
            <div> <input value="fever" id="check_1" name="checklist[]" type="checkbox">
              <label for="check_1" class="check"><span>Fever</span></label> </div>
            <div> <input value="cold" id="check_2" name="checklist[]" type="checkbox">
              <label for="check_2" class="check"><span>Cold</span></label> </div>
            <div> <input value="dry cough" id="check_3" name="checklist[]" type="checkbox">
              <label for="check_3" class="check"><span>Dry Cough</span></label>
            </div>
            <div> <input value="mucus cough" id="check_4" name="checklist[]" type="checkbox">
              <label for="check_4" class="check"><span>Mucus cough</span></label>
            </div>
            <div> <input value="fatigue" id="check_5" name="checklist[]" type="checkbox">
              <label for="check_5" class="check"><span>Fatigue</span></label> </div>
            <div> <input value="body pain" id="check_6" name="checklist[]" type="checkbox">
              <label for="check_6" class="check"><span>Body Pain</span></label>
            </div>
            <div> <input value="constipation" id="check_7" name="checklist[]" type="checkbox">
              <label for="check_7" class="check"><span>Constipation</span></label></div>
            <div> <input value="diarrhoea" id="check_8" name="checklist[]" type="checkbox">
              <label for="check_8" class="check"><span></span>Diarrhoea</label></div>
            <div> <input value="difficulty in breathing" id="check_9" name="checklist[]"

                type="checkbox"> <label for="check_9" class="check"><span></span>Difficulty
                in Breathing</label></div>
            <div> <input value="sore throat/headache" id="check_10" name="checklist[]"

                type="checkbox"> <label for="check_10" class="check"><span></span>Sore
                throat/Headache</label></div>
            <div> <input value="allergic sneezing" id="check_11" name="checklist[]"

                type="checkbox"> <label for="check_11" class="check"><span></span>Allergic
                Sneezing</label></div>
            <div> <input value="indigestion/heart burn" id="check_12" name="checklist[]"

                type="checkbox"> <label for="check_12" class="check"><span></span>Indigestion/Heart
                burn</label></div>
            <div> <input value="vomiting" id="check_13" name="checklist[]" type="checkbox">
              <label for="check_13" class="check"><span></span>Vomiting</label></div>
          </div>
          <br>
          <div class="btn-block"> <button type="submit"> Submit </button></div>
        </div>
      </form>
    </div>
  </body>
</html>
