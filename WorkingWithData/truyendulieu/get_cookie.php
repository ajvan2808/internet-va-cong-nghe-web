<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trả dữ liệu từ Session</title>
</head>
<body>
	<a href="set_cookie.php">Back to previous page</a>
	username = <?php echo $_SESSION['username']; ?> <br>
	password = <?php echo $_SESSION['password']; ?>
</body>
</html>