<?php
$sql="select * from DONGSANPHAM where ID=$_GET[id]";
$run=oci_parse($conn,$sql);
oci_execute($run);
$dong=oci_fetch_array($run);
?>
<form action="modules/quanlydanhmucsp/xuly.php?id=<?php echo $dong['ID']?>" method="post" enctype="multipart/form-data">
 <table width="250px"  align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center" style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">Chỉnh sửa dòng sản phẩm</td>
    </tr>
    <tr align="center">
      <td width="144" height="60" align="right" >Tên dòng </td>
       <td width="951"><input type="text" name="tendongsp" id="tendongsp" style="width: 170px;height: 30px" value="<?php echo $dong['TENDONGSP'];?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" height="52" ><input type="submit" class="btn" name="sua" id="sua" value="Sửa">&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>