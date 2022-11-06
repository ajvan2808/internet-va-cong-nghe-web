<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listing Singer with AJAX</title>

	
</head>
<body>
	<?php
		include "connect.php"
		$sql = "SELECT * FROM casi";
		$result = $connect->query($sql);
		echo "<select class = 'tencasi'>";
			while ($row = $result->fetch_row) {
				echo "<option value= '$row[0]'> $row[1] </option>";
			}
		echo "</select>";
		$connect->close();
	?>

	<div>Danh sach album</div>
</body>
</html>