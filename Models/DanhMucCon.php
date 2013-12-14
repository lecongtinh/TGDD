<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class DanhMucCon extends database{
		
		public function ThemDMC($iddm, $ten, $tukhoa, $sx, $tt){
			$query = "INSERT INTO `danh_muc_san_pham_con`(`DM_ID`, `DM_SP_CON_TEN`, `DM_SP_CON_TUKHOA`, `SAPXEP`, `TRANGTHAI`) VALUES (".$iddm.",'".$ten."','".$tukhoa."',".$sx.",".$tt.")";
			return $this->executeQuery($query);
		}
		public function CapNhatDMC($iddmc, $iddm, $ten, $tukhoa, $sx, $tt){
			$query = "UPDATE `danh_muc_san_pham_con` SET `DM_ID`=".$iddm.",`DM_SP_CON_TEN`='".$ten."',`DM_SP_CON_TUKHOA`='".$tukhoa."',`SAPXEP`=".$sx.",`TRANGTHAI`=".$tt." WHERE `DM_SP_CON_ID` = ".$iddmc;
			return $this->executeQuery($query);
		}
		public function getTenDMC($iddm){
			$query = "SELECT `DM_SP_CON_ID`, `DM_SP_CON_TEN` FROM `danh_muc_san_pham_con` WHERE `DM_ID` = ".$iddm;
			return $this->executeQuery($query);
		}
	}
?>