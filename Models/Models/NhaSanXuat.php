<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class NhaSanXuat extends database{
		
		public function ThemNSX($ten, $image, $sx, $tt){
			$query = "INSERT INTO `nha_san_xuat`(`NSX_TEN`, `NSX_IMAGE`, `NSX_SAPXEP`, `TRANGTHAI`) VALUES ('".$ten."','".$image."',".$sx.",".$tt.")";
			return $this->executeQuery($query);
		}
		public function CapNhatNSX($idnsx, $ten, $image, $sx, $tt){
			$query = "UPDATE `nha_san_xuat` SET `NSX_TEN`='".$ten."',`NSX_IMAGE`='".$image."',`NSX_SAPXEP`=".$sx.",`TRANGTHAI`=".$tt." WHERE `NSX_ID`= ".$idnsx;
			return $this->executeQuery($query);
		}
		public function getTenNSX(){
			$query = "SELECT `NSX_ID`, `NSX_TEN` FROM `nha_san_xuat` WHERE `TRANGTHAI` = 1";
			return $this->executeQuery($query);
		}
	}
?>