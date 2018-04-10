<?php
	$sql="select * from sanpham order by ID desc";
	$run=mysqli_query($conn,$sql);

?>
 
 

 <table width="825px" border="1">
  <tbody>
    <tr align="center">
      <td width="4%" rowspan="2">STT</td>
      <td width="12%" rowspan="2">TênSP</td>
      <td width="7%" rowspan="2">Xuất xứ</td>
      <td width="9%" rowspan="2">Hình ảnh</td>
      <td width="30%" rowspan="2">Mô tả</td>
      <td width="9%" rowspan="2">Giá</td>
      <td width="6%" rowspan="2">Số lượng</td>
      <td width="6%" rowspan="2">Dòng sản phẩm</td>
      <td width="7%" rowspan="2">Thương hiệu</td>
      <td colspan="2">Quản lý</td>
    </tr>
    
    <tr>
      <td width="5%">Sửa</td>
      <td width="5%">Xóa</td>
    </tr>
    <?php
	  $i=0;
	  while($dong=mysqli_fetch_array($run)){
?>
    <tr align="center">
     <td><?php echo $i;?></td>
      <td><?php echo($dong['TenSP'])?></td>
      <td><?php echo($dong['XuatXu'])?></td>
      <td><img src="modules/quanlysanpham/hinhanhsp/<?php echo($dong['HinhAnh'])?>" width="50px" height="50px"></td>
      <td ><?php echo($dong['MoTa'])?></td>
      <td><?php echo($dong['Gia'])?></td>
      <td><?php echo($dong['SoLuongTon'])?></td>
      <td><?php echo($dong['IDDongSP'])?></td>
      <td><?php echo($dong['IDThuongHieu'])?></td>
      <td><a href="index.php?quanly=quanlysanpham&ac=sua&id=<?php echo $dong['ID']?>">Sửa</a></td>
      <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['ID']?>">Xóa</a></td>
    </tr>
      
    <?php
	  
	  $i++;
										   }
?>
    
  </tbody>
</table>

