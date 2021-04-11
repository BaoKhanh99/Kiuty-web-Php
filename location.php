<?php  
	require 'query/connect.php';
	$id = $_GET['id'];
	session_start();
	error_reporting(0);


	$tk = '';
	$_SESSION['iddc'] = $id;
	$idnd = $_SESSION['idnd'];
	$output = '';
	$error = "";
		$query = "SELECT * FROM tour WHERE iddiadiem = '$id'";
		$sql = mysqli_query($con,$query);
		$num = mysqli_num_rows($sql);
		//$output .="aa";
		if ($num > 0) 
		{
		//	$output .="Aaa" ;
			while ($row = mysqli_fetch_assoc($sql)) {
				$ha = explode(",", $row['img']);
      			$stt = 0;
				$output .= '
					<div class="location-name">
						<h2 class="mb-3" align ="center">'.$row['tendiadiem'].'</h2>
					</div>
					<div class="information">
						'.$row['thongtindiadiem'].'
					</div>
					<div class="album mt-4">';
						for($stt=0; $stt<3; $stt++){
							$output .='
								<img src="images/'.$ha[$stt].'" alt="">';
						}
					$output .='
					</div>
					';
	// 					$output = '<p>'.$row2['kieudichvu'].'</p>
	// 	<a href="#">link dv</a>
	// ';
	// }
	// $output .='</div>';
			}
		}
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
$ouput2 ='';
$query2 = "SELECT * FROM tour ORDER BY RAND() LIMIT 4 ";
$sql2 = mysqli_query($con,$query2);
$num2 = mysqli_num_rows($sql2);
while ($row2 = mysqli_fetch_assoc($sql2)) {
	$ha2 = explode(",", $row2['img']);
      				$stt = 0;
	$ouput2 .='
			<div><a href="location.php?id='.$row2['iddiadiem'].'"><img src="images/'.$ha2[$stt].'"></a></div>
			
			';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Địa điểm</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/css.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist\js\javascript.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		.information{
			text-indent: 5%;
			line-height: 190%;
		}
		.footer{
	width: 100%;
	background-color: #04356c;
	color: white;
}
		.service{
			text-align: center;
		}
		textarea{
			
		}
		.comment{
			text-align: center;
		}
		.comment-button{
			text-align: center;
			background-color: #0d56a6; /* Green */
		    border: 1px solid #689ad3;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    cursor: pointer;
		    width: 100%;
		    margin-top: 20%;
		}
		.comment-button:hover{
			background-color: #274f7d;
}
		.comment-textfield{
			padding-left: 2%;
			padding-top: 1%;
			width: 100%;
			resize: none;
			height: 100px;
			border: 2px solid #aaa;
			border-radius: 4px;
			outline: none;
			box-sizing: border-box;
			transition: 3s;
		}
		.comment-textfield:focus{
			border-color: dodgerblue;
	box-shadow: 0 0 8px 0 dodgerblue;
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
    .hide{
    	display: none;
    }
    .header{
    		background-color: #689ad3;

    }
	</style>
</head>
<body>
<div class="header mt-2">
	<div class="row justify-content-end">	
		<div class="logo col-4 ">
			<a  href="index.php" ><img class="rounded mx-auto d-block" src="images/logo1.png" width="40%" alt=""></a>
		</div>
		<div class="signin-register col-4 text-center">
			<a class="a text-white <?php echo $hide; ?>" style="text-decoration-line: none;" href="#" data-toggle="modal" data-target="#dk">Đăng Ký</a>
				<a class="a text-white <?php echo $hide; ?>" style="text-decoration-line: none;" href="#" data-toggle="modal" data-target="#dn">Đăng nhập</a>
				<a class="a text-white dropdown-toggle <?php echo $hide2; ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $ht; ?>
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="profile.php">Tài Khoản Của Tôi</a>
						<a class="dropdown-item" href="query/logout.php">Đăng xuất</a>
					</div>
				<a class="a text-white" style="text-decoration-line: none;"  href="#" id="feedback">Phản hồi</a>
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
<div class="location mt-3 container">
	<?php echo $output; ?>
	<div id="dv"></div>
	<p align="left"><h3>BÌNH LUẬN</h3></p>
	<div id="post_cmt"></div>
	<!-- <div class="commented row">
		<div class="img-commented col-1 " > 
			<img src="images/user.jpg" class="rounded float-right" width="100%" alt="">
		</div>
		<div class="user-commented col">
			<div class="name-user-commented ">
				<b>Khanh</b>
			</div>
			<div class="content-user-commented">
				ádasdasda
			</div>
		</div>
	</div> -->
	<div class="comment mt-4 row justify-content-center">
		<div class="col-8 ">
			<textarea class="comment-textfield" id="comment-textfield"></textarea>
		</div>
		<div class=" ">
			<input class="comment-button" id="comment-button" type="submit" value="Bình luận">
		</div>
	</div>
</div>
<div class="suggestion">
	<div class="popular container mt-5 ">
		<h2>Các địa điểm phổ biến</h2>
		<div class="center slider">
			<!-- <div><a href=""><img src="images/1.jpg"></a></div>
			<div><a href=""><img src="images/1.jpg"></a></div>
			<div><a href=""><img src="images/1.jpg"></a></div>
			<div><a href=""><img src="images/1.jpg"></a></div>
			<div><a href=""><img src="images/1.jpg"></a></div> -->
			<?php echo $ouput2; ?>
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
					<form action="query/login.php" method="POST">
						<input type="text" class="form-control " id="tkdn" placeholder="Tài Khoản" name="taikhoan" required>
						<input type="password" class="form-control mt-3" id="mkdn" placeholder="Mật Khẩu" name="matkhau" required>
						<div class="modal-footer">
							<div class="modal-footer">
								<input type="submit" class="btn btn-default" name="" value="Trở Lại">
								<input type="submit" class="btn btn-mainblue" id="dn_btn" name="dn_btn" value="Đăng Nhập">
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>
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
		function fetch_data()  
		{ 
			$.ajax({  
				url:"query/service.php",  
				method:"POST",  
				success:function(data){  
					$('#dv').html(data);  
				}  
			});  
		}  
		fetch_data();  
	});  
	$(document).ready(function(){  
		function fetch_data()  
		{ 
			$.ajax({  
				url:"query/post_cmt.php",  
				method:"POST",  
				success:function(data){  
					$('#post_cmt').html(data);  
				}  
			});  
		}  
		fetch_data();  
	});  
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#comment-button").click(function(event){
			event.preventDefault();
			var gh = "<?php echo $tk; ?>";
			if (gh =="") {
				alert("mời bạn đăng nhập trước");
			}
			else{
				cmt = $("#comment-textfield").val();
				datas = cmt;
				$.ajax({url: "query/comment.php",
					type: 'GET',
					data : {cmt : datas},
					success: function(result){
						window.location.reload();
					}
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
							window.location.href = "profile.php";
						}
						else{
							location.reload();	
						}
						
					},
				});
				
			}
		});
	});
	function getConfirmation(){
		var gh = "<?php echo $idnd; ?>";
			if (gh =="") {
				alert("mời bạn đăng nhập trước");
			}
			else{
				var retVal = confirm("Bạn có chắc muốn đặt dịch vụ này?");
		if( retVal == true ){
			alert("Đặt dịch vụ thành công");
			/*$.ajax({
				url: "xuly/xlmua.php",
				success: function(result){
					alert("Đặt hàng thành công ");
					location.href = 'cart.php';
				}});*/
			return true;	
		}
		else{
			return false;
		}

			}
		
	}
         //-->
</script>