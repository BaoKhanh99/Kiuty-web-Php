<?php 
require 'query/connect.php';
session_start();
$idnd = $_SESSION['idnd'];
$output ='';
$sql = "SELECT * FROM users WHERE idnd = '$idnd'";
$rs = mysqli_query($con, $sql);
if (!$rs) {
	die('Query error: ['. $con ->error .']');
			# code...
}
$row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
if (!$row) {
	die('Không có tài khoản');
}
else{
			//echo $row['Hoten'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh Sửa Thông Tin</title>
  	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/css.css">
	<style>
	.left-choose{
		margin-left: 6%;
	}
	.left a{
		text-decoration: none;
	}
	.left-back{
		width: 50%;
		border-width: 30%;
		border-bottom: 1px solid #cccccc;
	}
	.header{
		background-color: #689ad3;
	}
	.capnhat{
 background-color: #0d56a6; /* Green */
  border: 1px solid #689ad3;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width: 15%;
  display: block;
	}
	.dx{
		width: 50%;
		border-width: 30%;
		border-top: 1px solid #cccccc;
	}
	</style>
</head>
<body>
<div class="header">
	<div class="logo d-flex justify-content-center">
		<a  href="index.php" ><img class="rounded mx-auto d-block" src="images/logo1.png" width="19%" alt=""></a>
	</div>
</div>
<div class="main row mt-4">
	<div class="left col-4">
		<div class="left-choose">
			<div class="mb-5 left-back">
				<a href="index.php"  class="text-dark">Quay lại trang chủ</a>
			</div>
			<div class="mb-3">
				<a href="notification.php" class="text-dark">Thông Báo</a>
			</div>
			<div class="mb-3">
				<a href="profile.php" class="text-dark">Thông tin của bạn</a>
			</div>
			<div class="mb-3">
				<a href="editprofile.php" class="text-dark">Chỉnh sửa thông tin</a>
			</div>
			<div>
				<a href="query/logout.php" class="text-dark">Đăng xuất</a>
			</div>
		</div>
	</div>
	<div class="right col-8">
		<form action="query/edit_user.php" method="POST">
			<h2 class="mb-4">CHỈNH SỬA THÔNG TIN</h2>
			<p>	Họ Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="hoten" value="<?php echo $row['hoten'] ?>"></p>
			<p>Năm sinh:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ns" value="<?php echo $row['namsinh'] ?>"></p>
			<p>Địa Chỉ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dc" value="<?php echo $row['diachi'] ?>"></p>
			<p>Số Điện Thoại:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sdt" value="<?php echo $row['sdt'] ?>"></p>
			Mật Khẩu:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="mk" value="<?php echo $row['matkhau'] ?>">
			<div style="text-align: center;" class="mt-4">
			<input type="submit" name="capnhat" class="capnhat" value="Cập Nhật">
		</div>
		</form>
	</div>
</div>
</body>
</html>