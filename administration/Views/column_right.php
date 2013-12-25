<script language="javascript">
	$(document).ready(function(e) {
        $("input:image").click(function(e) {
            var id = $(this).attr("value");
			$.post(
				"Controllers/XoaDatHang.php",
				{
					id: id
				},
				function(data, status){
					location.reload();
					alert("Xóa thành công");
				}
			)
        });
		$(".edit_dh").click(function(e) {
            var id = $(this).attr("id");
			$("#hoten_"+id).hide();
			$("#hoten_input_"+id).show();
        }).change(function(e) {
            var id = $(this).attr("id");
			var hoten = $("#hoten_input_"+id).val();
			var data = 'id='+id+'&hoten='+hoten;
			$.ajax({
				type: "POST",
				url: "Controllers/AjaxDatHang.php",
				data: data,
				cache: false,
				success: function(){
					$("#hoten_"+id).show();
					$("#hoten_input_"+id).hide();
					$("#hoten_"+id).html(hoten);
				}
			});
        });;
    });
</script>
<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/administration/Models/DatHang.php');
	$dh = new DatHang();
	//xac dinh bao nhieu dong
	$display = 5;
	 // tinh tong so trang can hien thi
	if(isset($_GET['page']) && (int)$_GET['page']) {
		$page = $_GET['page'];
	} else { //neu chua xac dinh, thi tim so trang
		$record = $dh->countRow();
		if($record > $display) {
			$page = ceil($record/$display);
		} else {
			$page = 1;
		}
	}
	$start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;
	$result = $dh->thongTinDatHang($start, $display);
?>			
<div class="clear"></div>
	<div class="content-box"><!-- Start Content Box -->
		<div class="content-box-header">
			<h3>Quản lý chung</h3>	
                <ul class="content-box-tabs">
                    <li><a href="#tab1" class="default-tab">Quản lý đặt hàng</a></li> 
                    <!-- href must be unique and match the id of target div -->
                    <li><a href="#tab2">Sản phẩm vừa cập nhật</a></li>
                </ul>
			<div class="clear"></div>
		</div> <!-- End .content-box-header -->
		<div class="content-box-content">
			 <div class="tab-content default-tab" id="tab1"> 
                <table>	
                    <thead>
                        <tr>
                           <th><input class="check-all" type="checkbox" /></th>
                           <th>Mã đặt hàng</th>
                           <th>Trạng thái</th>
                           <th>Tên khách hàng</th>
                           <th>Email khách hàng</th>
                           <th>Số điện thoại</th>
                           <th>Ghi chú</th>
                           <th>Tổng tiền</th>
                           <th>Hành động</th>
                        </tr>
                        
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <td colspan="6">                                                               
                                <?php
									include("page.php");
								?>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
					 <?php
                        while($row = mysql_fetch_array($result))
                        {
                     ?>
                        <tr id="<?php echo $row["DH_ID"]?>" class="edit_dh">
                            <td><input type="checkbox" /></td>
                            <td><?php echo $row["DH_ID"]?></td>
                            <td><?php if($row["TT_DH_ID"] == 1) echo "Chờ xử lý"; else echo "Đã xử lý";?></td>
                            <td>
                            	<span id="hoten_<?php echo $row["DH_ID"]; ?>"><?php echo $row["HOTEN"]; ?></span>
                                <input hidden="true" id="hoten_input_<?php echo $row["DH_ID"]; ?>" type="text" value="<?php echo $row["HOTEN"]; ?>"  />
								
                            </td>
                            <td><?php echo $row["EMAIL"]?></td>
                            <td><?php echo $row["SDT"]?></td>
                            <td><?php echo $row["GHICHU"]?></td>
                            <td><?php echo $row["TONGTIEN"]?></td>
                            <td>
                                <!-- Icons -->
                                 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"/></a>
                                 <a href="#" title="Delete"><input type="image" src="resources/images/icons/cross.png" value="<?php echo $row["DH_ID"]?>" id="delete"/></a>
                                 <!--<a href="<?php ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" id="xoa"/><input type="hidden" value="<?php echo $row["DH_ID"]?>" id="xoa"/></a></a>--> 
                            </td>
                        </tr>
                	<?php } ?>
                    </tbody>
                </table>
			</div> <!-- End #tab1 -->
					
			<div class="tab-content" id="tab2">
                <table>	
                    <thead>
                        <tr>
                           <th><input class="check-all" type="checkbox" /></th>
                           <th>Mã hàng</th>
                           <th>Tên hàng</th>
                           <th>Hệ điều hành</th>
                           <th>Nhà sản xuất</th>
                           <th>Tiền</th>
                           <th>Ngày cập nhật</th>
                           <th>Hành động</th>
                        </tr>
                        
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <td colspan="6">                               
                               <?php
							   		include("page.php");
							   ?>
                                <div class="clear"></div>
                            </td>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Lumia920</td>
                            <td>Lumia 920</a></td>
                            <td>Windows Phone 8</td>
                            <td>Nokia</td>
                            <td>13.999.999 VNĐ</td>
                            <td>01/01/2013</td>
                            <td>
                                <!-- Icons -->
                                 <a href="#" title="Edit"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                                 <a href="#" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a> 
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>GalaxyI9300</td>
                            <td>Galaxy SIII</a></td>
                            <td>Android</td>
                            <td>SamSung</td>
                            <td>12.999.999 VNĐ</td>
                            <td>01/01/2013</td>
                            <td>
                                <!-- Icons -->
                                 <a href="#" title="Edit"><img src="../resources/images/icons/pencil.png" alt="Edit" /></a>
                                 <a href="#" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clear"></div><!-- End .clear -->
				</div> <!-- End #tab2 -->        
			</div> <!-- End .content-box-content -->
		</div> <!-- End .content-box -->
		<div class="clear"></div>