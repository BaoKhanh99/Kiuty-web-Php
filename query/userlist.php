<?php 
 session_start();
 require 'connect.php';
 $output = '';  
 $sql = "SELECT * FROM users";  
 $result = mysqli_query($con, $sql);  
 $output .= '  
      <div class=" table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="10%">Họ tên</th>  
                     <th width="10%">Địa Chỉ</th>  
                     <th width="10%">Năm Sinh</th>
                     <th width="10%">Số Điện Thoại</th> 
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                    <td>'.$row["idnd"].'</td>  
                    <td class="hoten" data-id1="'.$row["idnd"].'" contenteditable>'.$row["hoten"].'</td>
                    <td class="hoten" data-id1="'.$row["idnd"].'" contenteditable>'.$row["diachi"].'</td>
                    <td class="hoten" data-id1="'.$row["idnd"].'" contenteditable>'.$row["namsinh"].'</td>      
                    <td class="hoten" data-id1="'.$row["idnd"].'" contenteditable>'.$row["sdt"].'</td>
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