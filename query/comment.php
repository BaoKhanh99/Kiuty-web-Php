<?php
require 'connect.php';
session_start();
$idnd = $_SESSION['idnd'];
$cmt = $_GET['cmt'];
$iddc = $_SESSION['iddc'];
$sql ="INSERT INTO nhanxet(id_dc,idnd,noidung) VALUES ('$iddc', '$idnd', '$cmt')";
	if (mysqli_query($con,$sql)) {
		echo $idnd;
	}
	else{
		echo"Error".mysqli_error($con);
	}
?>