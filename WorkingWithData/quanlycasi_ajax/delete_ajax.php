<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liet ke bai hat - Delete elements</title>
</head>
<body>
	<?php
		include "connect.php";
		$sql = "SELECT * FROM baihat";
		$result = $connect->query($sql);
		echo "<table border>"
	?>
</body>
</html>