<?php
	$foo = 'private info to get by cookie';
	setcookie('info', $foo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Truyen du lieu bang Cookie</title>
</head>
<body>
	<p>Giá trị chứa trong cookie là: </p>
	<?php echo $foo ?>
	<a href="get_cookie.php">Bấm vào link để lấy dữ liệu</a>
</body>
</html>