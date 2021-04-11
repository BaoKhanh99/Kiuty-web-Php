<?php
session_start();
$idnd = $_SESSION['idnd'];
	$nd = $_POST['nd'];
	$tt = $_POST['tt'];
		require 'connect.php';
		$sql ="INSERT INTO phanhoi(idnd,noidungph,tieudeph) VALUES ('$idnd', '$nd', '$tt')";
		if (mysqli_query($con,$sql)) {
			echo "Phản hồi thành công";
		}
		else{
			echo"Error".mysqli_error($con);
		}
?>