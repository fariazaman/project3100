<!DOCTYPE HTML> 
<html>
	<head>
		<title>Confirmation</title>
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
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "project3100";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "INSERT INTO coxinn (Date_to_be_booked, Full_Name, Contact_No, Gender, Address, Catagory, No_of_Rooms, Total_Room)
			VALUES ('$_POST[date]','$_POST[name]','$_POST[contact]','$_POST[gender]', '$_POST[address]','$_POST[catagory]','$_POST[room]','00');";
			if ($conn->query($sql) === TRUE) {
				echo "Your booking information is submitted<br> You will be contacted in short time!";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql ="update coxinn set Total_Room='10' where catagory='Delux Twin';";
			if ($conn->query($sql) === TRUE) {
	
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql ="update coxinn set Total_Room='15' where catagory='Delux';";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql ="update coxinn set Total_Room='20' where catagory='Premium'";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql ="update coxinn set Total_Room='13' where catagory='Regular Twin';";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql ="update coxinn set Total_Room='17' where catagory='Regular';";
			if ($conn->query($sql) === TRUE) {
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql ="update coxinn set Total_Room='20' where catagory='Normal';";
			
			if ($conn->query($sql) === TRUE) {
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		

			

			$conn->close();
		?>
		<p style="color:red"><a href="http://localhost/project 3100/homepage.php">Back to Homepage</a></p>
	</div>
</body>
</html>