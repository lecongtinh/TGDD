<script language="javascript">
	$(document).ready(function() {
        $("input:checkbox").click(function() {
			id = this.getAttribute("value");
			$.post(
				"Controls/GioHang.php",
				{
					idsp: id
				},
				function(result){
					$("#cart").html(result);
				})
        });
    });
</script>
<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ChiTietSanPham.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/BinhLuan.php');
	
	if(isset($_GET["id"]))
		$id = $_GET["id"];
	else
		$id = "";
	
	$sp = new ChiTietSanPham();
	$spct = $sp->getChiTietSanPham($id);
	$row = mysql_fetch_array($spct);
?>
<div class="wrap3" id="cotphai">
    <div class="benphai">
    <div class="box1">
    <div class="box-heading1">Chi tiết sản phẩm  <?php echo $row["SP_TEN"]; ?></div>
    
<div id="tabs">
  <ul>
    <li><a href="#tabs-2">Chi tiết sản phẩm</a></li>
    <li><a href="#tabs-1">Mô tả sản phẩm</a></li>
    <li><a href="#tabs-3">Bình luận</a></li>
  </ul>
<div id="tabs-1">
    <table>
        <tr>
            <td>
                  <?php echo $row["SP_MOTA"]; ?>
            </td>
        </tr>
    </table>
</div>
  <div id="tabs-2">
    <table width="700" align="center">
    <tr align="left">
        <td width="152"><img src="<?php echo $row["SP_IMAGE"] ?>" width="110" height="170"/><br /></td>
        <td width="452">
        	<ul>
                <li>- Màn hình: <?php echo $row["MAN_HINH"]?></li>
                <li>- HĐH: Windows Phone 8</li>
                <li>- CPU: <?php echo $row["CPU"]; ?></li>
                <li>- Camera: <?php echo $row["CAMERA"]; ?></li>
                <li>- Dung lượng pin: <?php echo $row["PIN"]; ?></li><br />
                <li> <font color="#0033CC" size="2"><strong><?php if($row["TRANGTHAI"] == 1) echo "Còn hàng"; else echo "Hết hàng"; ?></strong></font></li>
                <li> <font color="#FF0000" size="3"><strong><?php echo $row["SP_GIA"]; ?>VNĐ</strong></font></li><br />
                <li><a href=""><img src="home_template/images/icon/buy1.png" /></a>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="giohang" value="<?php echo $id; ?>"/>&nbsp;<strong>Thêm vào giỏ hàng</strong></li>
            </ul> 
        </td>
      </tr>
      <tr height="25">
      	<td></td>
        <td></td>
      </tr>
      <tr align="left">
        <td width="152"><strong>Kích thước</strong></td>
        <td width="452"><?php echo $row["KICH_THUOC"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Trọng lượng</strong></td>
        <td><?php echo $row["TRONG_LUONG"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Hệ điều hành</strong></td>
        <td>Microsoft Windows Phone 8</td>
      </tr>
      <tr align="left">
        <td><strong>Bộ xử lý</strong></td>
        <td><?php echo $row["CPU"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Bộ nhớ trong</strong></td>
        <td><?php echo $row["BO_NHO"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Mạng</strong></td>
        <td><?php echo $row["MANG"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Kết nối</strong></td>
        <td><?php echo $row["KET_NOI"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Camera</strong></td>
        <td><?php echo $row["CAMERA"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Màu sắc</strong></td>
        <td><?php echo $row["MAU_SAC"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Bảo hành</strong></td>
        <td><?php echo $row["BAO_HANH"]; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Tình trạng</strong></td>
        <td><?php if($row["TRANGTHAI"] == 1) echo "Còn hàng"; else echo "Hết hàng"; ?></td>
      </tr>
      <tr align="left">
        <td><strong>Hộp phụ kiện</strong></td>
        <td><?php echo $row["PHU_KIEN"]; ?></td>
      </tr>
    </table>
    
  </div>
  <?php
		$bl = new BinhLuan();
		$dsbl = $bl->getBinhLuan($id);
		while ($row = mysql_fetch_array($dsbl)){
			?>
			<div id="tabs-3">        
				<table width="700" align="center" border="0">
					<tr align="left">
						<td width="152" rowspan="5"><img src="<?php echo $row["AVATAR"] ?>" width="130" height="170"/></td>
						<td height="24"><strong><?php echo $row["HOTEN"]; ?></strong></td>
					</tr>
					<tr align="left">
					  <td height="124"><?php echo $row["BL_NOIDUNG"]; ?></td>
					</tr>
					<tr align="right">
					  <td><strong><?php echo $row["BL_NGAY"]; ?></strong></td>
					</tr>
                    <tr>
					  <td colspan="3"><?php echo "----------------------------------------------------------------------------";?></td>
                    </tr>
				</table>
		  </div>
          <?php
		}
		 
  ?>
</div>

</div>
    </div>
    </div>
</div>
