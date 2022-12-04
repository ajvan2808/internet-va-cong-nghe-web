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
		include "connectData.php";
		$sql = "SELECT * FROM casi";
		$results = $connect->query($sql);
		// The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array (mảng kết hợp). 
		// Fieldnames returned from this function are case-sensitive.
		while($rows = $results->fetch_assoc())
		{
			echo $rows['MaCaSi']."-".$rows['TenCaSi']."<br />";
		}
		echo "Số dòng truy xuất được". $results->num_rows;
		// Đóng kết nối CSDL
		$connect->close();
	?>
</body>
</html>