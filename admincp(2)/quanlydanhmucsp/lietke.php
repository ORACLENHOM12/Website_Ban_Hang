<?php
	$sql="select * from DONGSANPHAM order by ID desc";
	$run=oci_parse($conn,$sql);
  oci_execute($run);

?>
 

 <table width="940px" border="1" >
  <tbody>
    <tr>
      <td width="83" rowspan="2" align="center" style="color: #036; text-align:center; font-size: 110%">ID</td>
      <td width="791" rowspan="2" align="center" style="color: #036; text-align:center; font-size: 110%">Tên dòng sản phẩm</td>
      <td colspan="2" align="center" style="color: #036; text-align:center; font-size: 110%">Quản lý</td>
    </tr>
    <tr>
      <td width="105" align="center" style="color: #036; text-align:center; font-size: 110%">Sửa</td>
      <td width="104" align="center" style="color: #036; text-align:center; font-size: 110%">Xóa</td>
    </tr>
    <?php
	  $i=0;
	  while($dong=oci_fetch_array($run)){
?>
    <tr>
      <td height="47" align="center"><?php echo $i;?></td>
      <td><?php echo $dong['TENDONGSP'];?></td>
      <td align="center"><a href="index.php?quanly=quanlydanhmucsp&ac=sua&id=<?php echo $dong['ID']?>">Sửa</a></td>
      <td align="center"><a href="modules/quanlydanhmucsp/xuly.php?id=<?php echo $dong['ID']?>">Xóa</a></td>
    </tr>
	  
<?php
	  
	  $i++;
										   }
?>
    
  </tbody></table>
<table width="200" border="1">
</table>