<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/HeDieuHanh.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/NhaSanXuat.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/DanhMuc.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/DanhMucCon.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/GiaSanPham.php');
	
	$dm = new DanhMuc();
	$dmc = new DanhMucCon();
	$gia = new GiaSanPham();
	
	$dsdm = $dm->getTenDM();
	$dsgia = $gia->getGia();
?>
<script>
//Group checkbox
/*$("input:checkbox").click(function() {
    if ($(this).is(":checked")) {
        var group = "input:checkbox[name='" + $(this).attr("name") + "']";
        $(group).prop("checked", false);
        $(this).prop("checked", true);
    } else {
        $(this).prop("checked", false);
    }
});*/
$(document).ready(function(){
	$("input:checkbox").click(function(){
		var iddmspc = [];
		$("input:checkbox[name=iddmspc]:checked").each(function(index, element) {
            iddmspc.push($(this).val())
        });
		//iddmspc = this.getAttribute("value");
		$.post(
		"Controls/LocSanPham.php",
		{
			iddmspc: iddmspc,
			loai: "danhmuc"
			
		},
		function(data,status){
			$("#cotphai").html(data);
		});
	})
	$("input:checkbox").click(function(){
		idgia = this.getAttribute("value");
		$.post(
		"Views/LocSanPham.php",
		{
			id: idgia,
			loai: "gia"
		},
		function(data,status){
			$("#cotphai").html(data);
		});
	})
})
</script>
<div id="wrap3">
  		<div class="bentrai">
            <div style="height:560px">
            <div class="box">
				<?php
				//Lay thuong hieu va he dieu hanh
                    while($row = mysql_fetch_array($dsdm)){
                        echo 
                        "<div class='box-heading'>".$row["DM_TEN"]."</div>
                        <div class='box-content'>
                        <div class='box-category'>
                            <ul>";
                                $dsdmc = $dmc->getTenDMC($row["DM_ID"]);
                                while($row = mysql_fetch_array($dsdmc)){
                                    echo 
                                        "<li>
                                            <input id='iddmspc' name='iddmspc' type='checkbox' value='".$row["DM_SP_CON_ID"]."'/>&nbsp;&nbsp;&nbsp;<font size='-1'>".$row["DM_SP_CON_TEN"]."</font>
                                        </li>";
                                }
                         echo 
                            "</ul>
                         </div>
                         </div>";
                    }
                ?>
               <div class="box-heading">Giá sản phẩm</div>
               <div class="box-content">
               <div class="box-category">
               <ul>
               		<?php
						while($row = mysql_fetch_array($dsgia)){
							echo " 
								<li>
                            		<input type='checkbox' id='idgia' value='".$row["ID_GIA"]."' />&nbsp;&nbsp;&nbsp;<font size='-1'>Giá từ ".$row["GIA_TRI"]." triệu</font>
								</li>
							";
						}
					?>
               </ul>
               </div></div>
           </div></div>
       	</div></div>    
	