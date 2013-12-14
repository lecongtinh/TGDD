<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	
	class SanPham extends database{
		
		public function ThemSanPham($nsx, $iddm, $ten, $model, $soluong, $image, $gia, $ngaythem, $tt){
			$query = "INSERT INTO `san_pham`(`NSX_ID`, `DM_SP_CON_ID`, `SP_TEN`, `SP_MODEL`, `SP_SOLUONG`, `SP_IMAGE`, `SP_GIA`, `SP_NGAYTHEM`,`TRANGTHAI`) VALUES (".$nsx.",".$iddm.",'".$ten."','".$model."',".$soluong.",'".$image."',".$gia.",'".$ngaythem."',".$tt.")";
			return $this->executeQuery($query);
		}
		public function CapNhatSanPham($idsp, $idnsx, $iddm, $ten, $model, $soluong, $image, $gia, $ngaysua, $xem, $tt){
			$query = "UPDATE `san_pham` SET `NSX_ID`=".$idnsx.",`DM_SP_CON_ID`=".$iddm.",`SP_TEN`='".$ten."',`SP_MODEL`='".$model."',`SP_SOLUONG`=".$soluong.",`SP_IMAGE`='".$image."',`SP_GIA`=".$gia.",`SP_NGAYSUA`='".$ngaysua."',`SO_NGUOI_XEM`=".$xem.",`TRANGTHAI`=".$tt." WHERE `SP_ID`='".$idsp."'";
			return $this->executeQuery($query);
		}
		public function getSanPhamNSX($idnsx){
			$query = "SELECT `SP_ID`,`SP_TEN`,`SP_IMAGE`,`SP_GIA` FROM `san_pham` WHERE `NSX_ID` = ".$idnsx;
			return $this->executeQuery($query);
		}
		public function getSanPhamHDH($idhdh){
			$query = "SELECT `SP_ID`,`SP_TEN`,`SP_IMAGE`,`SP_GIA` FROM `san_pham` WHERE `ID_HDH` = ".$idhdh;
			return $this->executeQuery($query);
		}
		public function getSanPham1($idhdh, $idnsx){
			$query = "SELECT `SP_ID`,`SP_TEN`,`SP_IMAGE`,`SP_GIA` FROM `san_pham` WHERE `ID_HDH` = ".$idhdh." AND `NSX_ID` = ".$idnsx;
			return $this->executeQuery($query);
		}
		public function getSanPham(){
			$query = "SELECT `SP_ID`,`SP_TEN`,`SP_IMAGE`,`SP_GIA` FROM `san_pham` LIMIT 0, 4";
			return $this->executeQuery($query);
		}
		public function getSanPhamID($idsp){
			$query = "SELECT `SP_ID`,`SP_TEN`,`SP_IMAGE`,`SP_GIA` FROM `san_pham` WHERE `SP_ID` = ".$idsp;
			return $this->executeQuery($query);
		}
		public function getSanPhamTheoDM($iddm){
			$sodm = count($iddm);
			$query = "SELECT
					  `san_pham`.`SP_TEN`,
					  `san_pham`.`SP_ID`,
					  `san_pham`.`SP_IMAGE`,
					  `san_pham`.`SP_GIA`,
					  `san_pham`.`DM_SP_CON_ID`
					FROM
					  `san_pham`
					WHERE
					  `san_pham`.`DM_SP_CON_ID` = ".$iddm[0];
			for($i=1; $i<$sodm; $i++){
				$query = $query . "|| `san_pham`.`DM_SP_CON_ID` = ".$iddm[$i];
			}
			return $this->executeQuery($query);
		}
		public function timKiem($tensp){
			$query = "SELECT * FROM `san_pham` WHERE `SP_TEN` LIKE '%".$tensp."%' ";
			return $this->executeQuery($query);
		}
		public function getTenSP($id){
			$query = "SELECT `SP_TEN` FROM `san_pham` WHERE `SP_ID` = ".$id;
			$result = $this->executeQuery($query);
			$row = mysql_fetch_array($result);
			return $row["SP_TEN"];
		}
	}
?>