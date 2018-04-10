<?php
$sql="select * from DONGSANPHAM where ID=$_GET[id]";
$run=oci_parse($conn,$sql);
oci_execute($run);
$dong=oci_fetch_array($run);
?>
<form action="modules/quanlydanhmucsp/xuly.php?id=<?php echo $dong['ID']?>" method="post" enctype="multipart/form-data">
 <table width="250px" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center">Chỉnh sửa dòng sản phẩm</td>
    </tr>
    <tr>
      <td width="144" height="42" align="right">Tên dòng sản phẩm</td>
      <td width="951"><input type="text" name="tendongsp" id="tendongsp" value="<?php echo $dong['TENDONGSP'];?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="right" ><input type="submit" name="sua" id="sua" value="Sửa">&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>