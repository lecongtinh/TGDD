<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/SanPham.php');
	$kw = $_POST['data'];
	$sp = new SanPham();
	$result = $sp->timKiem($kw);
	$direct = "index.php?option=";
	?>
    <div class="benphai">
    	<div class="box1">
    	<div class="box-heading1">Tìm kiếm</div>
        <table width="700" border="1" cellpadding="0" cellspacing="0" class="TableSanPham">
            <tr>
                <td>
                    <?php 
                        if (mysql_num_rows($result) > 0) {
                            while ($row = mysql_fetch_array($result)) {
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