<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class HeDieuHanh extends database{
		
		public function ThemHDH($ten, $tt){
			$query = "INSERT INTO `he_dieu_hanh`(`HDH_TEN`, `TRANGTHAI`) VALUES ('".$ten."',".$tt.")";
			return $this->executeQuery($query);
		}
		public function CapNhatHDH($idhdh, $ten, $tt){
			$query = "UPDATE `he_dieu_hanh` SET `HDH_TEN`='".$ten."',`TRANGTHAI`=".$tt." WHERE `ID_HDH`=".$idhdh;
			return $this->executeQuery($query);
		}
		public function getTenHDH(){
			$query = "SELECT `ID_HDH`, `HDH_TEN` FROM `he_dieu_hanh` WHERE `TRANGTHAI` = 1";
			return $this->executeQuery($query);
		}
	}
?>