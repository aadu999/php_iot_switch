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
?><html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var count=0;
		$('.change').click(function()
		{
			count++;
			if(count%2==1)
			{
				$.get("http://DOMAIN/switch.php?s1=1", function(){
				});
				$("span").text('on');
			}else{
				$.get("http://DOMAIN/switch.php?s1=0", function(){
		});
				$("span").text('off');
			}
			
			});
	});

	</script>

</head>
<body>
	<button class="change"><span>change</span></button>
</body>
</html>
