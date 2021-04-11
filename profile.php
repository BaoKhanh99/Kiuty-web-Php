<?php 
require 'query/connect.php';
session_start();
$idnd = $_SESSION['idnd'];
if ($idnd =="") {
	header('Location: admin/ad_profile.php');
}
$output='';
$query = "SELECT * FROM users WHERE idnd = '$idnd'";
		$sql = mysqli_query($con,$query);
		$num = mysqli_num_rows($sql);
		//$output .="aa";
		if ($num > 0) 
		{
		//	$output .="Aaa" ;
			while ($row = mysqli_fetch_assoc($sql)) {
				$output .= '
					<h2>THÔNG TIN CỦA BẠN</h2>
					<p>	Họ Tên: '.$row['hoten'].'</p>
					<p>Năm sinh: '.$row['namsinh'].' </p>
					<p>Địa Chỉ: ' .$row['diachi'].' </p>
					<p>Số Điện Thoại: ' .$row['sdt'].' </p>
					';
	// 					$output = '<p>'.$row2['kieudichvu'].'</p>
	// 	<a href="#">link dv</a>
	// ';
	// }
	// $output .='</div>';
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Cá Nhân</title>
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
		<?php echo $output; ?>
		<!-- <h2>THÔNG TIN CỦA BẠN</h2>
		<p>	Họ Tên: </p>
		<p>Năm sinh: </p>
		<p>Địa Chỉ: </p>
		<p>Số Điện Thoại: </p>
		<p>Số CMND:</p>  -->
	</div>
</div>
</body>
</html>