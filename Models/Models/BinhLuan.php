<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class BinhLuan extends database{
		
		public function ThemBinhLuan($idsp, $idtv, $ngay, $noidung){
			$query = "INSERT INTO `binh_luan`(`SP_ID`, `TV_ID`, `BL_NGAY`, `BL_NOIDUNG`) VALUES (".$idsp.",".$idtv.",'".$ngay."','".$noidung."')";
			return $this->executeQuery($query);
		}
		public function CapNhatBinhLuan($idbl, $ngay, $noidung){
			$query = "UPDATE `binh_luan` SET `BL_NGAY`='".$ngay."',`BL_NOIDUNG`='".$noidung."' WHERE `BL_ID` = ".$idbl;
			return $this->executeQuery($query);
		}
		public function XoaBinhLuan($idbl){
			$query = "DELETE FROM `binh_luan` WHERE `BL_ID` = ".$idbl;
			return $this->executeQuery($query);
		}
		public function getBinhLuan($id){
			$query = "SELECT
					  `binh_luan`.`BL_NGAY`,
					  `binh_luan`.`BL_NOIDUNG`,
					  `thanh_vien`.`HOTEN`,
					  `thanh_vien`.`AVATAR`,
					  `binh_luan`.`BL_ID`
					FROM
					  `binh_luan`
					   INNER JOIN `thanh_vien` ON `thanh_vien`.`TV_ID` = `binh_luan`.`TV_ID`
					WHERE  
					  `binh_luan`.`SP_ID` = ".$id;
			return $this->executeQuery($query);
		}
	}
?>