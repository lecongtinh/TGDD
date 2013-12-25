<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class DanhMuc extends database{
		
		public function ThemDanhMuc($ten, $tukhoa, $sx, $tt){
			$query = "INSERT INTO `danh_muc_san_pham`(`DM_TEN`, `DM_TUKHOA`, `DM_SAPXEP`, `TRANGTHAI`) VALUES ('".$ten."','".$tukhoa."',".$sx.",".$tt.")";
			return $this->executeQuery($query);
		}
		public function CapNhatDanhMuc($iddm, $ten, $tukhoa, $sx, $tt){
			$query = "UPDATE `danh_muc_san_pham` SET `DM_TEN`='".$ten."',`DM_TUKHOA`='".$tukhoa."',`DM_SAPXEP`=".$sx.",`TRANGTHAI`=".$tt." WHERE `DM_ID`= ".$iddm;
			return $this->executeQuery($query);
		}
		public function getTenDM(){
			$query = "SELECT `DM_ID`, `DM_TEN` FROM `danh_muc_san_pham`";
			return $this->executeQuery($query);
		}
	}
?>