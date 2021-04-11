<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kiuty";
	$con = mysqli_connect($severname, $username, $password, $dbname);
	mysqli_set_charset($con, 'UTF8');
	if (!$con) {
		die('Kết nối thất bại'.mysqli_connect_error());
	}
	else{
		//echo "successful";
	}
?>