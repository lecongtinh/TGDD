<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ChiTietSanPham.php');
	if(isset($_SESSION["cart"])){
	$sosp = count($_SESSION["cart"]);
	$sp = new ChiTietSanPham();
	$tongtien = 0;
	for($i=0; $i<$sosp; $i++){
		$spct = $sp->getChiTietSanPham($_SESSION["cart"][$i]["idsp"]);
		$row = mysql_fetch_array($spct);
		$tongtien = $tongtien + $row["SP_GIA"];
	}
?>
<script language="javascript">
	$(document).ready(function() {
		var idsp = [];
		var tongtien = <?php echo $tongtien; ?>;
		$("#dathang").click(function(){
			$("input:checkbox:checked").each(function(index, element) {
                idsp.push($(this).val());
				$.post(
					"Controls/DatHang.php",
					{
						idsp: idsp,
						tong: tongtien
					},
					function(data,status){
						alert(status);
					}
				)
            });
		});
    });
</script>
<div class="wrap3">
    <div class="benphai">
        <div class="box1">
            <div class="box-heading1">Giỏ hàng của <?php echo $_SESSION["email"]; ?></div>
                <form action="" method="post">
                    <table width="750" height="200" border="0" bgcolor="#FFFFFF">
                        <tr>
                        	<td width="100" align="center">
                             	<p><label>Mục chọn</label></p>   
                            </td>
                            <td width="200" align="center">
                                <p><label>Tên sản phẩm</label></p>
                            </td>
                            <!--<td width="200" align="center">
                              <p><label>Số lượng</label></p>
                            </td>-->
                            <td width="200" align="center">
                                <p><label>Giá tiền</label></p>
                            </td>
                            <!--<td width="200" align="center">
                                <p><label>Tổng tiền</label></p>
                            </td>-->
                        </tr>
                        <?php 
							for($i=0; $i<$sosp; $i++){
								$spct = $sp->getChiTietSanPham($_SESSION["cart"][$i]["idsp"]);
								$row = mysql_fetch_array($spct);
						?>
                        <tr>
                        	<td width="50" align="center">
                                <p><input type="checkbox" id="idsp" value="<?php echo $_SESSION["cart"][$i]["idsp"]; ?>"/></p>
                            </td>
                           <td width="200" align="center" id="tensp">
                                <?php echo $row["SP_TEN"] ?>
                            </td>
                            <td width="200" align="center" id="giasp">
                                <?php echo $row["SP_GIA"] ?>
                            </td>
                        </tr>
                        <?php
							}
						?>
                        <tr>               
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="3" align="right"><p><label>Thành tiền: <font color="#FF0000" size="3"><strong id="tongtien"><?php echo $tongtien; ?> </strong></font>VND</label></p></td>              
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td align="right" colspan="2"><p><label><input class="button" type="submit" id="dathang" value="Đặt hàng"/>&nbsp;&nbsp;&nbsp;<input class="button" type="submit" id="xoagiohang" value="Làm rỗng" /></label></p></td>               
                        </tr>
                    </table>
                </form>
                <?php
	}else{
		?>
        	<div class="wrap3">
            <div class="benphai">
                <div class="box1">
                    <div class="box-heading1">Giỏ hàng của <?php echo $_SESSION["email"]; ?></div>
        
        <?php
		
	}
				?>
           </div>
       </div>
	</div>
</div>
