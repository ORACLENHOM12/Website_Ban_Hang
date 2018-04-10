<?php
$sql="select * from thuonghieu where ID=$_GET[id]";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlythuonghieu/xuly.php?id=<?php echo $dong['ID']?>" method="post" enctype="multipart/form-data">
 <table width="250px" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center">Chỉnh sửa thương hiệu</td>
    </tr>
    <tr>
      <td width="144" height="42" align="right">Tên thương hiệu</td>
      <td width="951"><input type="text" name="tenthuonghieu" id="tenthuonghieu" value="<?php echo $dong['TenThuongHieu'];?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="right" ><input type="submit" name="sua" id="sua" value="Sửa">&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>