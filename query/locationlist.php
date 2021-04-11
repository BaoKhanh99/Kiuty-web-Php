<?php 
 session_start();
 require 'connect.php';
 $output = '';  
 $sql = "SELECT * FROM tour";  
 $result = mysqli_query($con, $sql);  
 $output .= '  
      <div class=" table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="10%">Tên Địa Điểm</th>  
                     <th width="10%">Thông Tin</th>  
                     <th width="10%">Vị Trí</th>
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                    <td>'.$row["iddiadiem"].'</td>  
                    <td class="hoten" data-id1="'.$row["iddiadiem"].'" contenteditable>'.$row["tendiadiem"].'</td>
                    <td class="hoten" data-id1="'.$row["iddiadiem"].'" contenteditable>'.$row["thongtindiadiem"].'</td>
                    <td class="hoten" data-id1="'.$row["iddiadiem"].'" contenteditable>'.$row["noidi"].'</td>      
           ';
      }  
      /*$output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  */
 }  
 else  
 {  
      /*$output .= '
				<tr>  
					<td></td>  
					<td id="first_name" contenteditable></td>  
					<td id="last_name" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  */
 }  
 $output .= '</tr></table>  
      </div>';  
 echo $output;  
 ?>