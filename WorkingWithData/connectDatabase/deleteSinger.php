<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xoa Ca si</title>
</head>
<body>
	<form action="#" method="get">
		<div>
			<label for="macs">Singer code to delete</label>
			<input type="text" name="macs">
		</div>
		<p>
			<input type="submit" value="Submit" name="sub">
		</p>
	</form>
	<?php
		if(isset($_GET['sub'])){
			$macasi = $_GET['macs'];
			include "connectData.php";
			// query string 
			$str = "delete from casi where MaCaSi = '$macasi'";

			// Check >0 cause returns the number of rows that were modified or deleted by the SQL statement you issued
			// mysql_query will return TRUE even if the query did not actually remove anything. Should use mysql_affected_rows to check for that.
			if($connect->query($str) > 0)
				echo 'Deleted.';
			else
				echo 'Delete failed!';

			// Đóng kết nối CSDL
			$connect->close();
		}
	?>
</body>
</html>