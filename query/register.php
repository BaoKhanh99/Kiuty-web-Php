<?php
	$ht = $_POST['ht'];
	$ns = $_POST['ns'];
	$dc = $_POST['dc'];
	$tk = $_POST['tk'];
	$mk = $_POST['mk'];
	$sdt = $_POST['sdt'];	
		require 'connect.php';
		$sql ="INSERT INTO users(taikhoan,matkhau,hoten,diachi,namsinh,sdt) VALUES ('$tk', '$mk', '$ht', '$dc', '$ns','$sdt')";
		if (mysqli_query($con,$sql)) {
			echo "Đăng Ký Thành công";
		}
		else{
			echo"Error".mysqli_error($con);
		}
?>