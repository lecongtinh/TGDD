<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Database/connect.php');
	class ThanhVien extends database{
		public function ThemThanhVien($nhomtv, $hoten, $email, $sdt, $matkhau, $diachi, $ngaythem, $tt){
			$query = "INSERT INTO `thanh_vien`(`NHOM_TV_ID`, `HOTEN`, `EMAIL`, `SDT`, `MATKHAU`, `DIACHI`, `NGAYTHEM`, `TRANGTHAI`) VALUES (".$nhomtv.",'".$hoten."','".$email."',".$sdt.",'".$matkhau."','".$diachi."','".$ngaythem."',".$tt.")";
			return $this->executeQuery($query);
		}
		public function CapNhatThongTin($hoten, $email, $sdt, $matkhau, $diachi){
			$query = "UPDATE `thanh_vien` SET `HOTEN`='".$hoten."',`SDT`=".$sdt.",`MATKHAU`='".$matkhau."',`DIACHI`='".$diachi."' WHERE `EMAIL` = '".$email."'";
			return $this->executeQuery($query);
		}
		public function XoaThanhVien($id){
			$query = "DELETE FROM `thanh_vien` WHERE `TV_ID` = ";
			return $this->executeQuery($query);
		}
		public function CapNhatTrangThai($id, $tt){
			$query = "UPDATE `thanh_vien` SET `TRANGTHAI`=[value-9] WHERE `TV_ID`";
			return $this->executeQuery($query);
		}
		public function DangNhap($email, $matkhau){
			$query = "SELECT * FROM `thanh_vien` WHERE `EMAIL` = '".$email."' AND `MATKHAU` = '".$matkhau."'";
			$result = $this->executeQuery($query);
			$kt = mysql_num_rows($result);
			return $kt;
		}
		public function ThongTinThanhVien($email){
			$query = "SELECT * FROM `thanh_vien`";
			$result = $this->executeQuery($query);
			return $result;
		}
		public function getHoTen($email){
			$query = "SELECT `HOTEN` FROM `thanh_vien` WHERE `EMAIL` = '".$email."'";
			$result = $this->executeQuery($query);
			$row = mysql_fetch_array($result);
			return $row["HOTEN"];
		}
		public function getAvatar($email){
			$query = "SELECT `AVATAR` FROM `thanh_vien` WHERE `EMAIL` = '".$email."'";
			$result = $this->executeQuery($query);
			$row = mysql_fetch_array($result);
			return $row["AVATAR"];
		}
		public function getID($email){
			$query = "SELECT `TV_ID` FROM `thanh_vien` WHERE `EMAIL` = '".$email."'";
			$result = $this->executeQuery($query);
			$row = mysql_fetch_array($result);
			return $row["TV_ID"];
		}
		
	}
?>