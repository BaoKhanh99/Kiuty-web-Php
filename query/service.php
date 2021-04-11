<?php
require 'connect.php';
session_start();
$id = $_SESSION['iddc'] ;
$output ='';
$query2 = "SELECT * FROM dvchothue WHERE iddiadiem1 = $id";
$sql2 = mysqli_query($con,$query2);
$num = mysqli_num_rows($sql2);
echo "<div class='service mt-5'>
<h5>Các Loại dịch vụ</h5>";	
while ($row = mysqli_fetch_assoc($sql2)) {

	echo "<p><a href='#' id='dv' onclick='getConfirmation();'>".$row['kieudichvu']."</a></p>";
}
echo "</div>";
?>