<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get data from ListBox</title>
</head>
<body>
	<form action="listbox.php" method="post">
		<select name="noicongtac[]" multiple>
			<option value="TPHCM"> Ho Chi Minh </option>
			<option value="HaNoi"> Ha Noi </option>
			<option> Da Nang </option>
		</select>

		<input type="submit" value="Yes" name="submit"/>
	</form>

	<?php
		if(isset($_POST['submit']) && ($_POST['submit'] == "Yes")) {
			echo "You selected: <br>";
			foreach($_POST['noicongtac'] as $nct)
				echo $nct."<br>";
		}
	?>
	
</body>
</html>