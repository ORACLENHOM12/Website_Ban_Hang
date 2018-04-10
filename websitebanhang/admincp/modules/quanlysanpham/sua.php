<?php
$sql="select * from sanpham where ID=$_GET[id]";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);
?> 
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['ID']?>" method="post" enctype="multipart/form-data">
 <table width="366" border="1">
  <tbody>
    <tr>
      <td height="24" colspan="2" align="center">Chỉnh sửa sản phẩm</td>
    </tr>
    <tr>
      <td width="103" align="left">Tên sản phẩm:</td>
      <td width="251"><input type="text" name="tensp" style="width: 250px" value="<?php echo $dong['TenSP'];?>"></td>
    </tr>
    <tr>
      <td align="left">Xuất xứ: </td>
      <td><input type="text" name="xuatxu" style="width: 250px" value="<?php echo $dong['XuatXu'];?>"></td>
    </tr>
    <tr>
      <td align="left">Hình ảnh:</td>
      <td><input type="file" name="hinhanh" style="width: 250px"><img src="modules/quanlysanpham/hinhanhsp/<?php echo($dong['HinhAnh'])?>" width="50px" height="50px"></td>
    </tr>
    <tr>
      <td align="left">Mô tả:</td>
      <td><textarea name="mota" cols="39" rows="10" ><?php echo $dong['MoTa'];?></textarea></td>
    </tr>
    <tr>
      <td align="left">Giá:</td>
      <td><input type="text" name="gia" style="width: 250px" value="<?php echo $dong['Gia'];?>"></td>
    </tr>
    <tr>
      <td align="left">Số lượng tồn:</td>
      <td><input type="text" name="soluongton" style="width: 250px" value="<?php echo $dong['SoLuongTon'];?>"></td>
    </tr>
    <?php
	  $sql_dong="select * from dongsanpham ";
	  $run_dong=mysqli_query($conn,$sql_dong);	  
	  ?>
    <tr>
      <td align="left">Dòng sản phẩm:</td>
      <td>
      	<select name="dongsp" style="width: 250px">
      	<?php
				while($dong_dong=mysqli_fetch_array($run_dong)){
					if($dong['IDDongSP']==$dong_dong['ID'])	{
		?>	
				
			<option selected="selected" value="<?php echo($dong_dong['ID'])?>"><?php echo($dong_dong['TenDongSP'])?></option>
		<?php
					}
					else{
		?>
					
						?>
					<option value="<?php echo($dong_dong['ID'])?>"><?php echo($dong_dong['TenDongSP'])?></option>
			<?php
					}
				}
			?>
		
      		
      	</select>
      </td>
    </tr>
    <?php
	  $sql_thuonghieu="select * from thuonghieu ";
	  $run_thuonghieu=mysqli_query($conn,$sql_thuonghieu);	  
	  ?>
    <tr>
      <td align="left">Thương hiệu:</td>
      <td>
      	<select name="thuonghieu" style="width: 250px">
      	<?php
				while($dong_thuonghieu=mysqli_fetch_array($run_thuonghieu)){
					if($dong['IDThuongHieu']==$dong_thuonghieu['ID'])	{
		?>	
				
			<option selected="selected" value="<?php echo($dong_thuonghieu['ID'])?>"><?php echo($dong_thuonghieu['TenThuongHieu'])?></option>
		<?php
					}
					else{
		?>
					
						?>
					<option value="<?php echo($dong_thuonghieu['ID'])?>"><?php echo($dong_thuonghieu['TenThuongHieu'])?></option>
			<?php
					}
				}
			?>	
      		
      	</select>
      </td>
    </tr>
    <tr>
      <td  colspan="2" align="center"><input type="submit" name="sua" value="Chỉnh Sửa"></td>
    </tr>
  </tbody>
</table>
</form>

