<?php
	include "connect.php";
	$ma_casi =$_POST['mcs'];
	$sql = 'SELECT * FROM album WHERE MaCaSi="$ma_casi"';
	while($row)
?>