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
	<title>Phản Hồi</title>
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
	.main{
	}
	.feedback-button{
	background-color: #0d56a6; /* Green */
  	border: 1px solid #689ad3;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	cursor: pointer;
	width: 10%;
	}
		.feedback-button:hover{
	background-color: #274f7d;  	
	}
		.feedback-textfield{
			padding-left: 2%;
			padding-top: 1%;
			width: 80%;
			resize: none;
			height: 100px;
			border: 2px solid #aaa;
			border-radius: 4px;
			outline: none;
			box-sizing: border-box;
			transition: 3s;
		}
		.feedback-textfield:focus{
			border-color: dodgerblue;
	box-shadow: 0 0 8px 0 dodgerblue;
		}
		.cancel-feedback-bt{
			background-color: #ffffff;
		    border: 1px solid lightgray;
		    color: black;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    cursor: pointer;
		    width: 10%;
		}
		.cancel-feedback-bt:hover{
			background-color: lightgray; 
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
<div class="main mt-4 container col-10 ">
	<h2 align="center">PHẢN HỒI</h2>
	<h4 align="center">Hãy cho chúng tôi biết những góp ý của bạn</h4>
	<div style="text-align: center;" class="mt-4">
		tiêu đề phản hồi: <input type="" id="feedback-title">
		<textarea class="feedback-textfield mt-4"></textarea>
	</div>
	<div style="text-align: center;" class="mt-4">
		<input type="submit" class="feedback-button" id="feedback-button" name="" value="Gửi">
		<input type="submit" class="cancel-feedback-bt" name="" value="Hủy">
	</div>
</div>
</body>
</html>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist\js\javascript.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".feedback-button").click(function(e){
			e.preventDefault();
			var nd = $(".feedback-textfield").val();
			var tt = $("#feedback-title").val();
			if (nd == "") {
				alert("Bạn chưa nhập phản hồi");
			}
			else if(tt == ""){
					alert("Bạn chưa nhập tiêu đề phản hồi");
			}
			else{
				alert(tt);
				$.ajax({
					url : 'query/sendfeedback.php',
					type : 'POST',
					data : {
						nd : nd,
						tt : tt,
					},
					success : function (result){	
						alert(result);
						window.location.href = "index.php";
					},
				});
			}
		});
	});
	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".cancel-feedback-bt").click(function(e){
			window.location.href = "index.php";
		});		
	});
</script>