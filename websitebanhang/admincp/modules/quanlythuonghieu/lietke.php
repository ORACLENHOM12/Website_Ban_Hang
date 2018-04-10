<?php
	$sql="select * from thuonghieu order by ID desc";
	$run=mysqli_query($conn,$sql);

?>
 

 <table width="940px" border="1" >
  <tbody>
    <tr>
      <td width="83" rowspan="2" align="center">ID</td>
      <td width="791" rowspan="2" align="center">Tên thương hiệu</td>
      <td colspan="2" align="center">Quản lý</td>
    </tr>
    <tr>
      <td width="105" align="center">Sửa</td>
      <td width="104" align="center">Xóa</td>
    </tr>
    <?php
	  $i=0;
	  while($dong=mysqli_fetch_array($run)){
?>
    <tr>
      <td align="center"><?php echo $i;?></td>
      <td ><?php echo $dong['TenThuongHieu'];?></td>
      <td align="center"><a href="index.php?quanly=quanlythuonghieu&ac=sua&id=<?php echo $dong['ID']?>">Sửa</a></td>
      <td align="center"><a href="modules/quanlythuonghieu/xuly.php?id=<?php echo $dong['ID']?>">Xóa</a></td>
    </tr>
	  
<?php
	  
	  $i++;
										   }
?>
    
  </tbody></table>
<table width="200" border="1">
</table>