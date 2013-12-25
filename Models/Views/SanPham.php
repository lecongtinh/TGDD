<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/SanPham.php');
	
	$sp = new SanPham();
	
	$dssp_moi = $sp->getSanPham();
	$dssp_banchay = $sp->getSanPham();
	$dssp_xemnhieu = $sp->getSanPham();
	
	if(isset($_GET["filter"]))
		$filter = $_GET["filter"];
	else
		$filter = "";

?>
<div class="wrap3" id="cotphai">
    <div class="benphai">
    	<div class="box1">
    	<div class="box-heading1">Sản phẩm mới</div>
          <table width="700" border="1" cellpadding="0" cellspacing="0" class="TableSanPham">
            <tr>
                <td>
                    <?php 
                        if (mysql_num_rows($dssp_moi) > 0) {
                            while ($row = mysql_fetch_array($dssp_moi)) {
								$ten = $row["SP_TEN"];
								$tensp = str_replace(" ", "&ndash;", $ten);
                                echo "<div align='center' class='SanPham'>
                                    <a href='".$direct."chitietsanpham&id=".$row['SP_ID']."&tensp=".$tensp.".html'>
                                    <img src='" .$row['SP_IMAGE']. "'width='50px' height='10px'>
                                    <br/></br>
                                    <div align='center' style='min-height: 28px; float:left; width: 100%; '>
                                    <span class='TenSanPham'>" .'<strong>'. $row['SP_TEN'] . '</strong>' . "</span></div>
                                    </a><br/>
                                    <div align='center' style='float:left; width: 100%;'><strong>Giá:</strong> <span class=\"Gia\">" 
                                    . number_format($row['SP_GIA'], 0, ',', '.') . "</span> <strong>VND</strong>
                                    </div></div>";
                            }
                        } else {
                            echo "<tr><td class='khongdulieu' colspan='11'>Chưa có dữ liệu</td></tr>";
                        }
                    ?>
                  </td>
              </tr>
           </table>
       	</div>
      </div>
     <div class="benphai">
    	<div class="box1">
    	<div class="box-heading1">Sản phẩm bán chạy</div>
          <table width="700" border="1" cellpadding="0" cellspacing="0" class="TableSanPham">
            <tr>
                <td>
                    <?php 
                        if (mysql_num_rows($dssp_banchay) > 0) {
                            while ($row = mysql_fetch_array($dssp_banchay)) {
                                $ten = $row["SP_TEN"];
								$tensp = str_replace(" ", "&ndash;", $ten);
                                echo "<div align='center' class='SanPham'>
                                    <a href='".$direct."chitietsanpham&id=".$row['SP_ID']."&".$tensp.".html'>
                                    <img src='" .$row['SP_IMAGE']. "'width='50px' height='10px'>
                                    <br/></br>
                                    <div align='center' style='min-height: 28px; float:left; width: 100%; '>
                                    <span class='TenSanPham'>" .'<strong>'. $row['SP_TEN'] . '</strong>' . "</span></div>
                                    </a><br/>
                                    <div align='center' style='float:left; width: 100%;'><strong>Giá:</strong> <span class=\"Gia\">" 
                                    . number_format($row['SP_GIA'], 0, ',', '.') . "</span> <strong>VND</strong>
                                    </div></div>";
                            }
                        } else {
                            echo "<tr><td class='khongdulieu' colspan='11'>Chưa có dữ liệu</td></tr>";
                        }
                    ?>
                  </td>
              </tr>
           </table>
       	</div>
      </div>
      <div class="benphai">
    	<div class="box1">
    	<div class="box-heading1">Sản phẩm xem nhiều</div>
          <table width="700" border="1" cellpadding="0" cellspacing="0" class="TableSanPham">
            <tr>
                <td>
                    <?php 
                        if (mysql_num_rows($dssp_xemnhieu) > 0) {
                            while ($row = mysql_fetch_array($dssp_xemnhieu)) {
                                $ten = $row["SP_TEN"];
								$tensp = str_replace(" ", "&ndash;", $ten);
                                echo "<div align='center' class='SanPham'>
                                    <a href='".$direct."chitietsanpham&id=".$row['SP_ID']."&".$tensp.".html'>
                                    <img src='" .$row['SP_IMAGE']. "'width='50px' height='10px'>
                                    <br/></br>
                                    <div align='center' style='min-height: 28px; float:left; width: 100%; '>
                                    <span class='TenSanPham'>" .'<strong>'. $row['SP_TEN'] . '</strong>' . "</span></div>
                                    </a><br/>
                                    <div align='center' style='float:left; width: 100%;'><strong>Giá:</strong> <span class=\"Gia\">" 
                                    . number_format($row['SP_GIA'], 0, ',', '.') . "</span> <strong>VND</strong>
                                    </div></div>";
                            }
                        } else {
                            echo "<tr><td class='khongdulieu' colspan='11'>Chưa có dữ liệu</td></tr>";
                        }
                    ?>
                  </td>
              </tr>
           </table>
       	</div>
      </div>
   </div>
</div>
