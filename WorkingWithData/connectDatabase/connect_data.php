<?php 
	$connect = new mysqli('localhost', 'root', 'qlcs1');
	if($connect -> errno !== 0)
	{
		die("Error! Could not connect to database. An error ".$connect->error." occurred. ");
	}
	$connect->set_charset('utf-8');
?>