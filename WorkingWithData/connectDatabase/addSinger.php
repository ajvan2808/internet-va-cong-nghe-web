<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them Ca si</title>
</head>
<body>
	<?php
		include "connectData.php";
		// query string 
		$str = "insert into casi values('8', 'Nguyễn Sơn Tùng', '1995-1-20')";

		if($connect->query($str) == true)
			echo 'Insert Done.';
		else
			echo 'Insert failed!';

		// Đóng kết nối CSDL
		$connect->close();
	?>
</body>
</html>