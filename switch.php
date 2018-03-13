<?php
$servername = "localhost";
$username = "dbUserName";
$password = "dbPass";
$dbname = "dbName";

if(isset($_GET['s1']))
{

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO switch (id, switch_one, entry) VALUES (NULL, '".$_GET['s1']."','".$date."')";

if ($conn->query($sql) === TRUE) {
	echo "Switch status changed!";
} else {
	echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
