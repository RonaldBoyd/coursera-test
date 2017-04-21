<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Test PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/jquery-1.12.4.js"></script>

</head>
<body>
 <h1 id="title" onclick="getEmail();">Ron Boyd's Page</h1>


<?php
$servername = "localhost";
$username = "ronboyd";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Phone,Firstname, Lastname FROM TestTable WHERE NumberKey=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Phone: " . $row["Phone"]. " - Name: " . $row["Firstname"]. " " . $row["Lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	
</body>
</html>