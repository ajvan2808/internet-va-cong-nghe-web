<?php
	session_start();
	$_SESSION['username'] = 'guest';
	$_SESSION['password'] = '123pwd';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Truyen du lieu bang Session</title>
</head>
<body>
	<a href="get_cookie.php">Bấm vào link để lấy dữ liệu</a>
</body>
</html>