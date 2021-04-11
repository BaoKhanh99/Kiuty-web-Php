<?php
session_start();
	require 'connect.php';
	$tk = $_POST['tk'];
	$mk = $_POST['mk'];
	$sql ="SELECT * FROM users WHERE taikhoan = '$tk' AND matkhau = '$mk' ";
	$query = mysqli_query($con, $sql);
	$num = mysqli_num_rows($query);
	if ($num == 0) {
		$sql2 ="SELECT * FROM admin WHERE taikhoan = '$tk' AND matkhau = '$mk' ";
		$query2 = mysqli_query($con, $sql2);
		$num2 = mysqli_num_rows($query2);
		if ($num2 == 0) {
			echo "Mật Khẩu Hoặc Tài Khoản Không Đúng";
		}
		else{
		$row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
		$_SESSION['taikhoan'] = $tk;
		$_SESSION['hoten'] = $row2['hoten'];
		$_SESSION['idad'] = $row2['idad'];
		echo "Chào ".$row2['hoten']."";
		}
	}
	else{
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$_SESSION['taikhoan'] = $tk;
		$_SESSION['hoten'] = $row['hoten'];
		$_SESSION['idnd'] = $row['idnd'];
		echo "Đăng Nhập Thành Công";

	}

?>