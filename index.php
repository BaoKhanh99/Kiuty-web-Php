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
$ouput ='';
$query = "SELECT * FROM tour ORDER BY RAND() LIMIT 4 ";
$sql = mysqli_query($con,$query);
$num = mysqli_num_rows($sql);
while ($row = mysqli_fetch_assoc($sql)) {
	$ha = explode(",", $row['img']);
      				$stt = 0;
	$ouput .='
			<div><a href="location.php?id='.$row['iddiadiem'].'"><img src="images/'.$ha[$stt].'"></a></div>
			
			';
}
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist\js\javascript.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
	.hide{
		display: none;
	}
	.search-form{
	text-align: center;
}
.a{
	padding-right: 4%;
}
.footer{
	width: 100%;
	background-color: #04356c;
	color: white;
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
	border-color: dodgerblue;
	box-shadow: 0 0 8px 0 dodgerblue;
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
.web-information{
	margin-top: 10%;
}
.thumb {
	
    width: 200px;
    height: 150px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
} 
.result{
    width: 100%;
    height: auto;
    padding: 5px;
    background-color: #e6e6e6;
}
.result-images {
    width: 200px;
    height: 220px;
    display: inline-block;
    padding: 5px;
    margin-left: 10px;
    vertical-align:top;
}
    * {
      box-sizing: border-box;
    }
    .slider {
        width: 50%;
        margin-top: 1%;
        margin-right: 3%;
        margin-left: 10%;
    }
    .slick-slide {
      margin: 0px 20px;
    }
    .slick-slide img {
      width: 100%;
    }
    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    .slick-active {
      opacity: .5;
    }
    .slick-current {
      opacity: 1;
    }
.web-information{
	margin-top: 7%;
}
.btn-mainblue{
		 background-color: #0d56a6; /* Green */
	color: white;
}
  </style>
	<title>Trang chủ</title>
</head>
<body>
	<div class="header">
		<div class="row mt-2 mb-5">
			<div class="logo col-8">
			</div>
			<div class="signin-register col-4 text-center">
				<a class="a text-dark <?php echo $hide; ?>" style="text-decoration-line: none;" href="#" data-toggle="modal" data-target="#dk">Đăng Ký</a>
				<a class="a text-dark <?php echo $hide; ?>" style="text-decoration-line: none;" href="#" data-toggle="modal" data-target="#dn">Đăng nhập</a>
				<a class="a text-dark dropdown-toggle <?php echo $hide2; ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $ht; ?>
				</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="http://localhost:8080/dacs/profile.php">Tài Khoản Của Tôi</a>
					<a class="dropdown-item" href="http://localhost:8080/dacs/notification.php">Thông Báo</a>
					<a class="dropdown-item" href="query/logout.php">Đăng xuất</a>
				</div>
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
	<div class="search-main">
		<div class="logo col-8 mx-auto" >
			<a  href="index.php" ><img class="rounded mx-auto d-block" src="images/logo1.png" width="45%" alt=""></a>
			<div class="col-6 mx-auto">
				<h3><p class="text-center">Tìm kiếm các địa điểm phù hợp nhất với ý muốn của bạn</p></h3>
			</div>
		</div>
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
				<div class="mx-auto mt-2 search-button">
					<input class="search-button" name="search-button" type="submit" value="Tìm Kiếm">
				</div>
			</form>
		</div>
	</div>
	<div class="popular container mt-5 ">
		<h2>Các địa điểm phổ biến</h2>
		<div class="center slider">
			
			<?php echo $ouput; ?>
		</div>
	</div>
	<div class="web-information">
		<div class="container">
			<div class="row">
				<div class="infor1 col-6 ">
					<h3>KiuTy - công cụ tìm kiếm địa điểm du lịch ở Việt Nam</h3>
					KiuTy hỗ trợ người dùng tìm kiếm những địa điểm du lịch tuỳ theo sở thích của  du khách. Với hơn 1,4 tỉ lượt truy cập website của chúng tôi hàng năm, du khách thường xuyên sử dụng công cụ tìm kiếm để tìm kiếm nơi để thư giãn hay vui chơi ở một thành phố nào đó. Giúp huẩn bị ngay cho kỳ nghỉ cuối tuần của bạn tại các thành phố như Hà Nội hay Nha Trang và bạn có thể dễ dàng tìm thấy địa điểm du lịch du khách mong muốn tại KiuTy. 
				</div>
				<div class="infor2 col-6 ">
					<h3>Tìm địa điểm du lịch hợp lý với KiuTy</h3>
					Với KiuTy bạn có thể dễ dàng tìm kiếm địa điểm vui chơi hay nghỉ ngơi theo sở thích. Nhập địa điểm bạn muốn đến và và mục đích bạn muốn đến đó và hãy để công cụ tìm kiếm của chúng tôi tìm kiếm địa điểm phù hợp cho bạn. Để điều chỉnh các kết quả tìm kiếm, bạn có thể lọc theo danh mục như dạo phố, đi ăn, đi biển  và các tiêu chuẩn khác. KiuTy giúp các bạn tìm kiếm được những điểm du lịch tầm cỡ quốc gia và thế giới đến những điểm nhỏ để phù hợp mục đích và túi tiền của bạn. 
				</div>
			</div>
			<div class="row mt-5">
				<div class="infor1 col-6 ">
					<h3>Dịch vụ tận nơi  giúp bạn thoải mái trải nghiệm</h3>
					Ngoài tìm kiếm địa điểm vui chơi du lịch thì KiuTy sẵn sàng phục vụ các bạn bởi dịch vụ cho thuê giá rẻ để phù hợp với điều kiện của các bạn. Các bạn từ phương xa đến muốn cùng bạn bè hay người thân đi chơi nhưng không muốn bị làm phiền thì có thể sử dụng dịch vụ thuê xe, có đầy đủ xe cho các bạn chọn từ 2 chỗ ,4 chỗ hay đến tận 16 chỗ luôn chờ sẵn sàng phục vụ các bạn. Các du khách từ người ngoài hay các bạn muốn tìm hiểu các địa danh hay địa điểm nào đó có thể sử dụng dịch vụ thuê hướng dẫn viên du lịch. Các bạn muốn đi biển hay đi cắm trại.. mà không mang theo đầy đủ dụng cụ có thể sử dụng dịch vụ cho thuê dụng cụ như máy ảnh, đồ lều trại… Để từ đó có được trải nghiệm tốt nhất đối với chuyến đi đó.
				</div>
				<div class="infor2 col-6 ">
					<h3>Cách tìm kiếm</h3>
					KiuTy là một công cụ tìm kiếm địa điểm du lịch tối ưu. Các bạn có thể tìm kiếm địa điểm theo sở thích của mình như đi dạo chơi, đi chụp hình hay đi ăn…Mọi địa điểm chúng tôi đưa ra đều phù hợp với các điều kiện của các bạn. Các bạn chọn phần danh mục rồi từ đó chọn các tiêu chí đáp ứng nhu cầu rồi từ đó chọn được địa điểm mong muốn. Hãy để KiuTy giúp bạn tìm địa điểm lý tưởng!
				</div>
			</div>
		</div>
	</div>
	<div class="footer mt-5">
		<div class="col-10 text-center ml-auto mr-auto ">
			<p>Địa chỉ: 123 Nam Kỳ Khởi nghĩa, phường Hòa Qúy, quận Ngũ Hành Sơn, TP.Đà Nẵng</p>
			<p>Tổng đài hỗ trợ: 19000099</p>
			<p>Email: kshshop@gmail.com</p>
			<p>© 2019 - Bản quyền thuộc về KiuTy</p>
		</div>
	</div>
	<div class="modal fade" id="dk" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">ĐĂNG KÝ</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form id="dk_form" method="POST">
						<input type="text" class="form-control " placeholder="Họ Tên" id="ht">
						<input type="text" class="form-control mt-3" placeholder="Năm Sinh" id="ns">
						<input type="text" class="form-control mt-3" placeholder="Địa Chỉ" id="dc">
						<input type="text" class="form-control mt-3" placeholder="Số Điện Thoại" id="sdt">
						<input type="text" class="form-control mt-3" placeholder="Tên Đăng Nhập" id="tk">
						<input type="password" class="form-control mt-3" placeholder="Mật Khẩu" id="mk">
						<input type="password" class="form-control mt-3" placeholder="Nhập Lại Mật Khẩu" id="mk2">
						<div class="modal-footer">
							<input type="submit" class="btn btn-default" name="tl" value="Trở Lại">
							<input type="submit" class="btn btn-mainblue" id="dk_btn" name="dk_btn" value="Đăng Ký">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade" id="dn" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">ĐĂNG NHẬP</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<input type="text" class="form-control " id="tkdn" placeholder="Tài Khoản" name="taikhoan" required>
						<input type="password" class="form-control mt-3" id="mkdn" placeholder="Mật Khẩu" name="matkhau" required>
						<div class="modal-footer">
							<div class="modal-footer">
								<input type="submit" class="btn btn-default" name="" value="Trở Lại">
								<input type="submit" class="btn btn-mainblue" id="dn_btn" name="dn_btn" value="Đăng Nhập">
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).on('ready', function() {
		$(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
	});
	$(document).ready(function(){
		$("#dk_btn").click(function(e){
			e.preventDefault();
			var ht = $("#ht").val();
			var ns = $("#ns").val();
			var dc = $("#dc").val();
			var sdt = $("#sdt").val();
			var tk = $("#tk").val();
			var mk = $("#mk").val();
			var mk2 = $("#mk2").val();
			if (ht == "") {
				alert("Bạn chưa nhập tên");
			}
			else if (ns == "") {
				alert("Bạn chưa nhập năm sinh");
			}
			else if (dc == "") {
				alert("Bạn chưa nhập địa chỉ");
			}
			else if (sdt == "") {
				alert("Bạn chưa nhập số điện thoại");
			}
			else if (tk == "") {
				alert("Bạn chưa nhập tài khoản");
			}
			else if (mk == "") {
				alert("Bạn chưa nhập mật khẩu");
			}
			else if (mk2 != mk) {
				alert("Mật khẩu không giống nhau");
			}
			else{
				$.ajax({
					url : 'query/register.php',
					type : 'POST',
					data : {
						ht : ht,
						ns : ns,
						dc : dc,
						sdt : sdt,
						tk : tk,
						mk : mk,
					},
					success : function (result){	
						alert(result);
						location.reload();
					},
				});
				
			}
		});
	});
	$(document).ready(function(){
		$("#dn_btn").click(function(e){
			e.preventDefault();
			var tk = $("#tkdn").val();
			var mk = $("#mkdn").val();
			if (tk == "") {
				alert("Bạn chưa nhập tài khoản");
			}
			else if (mk == "") {
				alert("Bạn chưa nhập mật khẩu");
			}
			else{
				$.ajax({
					url : 'query/login.php',
					type : 'POST',
					data : {
						tk : tk,
						mk : mk,
					},
					success : function (result){	
						alert(result);
						if (result == "Chào Admin") {
							window.location.href = "admin/ad_profile.php";
						}
						else{
							location.reload();	
						}
						
					},
				});
				
			}
		});
	});
	
</script>

</html>