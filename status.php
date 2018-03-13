<?php
$servername = "localhost";
$username = "dbUserName";
$password = "dbpass";
$dbname = "dbName";


$con = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT switch_one,switch_two,switch_three FROM switch ORDER BY id DESC LIMIT 1";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

echo $row['switch_one'];

mysqli_free_result($result);

mysqli_close($con);

?>
