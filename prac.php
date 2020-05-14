<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" media="all" type="text/css" href="w3.css">
		<link rel="stylesheet" media="all" type="text/css" href="mystyle.css">
		<style>
			table,td,th{
			border: 2px solid black;
			padding: 5px;
}
		</style>
</head>
<body>
<table>
<tr>
	<td>Username</td>
	<td>Password</td>
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

$sql = "SELECT username,password FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["password"]."</td></tr><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>