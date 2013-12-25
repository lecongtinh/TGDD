<?php
	session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/SanPham.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/DatHang.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/TGDD/Models/ThanhVien.php');
	$idsp = $_POST["idsp"];
	$tongtien = $_POST["tong"];
	$email = $_SESSION["email"];
	$sp = new SanPham();
	$tv = new ThanhVien();
	$dh = new DatHang();
	$resulttv = $tv->ThongTinThanhVien($email);
	$rowtv = mysql_fetch_array($resulttv);
	$hoten = $rowtv["HOTEN"];
	$email = $rowtv['EMAIL'];
	$sdt = $rowtv['SDT'];
	$kq = $dh->themDatHang(1,$hoten, $email, $sdt, 'Không có gì', $tongtien);
	/*for($i=0; $i<count($idsp); $i++){
		$resultsp = $sp->getSanPhamID($idsp[$i]);
		$rowsp = mysql_fetch_array($resultsp);
	}*/
?>