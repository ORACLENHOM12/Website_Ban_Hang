<?php
$sql="select * from SANPHAM where ID=$_GET[id]";
$run=oci_parse($conn,$sql);
oci_execute($run);
$dong=oci_fetch_array($run);
?> 
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['ID']?>" method="post" enctype="multipart/form-data">
 <table width="366" border="0">
  <tbody>
    <tr>
     <td height="24" colspan="2" align="center" style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">Chỉnh sửa sản phẩm</td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Tên sản phẩm:</td>
      <td width="258" align="center"><input type="text" name="tensp" style="width: 250px;height: 30px" value="<?php echo $dong['TENSP'];?>"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Xuất xứ: </td>
      <td width="258" align="center"><input type="text" name="xuatxu" style="width: 250px;height: 30px" value="<?php echo $dong['XUATXU'];?>"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Hình ảnh:</td>
      <td width="258" align="center"><input type="file" name="hinhanh" style="width: 250px;height: 30px"><img src="modules/quanlysanpham/hinhanhsp/<?php echo($dong['HINHANH'])?>" width="50px" height="50px"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Mô tả:</td>
      <td width="258" align="center"><textarea name="mota" cols="39" rows="10" ><?php echo $dong['MOTA'];?></textarea></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Giá:</td>
      <td width="258" align="center"><input type="text" name="gia" style="width: 250px;height: 30px" value="<?php echo $dong['GIA'];?>"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Số lượng tồn:</td>
      <td width="258" align="center"><input type="text" name="soluongton" style="width: 250px;height: 30px" value="<?php echo $dong['SOLUONGTON'];?>"></td>
    </tr>
    <?php
	  $sql_dong="select * from DONGSANPHAM ";
	  $run_dong=oci_parse($conn,$sql_dong);	 
    oci_execute($run_dong); 
	  ?>
    <tr>
     <td width="98" height="44" align="center">Dòng sản phẩm:</td>
      <td width="258" align="center">
      	<select name="dongsp" style="width: 250px;height: 30px">
      	<?php
				while($dong_dong=oci_fetch_array($run_dong)){
					if($dong['IDDONG']==$dong_dong['ID'])	{
		?>	
				
			<option selected="selected" value="<?php echo($dong_dong['ID'])?>"><?php echo($dong_dong['TENDONGSP'])?></option>
		<?php
					}
					else{
		?>
					
						?>
					<option value="<?php echo($dong_dong['ID'])?>"><?php echo($dong_dong['TENDONGSP'])?></option>
			<?php
					}
				}
			?>
		
      		
      	</select>
      </td>
    </tr>
    <?php
	  $sql_thuonghieu="select * from THUONGHIEU ";
	  $run_thuonghieu=oci_parse($conn,$sql_thuonghieu);	 
    oci_execute($run_thuonghieu); 
	  ?>
    <tr>
      <td width="98" height="44" align="center">Thương hiệu:</td>
     <td width="258" align="center">
      	<select name="thuonghieu" style="width: 250px;height: 30px">
      	<?php
				while($dong_thuonghieu=oci_fetch_array($run_thuonghieu)){
					if($dong['IDTHUONGHIEU']==$dong_thuonghieu['ID'])	{
		?>	
				
			<option selected="selected" value="<?php echo($dong_thuonghieu['ID'])?>"><?php echo($dong_thuonghieu['TENTHUONGHIEU'])?></option>
		<?php
					}
					else{
		?>
					
						?>
					<option value="<?php echo($dong_thuonghieu['ID'])?>"><?php echo($dong_thuonghieu['TENTHUONGHIEU'])?></option>
			<?php
					}
				}
			?>	
      		
      	</select>
      </td>
    </tr>
    <tr>
      <td height="43"  colspan="2" align="center"><input type="submit" class="btn" name="sua" style="width:70px;height:30px" value="Sửa"></td>
    </tr>
  </tbody>
</table>
</form>

