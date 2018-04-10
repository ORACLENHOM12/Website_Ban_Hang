 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
 <table width="366" border="1">
  <tbody>
    <tr>
      <td height="24" colspan="2" align="center">Thêm sản phẩm</td>
    </tr>
    <tr>
      <td width="103" align="left">Tên sản phẩm:</td>
      <td width="251"><input type="text" name="tensp" style="width: 250px"></td>
    </tr>
    <tr>
      <td align="left">Xuất xứ: </td>
      <td><input type="text" name="xuatxu" style="width: 250px"></td>
    </tr>
    <tr>
      <td align="left">Hình ảnh:</td>
      <td><input type="file" name="hinhanh" style="width: 250px"></td>
    </tr>
    <tr>
      <td align="left">Mô tả:</td>
      <td><textarea name="mota" cols="39" rows="10"></textarea></td>
    </tr>
    <tr>
      <td align="left">Giá:</td>
      <td><input type="text" name="gia" style="width: 250px"></td>
    </tr>
    <tr>
      <td align="left">Số lượng tồn:</td>
      <td><input type="text" name="soluongton" style="width: 250px"></td>
    </tr>
    <?php
	  $sql="select * from dongsanpham ";
	  $run=mysqli_query($conn,$sql);	  
	  ?>
    <tr>
      <td align="left">Dòng sản phẩm:</td>
      <td>
      	<select name="dongsp" style="width: 250px">
      	<?php
				while($dong=mysqli_fetch_array($run)){
		?>				
			<option value="<?php echo($dong['ID'])?>"><?php echo($dong['TenDongSP'])?></option>
		<?php
				}
		?>
      		
      	</select>
      </td>
    </tr>
    <?php
	  $sql="select * from thuonghieu ";
	  $run=mysqli_query($conn,$sql);	  
	  ?>
    <tr>
      <td align="left">Thương hiệu:</td>
      <td>
      	<select name="thuonghieu" style="width: 250px">
      	<?php
				while($dong=mysqli_fetch_array($run)){
		?>
      		<option value="<?php echo($dong['ID'])?>"><?php echo($dong['TenThuongHieu'])?></option>
      	<?php
				}
		?>	
      		
      	</select>
      </td>
    </tr>
    <tr>
      <td  colspan="2" align="center"><button name="them" style="width:70px;height: 30px;" >Thêm</button></td>
    </tr>
  </tbody>
</table>
</form>

