<?php 
require 'query/connect.php';
session_start();
error_reporting(0);
$tk = $_SESSION['taikhoan'];
$ht = $_SESSION['hoten'];
$hide = "";
$hide2 = "hide";
if ($tk!="") {
	$hide2 = "";
	$hide = "hide";
}
?>
<?php
	$tinh = $_POST['tinh'];
	$dm = $_POST['dm'];
	$songuoi = $_POST['songuoi'];
	$output = '';
	require 'query/connect.php';
	$error = "";
	if (isset($_REQUEST['search-button'])) {		
			$query = "SELECT * FROM timkiem WHERE songuoi = '$songuoi' AND tendanhmuc LIKE '%$dm%' AND noidi = '$tinh' ";
			$sql = mysqli_query($con,$query);
			$num = mysqli_num_rows($sql);
			//$output .="aa";
			if ($num > 0) 
			{
			//	$output .="Aaa" ;
				while ($row = mysqli_fetch_assoc($sql)) {
					$query2 = "SELECT * FROM tour WHERE iddiadiem = ".$row['iddiadiem']."";
			$sql2 = mysqli_query($con,$query2);
			$num2 = mysqli_num_rows($sql2);
			while ($row2 = mysqli_fetch_assoc($sql2)) {
					$ha = explode(",", $row2['img']);
      				$stt = 0;
					$output .= '<div class="result col-8 mx-auto row justify-content-end mt-3 ">
		<div class="result-images col mt-4">
			<img class="img-thumbnail thumb" src="images/'.$ha[$stt].'" alt="">
		</div>
		<div class="result-infor col-7 mt-4 ">
			<div class="result-name">
				<h4>'.$row2['tendiadiem'].'</h4>
			</div>
			<div class="result-local mt-3">
				'.$row2['noidi'].'
			</div>
			<div class="result-comment mt-3">
			</div>
		</div>
		<div class="result-detail col ">
			<div class=" bg-primary result-button">
				<a style = "text-decoration-line: none;" name= "result-button" href="location.php?id='.$row2['iddiadiem'].'"><button name= "result-button">Xem Thêm</button></a>
			</div>
		</div>
	</div>	';
}
				}
			}
			else{
				$output .='<div class="align">Không Tìm Thấy Nội Dung Cho Bạn</div>
';
			}

		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tìm Kiếm</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
</head>
<style type="text/css">
.align{
	text-align: center;

}
.hide{
	display: none;
}
.a{
	padding-right: 4%;
}
.footer{
	width: 100%;
	background-color: #04356c;
	color: white;
}
	.thumb {
    width: 100%;
    height: auto;
    background-color: #;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
} 
.result-images {
    width: 15%;
    height: auto;
    display: inline-block;

}
.result{
	border: 1px solid lightgray;
	border-style: dashed;
}
.result-detail{
	display: inline-block;
}
.result-detail{
	text-align: center;
}
.result-button{
	display: inline-block;
	justify-content: center;
	margin-top: 50%;
}
.result-button button{
	background-color: #0d56a6;
  border: 1px solid #689ad3;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
}
.result-button button:hover{
	background-color: #274f7d;
}
.search{
	background-color: #689ad3;
	padding-bottom: 2%;
	padding-top: 1%;
}
.search-input{
	width: 30%;
	border: 2px solid #aaa;
	border-radius: 4px;
	margin: 8px 0;
	outline: none;
	padding: 1%;
	box-sizing: border-box;
	transition: 3s;
}
.search-input:focus{
	border-color: #689ad3;
	box-shadow: 0 0 8px 0 #689ad3;
}
.search-button{
	display: flex;
	justify-content: center;

}
.search-button input[type = submit]{
	 background-color: #0d56a6; /* Green */
  border: 1px solid #689ad3;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
}
.search-button input[type = submit]:hover{
	background-color: #274f7d;
}
</style>
<body>

<div class="header">
	<div class="row justify-content-end">	
		<div class="logo col-4">
			<a  href="index.php" ><img class="rounded mx-auto d-block" src="images/logo1.png" width="40%" alt=""></a>
		</div>
		<div class="signin-register col-4  text-center">
			<a class="a text-dark <?php echo $hide; ?>" style="text-decoration-line: none;" href="#" data-toggle="modal" data-target="#dk">Đăng Ký</a>
				<a class="a text-dark <?php echo $hide; ?>" style="text-decoration-line: none;" href="#" data-toggle="modal" data-target="#dn">Đăng nhập</a>
				<a class="a text-dark dropdown-toggle <?php echo $hide2; ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $ht; ?>
					</a>
				<a class="a text-dark" style="text-decoration-line: none;"  href="#" id="feedback">Phản hồi</a>
			</div>
			<script type="text/javascript">
			$(document).ready(function(){
		$("#feedback").click(function(event){
			event.preventDefault();
			var gh = "<?php echo $tk; ?>";
			if (gh =="") {
				alert("mời bạn đăng nhập trước");
			}
			else{
				location.href = 'feedback.php';

			}
		});
	});
	
</script>
		</div>
	</div>
	
</div>
<div class="search mt-3">
	<div class=" col-8 mx-auto search-form">
			<form action="search.php" method="POST">
				<input class="search-input" list="tinh" name="tinh" placeholder="Chọn thành phố">
				<datalist id="tinh">
					<option value="Hà Nội"></option>
					<option value="Đà Nẵng"></option>
					<option value="Hồ Chí Minh"></option>
				</datalist>
				<input class="search-input" list="dm" name="dm" placeholder="Danh mục">
				<datalist id="dm">
					<option value="Dạo Phố"></option>
					<option value="Đi Biển"></option>
					<option value="Ăn Uống"></option>
					<option value="Chụp Hình"></option>
				</datalist>
				<input class="search-input" type="text" name="songuoi" placeholder="Số Người">
				<div class="mx-auto search-button">
					<input class="search-button" type="submit" name="search-button" value="Tìm Kiếm">
				</div>
			</form>
		</div>
</div>
<div class="search-result mt-5">
	<?php echo $output; ?>
</div>
<div class="footer mt-5">
	<div class="col-10 text-center ml-auto mr-auto ">
		<p>Địa chỉ: 123 Nam Kỳ Khởi nghĩa, phường Hòa Qúy, quận Ngũ Hành Sơn, TP.Đà Nẵng</p>
		<p>Tổng đài hỗ trợ: 19000099</p>
		<p>Email: kshshop@gmail.com</p>
		<p>© 2019 - Bản quyền thuộc về KiuTy</p>
	</div>
</div>
</body>
</html>