<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liet ke Ca si</title>
</head>
<body>
	<?php
		include "connect_data.php";
		$sql = "SELECT * FROM casi";
		$results = $connect->query($sql);
		while($rows = $results->fetch_row())
		{
			echo $rows['MaCaSi']."-".$rows[1]."<br />";
		}
		echo "Số dòng truy xuất được". $results->num_rows;
		// Đóng kết nối CSDL
		$connect->close();
	?>
</body>
</html>