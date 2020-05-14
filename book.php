<!DOCTYPE HTML> 
<html>
	<head>
		<title>Booking Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" media="all" type="text/css" href="w3.css">
		<link rel="stylesheet" media="all" type="text/css" href="mystyle.css">
		<style>
		.error {color: #FF0000;}
		#first{
			padding: 50px;
		}
		</style>
	</head>
	<body style="color:white;">
	<div id="first">
	<?php
		$nameErr = $contactErr = $genderErr = $addressErr = $dateErr= $catagoryErr =  $roomErr = "";
		$name = $contact = $gender = $address = $date = $catagory =  $room = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed"; 
				}
			}
			
			if (empty($_POST["contact"])) {
				$contactErr = "Contact No. is required";
			  } else {
				$contact = test_input($_POST["contact"]);
			  }
    
			if (empty($_POST["address"])) {
				$address = "";
			} else {
				$address = test_input($_POST["address"]);
			}

			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			  } else {
				$gender = test_input($_POST["gender"]);
			  }
			
			if (empty($_POST["date"])) {
				$date = "";
			} else {
				$date = test_input($_POST["date"]);
			}
			if (empty($_POST["catagory"])) {
				$catagory = "";
			} else {
				$catagory = test_input($_POST["catagory"]);
			}
			if (empty($_POST["room"])) {
				$room = "";
			} else {
				$room = test_input($_POST["room"]);
			}
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>



		<h2>Booking In Hotel Cox's Inn</h2>
		<p><span class="error">* required field.</span></p>
		<form method="post" action="confirm.php">  
			Full Name:</br> <input type="text" name="name">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			Contact No:</br> <input type="number" name="contact">
			<span class="error">* <?php echo $contactErr;?></span>
			<br><br>
			Gender:</br> <input type="radio" name="gender" value="M" checked>    Male
			<input type="radio" name="gender" value="F">    Female
			<br><br>
			Address: </br><textarea name="address" rows="3" cols="40"></textarea>
			<br><br>
			Date to be booked: </br><input type="date" name="date">
			<br><br>
			Catagory:</br>
			<select name="catagory">
				<option value="Delux Twin">Delux Twin</option>
				<option value="Delux">Delux</option>
				<option value="Premium">Premium</option>
				<option value="Regular Twin">Regular Twin</option>
				<option value="Regular">Regular</option>
				<option value="Normal">Normal</option>
			</select>
			<br><br>
			No of Rooms:</br> <input type="number" name="room">
			<br><br>
			<input type="submit" name="submit" value="Submit">  
		</form>
		

	</div>
	</body>
</html>