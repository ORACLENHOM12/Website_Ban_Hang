<?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = '';
  }
  if($page == '' || $page == 1){
    $get = 0;
  }else{ 
    $get = ($page*10)-10;
  }
    $sql = "SELECT * FROM   SANPHAM  OFFSET '$get' ROWS FETCH NEXT 10 ROWS ONLY";
    $run_page = oci_parse($conn,$sql);
    oci_execute($run_page);

?>



<?php
	$sql="select * from SANPHAM order by ID desc";
	$run=oci_parse($conn,$sql);
  oci_execute($run);

?>
 
 

 <table width="825px" border="1">
  <tbody>
    <tr align="center">
      <td width="4%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">STT</td>
      <td width="12%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">TênSP</td>
      <td width="7%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">Xuất xứ</td>
      <td width="9%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">Hình ảnh</td>
      <td width="9%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">Giá</td>
      <td width="6%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">Số lượng</td>
      <td width="6%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">Dòng sản phẩm</td>
      <td width="7%" rowspan="2" style="color: #036; text-align:center; font-size: 110%">Thương hiệu</td>
      <td colspan="2" style="color: #036; text-align:center; font-size: 110%">Quản lý</td>
    </tr>
    
    <tr>
      <td width="5%" style="color: #036; text-align:center; font-size: 110%">Sửa</td>
      <td width="5%" style="color: #036; text-align:center; font-size: 110%">Xóa</td>
    </tr>
    <?php
	  $i=1;
	  while($dong=oci_fetch_array($run_page)){
?>
    <tr align="center">
     <td><?php echo $i;?></td>
      <td><?php echo($dong['TENSP'])?></td>
      <td><?php echo($dong['XUATXU'])?></td>
      <td><img src="modules/quanlysanpham/hinhanhsp/<?php echo($dong['HINHANH'])?>" width="50px" height="50px"></td>
      <td><?php echo($dong['GIA'])?></td>
      <td><?php echo($dong['SOLUONGTON'])?></td>
      <td><?php echo($dong['IDDONG'])?></td>
      <td><?php echo($dong['IDTHUONGHIEU'])?></td>
      <td><a href="index.php?quanly=quanlysanpham&ac=sua&id=<?php echo $dong['ID']?>">Sửa</a></td>
      <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['ID']?>">Xóa</a></td>
    </tr>
      
    <?php
	  
	  $i++;
										   }
?>
    
  </tbody>
</table>
<div class="page" style="margin-top: 40px">
<?php
  $sql_trang = "SELECT * FROM SANPHAM";
  $run_trang = oci_parse($conn,$sql_trang) or die(oci_error());
  $sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM (' . $sql_trang. ')';
$stmt= oci_parse($conn, $sql_query);
oci_define_by_name($stmt, 'NUMBER_OF_ROWS', $number_of_rows);
oci_execute($stmt);
oci_fetch($stmt);
  $count = $number_of_rows;
  //echo $count;
  $a = ceil($count/10);
  //echo $a;
  echo '<p style="text-align:center">';
  for($b=1;$b<=$a;$b++){
    if(isset($_GET['page']) && $_GET['page'] == $b){
      echo '<a href="?quanly=quanlysanpham&ac=them&page='.$b.'" style="text-decoration:none; padding:10px; color:#ee145b;"><strong><u>'.$b.'</u></strong></a>';
    }else{
      echo '<a href="?quanly=quanlysanpham&ac=them&page='.$b.'" style="text-decoration:none; padding:10px; color:#ee145b;"><strong>'.$b.'</strong></a>';
    }
  }
  echo '</p><br/><br/>';
?>
</div>


