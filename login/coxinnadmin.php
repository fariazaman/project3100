<?php
   include('session.php');
?>
<html>
	<head>
		<title>Hotel Cox's Inn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" media="all" type="text/css" href="w3.css">
		<link rel="stylesheet" media="all" type="text/css" href="mystyle.css">
	</head>
	<body style="color:white;">
	<div id="first" style="padding:30px;">
	<p><h3>Welcome to the page of Hotel Cox's Inn</h3></p>
	<h4 style="color:red;"><a href = "logout.php"><em>Sign Out</em></a></h4>
	
	<table>
	<th colspan="4">AVAILABLE ROOM INFORMATION</th>
		<tr>
			<td>Date</td>
			<td>Catagory</td>
			<td>Total Rooms</td>
			<td>Available Rooms</td>
		</tr>
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

			$sql = "SELECT Date_to_be_booked,Catagory,Total_room,Available from room_info";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["Date_to_be_booked"]. "</td><td>" . $row["Catagory"]."</td><td>" . $row["Total_room"]."</td><td>" . $row["Available"]."</td></tr><br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</table>
	<table>
	<th colspan="4">BOOKING INFORMATION</th>
		<tr>
			<td>Date_to_be_booked</td>
			<td>ID</td>
			<td>Catagory</td>
			<td>No_of_Rooms</td>
			
		</tr>
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

			$sql = "SELECT Date_to_be_booked,ID,Catagory,No_of_Rooms from booking_info";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["Date_to_be_booked"]. "</td><td>" . $row["ID"]."</td><td>" . $row["Catagory"]."</td><td>" . $row["No_of_Rooms"]."</td></tr><br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</table>
	<table>
	<th colspan="5">CUSTOMER'S INFORMATION</th>
		<tr>
			<td>ID</td>
			<td>Full Name</td>
			<td>Contact No</td>
			<td>Gender</td>
			<td>Address</td>
		</tr>
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

			$sql = "SELECT ID,Full_Name,Contact_no,Gender,Address from customers_info";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Full_Name"]."</td><td>" . $row["Contact_no"]."</td><td>" . $row["Gender"]."</td><td>" . $row["Address"]."</td></tr><br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		</table>
	</div>
	</body>
</html>