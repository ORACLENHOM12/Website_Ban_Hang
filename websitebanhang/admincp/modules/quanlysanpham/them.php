<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=xr7dc7s8jmdxjta9nuhwt2b6z7ad5qbuxabe3n9xen3ss5tx"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
 <table width="366" border="0">
  <tbody>
    <tr>
      <td height="24" colspan="2" align="center" style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">Thêm sản phẩm</td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Tên sản phẩm:</td>
      <td width="258" align="center"><input type="text" name="tensp" style="width: 250px;height: 30px"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Xuất xứ: </td>
      <td align="center"><input type="text" name="xuatxu" style="width: 250px;height: 30px"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Hình ảnh:</td>
      <td align="center"><input type="file" name="hinhanh" style="width: 250px;height: 30px"></td>
    </tr>
    <tr>
     <td width="98" height="44" align="center">Mô tả:</td>
      <td align="center"><textarea nacme="mota" cols="39" rows="10"></textarea></td>
    </tr>
    <tr>
     <td width="98" height="44" align="center">Giá:</td>
      <td align="center"><input type="text" name="gia" style="width: 250px;height: 30px"></td>
    </tr>
    <tr>
      <td width="98" height="44" align="center">Số lượng tồn:</td>
      <td align="center"><input type="text" name="soluongton" style="width: 250px;height: 30px"></td>
    </tr>
    <?php
	  $sql="select * from DONGSANPHAM ";
	  $run=oci_parse($conn,$sql);	
    oci_execute($run);  
	  ?>
    <tr>
      <td width="98" height="44" align="center">Dòng:</td>
      <td align="center">
      	<select name="dongsp"style="width: 250px;height: 30px">
      	<?php
				while($dong=oci_fetch_array($run)){
		?>				
			<option value="<?php echo($dong['ID'])?>"><?php echo($dong['TENDONGSP'])?></option>
		<?php
				}
		?>
      		
      	</select>
      </td>
    </tr>
    <?php
	  $sql="select * from THUONGHIEU ";
	  $run=oci_parse($conn,$sql);	  
    oci_execute($run);
	  ?>
    <tr>
      <td width="98" height="44" align="center">Thương hiệu:</td>
      <td align="center">
      	<select name="thuonghieu" style="width: 250px;height: 30px">
      	<?php
				while($dong=oci_fetch_array($run)){
		?>
      		<option value="<?php echo($dong['ID'])?>"><?php echo($dong['TENTHUONGHIEU'])?></option>
      	<?php
				}
		?>	
      		
      	</select>
      </td>
    </tr>
    <tr>
      <td height="41"  colspan="2" align="center"><input type = "submit" class="btn" name="them" style="width:70px;height: 30px;" value="Thêm" ></td>
    </tr>
  </tbody>
</table>
</form>

