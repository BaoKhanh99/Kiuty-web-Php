<?php 
require 'connect.php';
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
echo $ouput;
?>