<?php
require "connect.php";
session_start();
$id = $_SESSION["iddc"];
$output ='';
$query = "SELECT * FROM nhanxet WHERE id_dc = '$id'";
		$sql = mysqli_query($con,$query);
		$num = mysqli_num_rows($sql);
		while ($row = mysqli_fetch_assoc($sql)) {
			$query2 = "SELECT * FROM users WHERE idnd =".$row["idnd"]."";
		$sql2 = mysqli_query($con,$query2);
		while ($row2 = mysqli_fetch_assoc($sql2)) {
			$output .= '<div class="commented row mt-4">
		<div class="img-commented col-1 " > 
			<img src="images/user.jpg" class="rounded float-right" width="100%" >
		</div>
		<div class="user-commented col">
			<div class="name-user-commented ">
				<b>'.$row2["hoten"].'</b>
			</div>
			<div class="content-user-commented">
				'.$row["noidung"].'
			</div>
		</div>
	</div>';
		}
	}
		echo $output;
?>