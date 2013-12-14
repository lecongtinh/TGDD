<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class ChiTietSanPham extends database{
		
		public function getChiTietSanPham($id){
			$query = "SELECT
					  `san_pham`.`SP_ID`,
					  `san_pham`.`SP_TEN`,
					  `san_pham`.`SP_IMAGE`,
					  `san_pham`.`SP_GIA`,
					  `san_pham`.`TRANGTHAI`,
					  `chi_tiet_san_pham`.`MAN_HINH`,
					  `chi_tiet_san_pham`.`CPU`,
					  `chi_tiet_san_pham`.`CAMERA`,
					  `chi_tiet_san_pham`.`PIN`,
					  `chi_tiet_san_pham`.`KICH_THUOC`,
					  `chi_tiet_san_pham`.`TRONG_LUONG`,
					  `chi_tiet_san_pham`.`BO_NHO`,
					  `chi_tiet_san_pham`.`MANG`,
					  `chi_tiet_san_pham`.`KET_NOI`,
					  `chi_tiet_san_pham`.`MAU_SAC`,
					  `chi_tiet_san_pham`.`BAO_HANH`,
					  `chi_tiet_san_pham`.`PHU_KIEN`,
					  `san_pham_mo_ta`.`SP_MOTA`				
					FROM
					  `san_pham`
					  INNER JOIN `chi_tiet_san_pham` ON `chi_tiet_san_pham`.`ID_SP` =
						`san_pham`.`SP_ID`
					  INNER JOIN `san_pham_mo_ta` ON `san_pham_mo_ta`.`SP_ID` =
						`chi_tiet_san_pham`.`ID_SP`
					WHERE
					  `san_pham`.`SP_ID` = ".$id;
			return $this->executeQuery($query);
		}
	}
?>