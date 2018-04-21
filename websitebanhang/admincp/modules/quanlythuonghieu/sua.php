<?php
$sql="select * from THUONGHIEU where ID=$_GET[id]";
$run=oci_parse($conn,$sql);
oci_execute($run);
$dong=oci_fetch_array($run);
?>
<form action="modules/quanlythuonghieu/xuly.php?id=<?php echo $dong['ID']?>" method="post" enctype="multipart/form-data">
 <table width="290px"  align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center" style="background:#ee145b;padding: 5px;color: aliceblue;font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif'">Chỉnh sửa thương hiệu</td>
    </tr>
    <tr align="center">
     <td width="91" height="60" >Tên thương hiệu</td>
      <td width="189"><input type="text" name="tenthuonghieu" id="tenthuonghieu" style="width: 170px;height: 30px" value="<?php echo $dong['TENTHUONGHIEU'];?>"></td>
    </tr>
    <tr>
      <td height="52" colspan="2" align="center" ><input type="submit" class="btn" name="sua" id="sua" value="Sửa">&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>