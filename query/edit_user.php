<?php  
session_start();
	require 'connect.php';
	$id = $_SESSION['idnd'];
	$ht = $_POST['hoten'];
	$ns = $_POST['ns'];
	$dc = $_POST['dc'];
	$sdt = $_POST['sdt'];
	$mk = $_POST['mk'];
		if ($_SERVER['REQUEST_METHOD'] != 'POST')
    		die('Invalid HTTP method!');
		$sql = "UPDATE users SET  matkhau = '$mk', hoten = '$ht',  diachi = '$dc', namsinh = '$ns', sdt = '$sdt' WHERE idnd = '$id'";
		$ht = $_SESSION['hoten'];
		if(mysqli_query($con,$sql)){
 header('Location:../profile.php');
 }else{
 echo"Error".mysqli_error($con);
 }
 ?>