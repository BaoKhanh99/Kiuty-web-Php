<?php 
require '../query/connect.php';
session_start();
$idad = $_SESSION['idad'];
$output ='';
$sql = "SELECT * FROM admin WHERE idad = '$idad'";
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
  	<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/css.css">
	<style>
	.right{
		text-align: center;
	}

	.left-choose{
		margin-left: 6%;
	}
	.left a{
		text-decoration: none;
	}
	.left-back{
		width: 100%;
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
  display: block;
	}
	.dx{
		width: 100%;
		border-width: 30%;
		border-top: 1px solid #cccccc;
	}
	.aa{
		text-align: center;
		width: 100%;
		padding-right: 50%;
		padding-left: 50%;
	}
	</style>
</head>
<body>
<div class="header">
	<div class="logo d-flex justify-content-center">
		<a  href="../index.php" ><img class="rounded mx-auto d-block" src="../images/logo1.png" width="19%"></a>
	</div>
</div>
<div class="main row mt-4">
	<div class="left col-2">
		<div class="left-choose">
			<div class="mb-5 left-back">
				<a href="../index.php"  class="text-dark">Quay lại trang chủ</a>
			</div>
			
			<div class="mb-3">
				<a href="ad_profile.php" class="text-dark">Thông tin của bạn</a>
			</div>
			<div class="mb-3">
				<a href="ad_editadmin.php" class="text-dark">Chỉnh sửa thông tin</a>
			</div>
			<div class="mb-3">
				<a href="ad_notification.php" class="text-dark">Tạo Thông Báo</a>
			</div>
			<div class="mb-3">
				<a href="ad_feedback.php" class="text-dark">Xem Phản Hồi</a>
			</div>
			<div class="mb-3">
				<a href="ad_userslist.php" class="text-dark">Danh Sách Người Dùng</a>
			</div>
			<div class="mb-3">
				<a href="ad_adminlist.php" class="text-dark">Danh Sách Admin</a>
			</div>
			<div class="mb-3">
				<a href="ad_locationlist.php" class="text-dark">Danh Sách Địa Điểm</a>
			</div>
			<div class="mb-5 dx">
				<a href="../query/logout.php" class="text-dark">Đăng xuất</a>
			</div>
		</div>
	</div>
	<div class="right col">
		<form action="query/edit_user.php" method="POST">
			<h2 class="mb-4" align="center">CHỈNH SỬA THÔNG TIN</h2>
			<p>Họ Tên:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="hoten" value="<?php echo $row['hoten'] ?>"></p>
			Mật Khẩu:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="mk" value="<?php echo $row['matkhau'] ?>">
			<div  class="buttoncapnhat mt-4">
				<div class="aa">
				<input type="submit" name="capnhat" class="capnhat" value="Cập Nhật">
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>