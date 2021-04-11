<?php 
require '../query/connect.php';
session_start();
$idad = $_SESSION['idad'];

$output='';
$query = "SELECT * FROM thongbao";
		$sql = mysqli_query($con,$query);
		$num = mysqli_num_rows($sql);
		//$output .="aa";
		if ($num > 0) 
		{
		//	$output .="Aaa" ;
			while ($row = mysqli_fetch_assoc($sql)) {
				$output .= '
					<div class="col-10 notification mt-4">
						<div>
							<h6>'.$row['tieudetb'].'</h6>
						</div>
						<div>'.$row['noidungtb'].'</div>
					</div>
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
	<title>Danh Sách Người Dùng</title>
  	<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/css.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<style>
	.notification{
		border: 1px solid lightgrey;
		border-style: dashed;

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
  width: 15%;
  display: block;
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
	.nd_tf{
	border: 2px solid #aaa;
	border-radius: 4px;
	margin: 8px 0;
	outline: none;
	padding: 1%;
	box-sizing: border-box;
	transition: 3s;
	}
	.nd_tf:focus{
	border-color: dodgerblue;
	box-shadow: 0 0 8px 0 dodgerblue;
}
.dx{
		width: 100%;
		border-width: 30%;
		border-top: 1px solid #cccccc;
	}
	#live_data{
		padding-left: 1%;
		text-align: center;
	}
	</style>
</head>
<body>
<div class="header">
	<div class="logo d-flex justify-content-center">
		<a  href="../index.php" ><img class="rounded mx-auto d-block" src="../images/logo1.png" width="19%" alt=""></a>
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
	<div class=" right col pr-5 ">
		<h2 align="center" class="mb-5">DANH SÁCH NGƯỜI DÙNG</h2>
		<div id="live_data"></div>                 
	</div>
	</div>
</div>
</body>
</html>
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"../query/userlist.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    
    $(document).on('blur', '.cc', function(){  
        var id = $(this).data("id2");  
        var cc = $(this).text();  
        edit_data(id,cc, "diem");  
    });  
    $(document).on('blur', '.gk', function(){  
        var id = $(this).data("id3");  
        var gk = $(this).text();  
        edit_data(id,gk, "giuaky");  
    });  
    $(document).on('blur', '.ck', function(){  
        var id = $(this).data("id4");  
        var ck = $(this).text();  
        edit_data(id,ck, "cuoiky");  
    });  
    $(document).on('blur', '.tk', function(){  
        var id = $(this).data("id5");  
        var tk = $(this).text();  
        edit_data(id,tk, "tongket");  
    });  
});  
</script>