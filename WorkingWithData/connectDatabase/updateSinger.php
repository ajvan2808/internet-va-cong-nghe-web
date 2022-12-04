<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Ca si</title>
</head>
<body>
	<?php
		include "connectData.php";
		// query string 
		$str = 'update casi set TenCaSi="Myra Trần", NgaySinh="1998=09-10" where MaCaSi="CS07";';

		if($connect->query($str) > 0)
			echo 'Update Done.';
		else
			echo 'Update failed!';

		// Đóng kết nối CSDL
		$connect->close();
	?>
</body>
</html>