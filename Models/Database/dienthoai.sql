-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2013 at 06:03 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE IF NOT EXISTS `banner_image` (
  `BANNER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BANNER_TEN` varchar(50) DEFAULT NULL,
  `BANNER_LINK` varchar(50) DEFAULT NULL,
  `BANNER_IMAGE` varchar(200) DEFAULT NULL,
  `BANNER_TITLE` varchar(200) DEFAULT NULL,
  `BANNER_SAPXEP` int(11) DEFAULT NULL,
  PRIMARY KEY (`BANNER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`BANNER_ID`, `BANNER_TEN`, `BANNER_LINK`, `BANNER_IMAGE`, `BANNER_TITLE`, `BANNER_SAPXEP`) VALUES
(1, 'Khuyen mai Lumia 920', 'http://localhost/tgdd/', 'Libraries/images/banner/banner.jpg', 'Khuyen mai Lumia 920', 1);

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE IF NOT EXISTS `binh_luan` (
  `BL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SP_ID` int(11) NOT NULL,
  `TV_ID` int(11) NOT NULL,
  `BL_NGAY` date DEFAULT NULL,
  `BL_NOIDUNG` text,
  PRIMARY KEY (`BL_ID`),
  KEY `FK_BINH_LUAN_THANH_VIEN` (`TV_ID`),
  KEY `FK_SAN_PHAM_BINH_LUAN` (`SP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`BL_ID`, `SP_ID`, `TV_ID`, `BL_NGAY`, `BL_NOIDUNG`) VALUES
(1, 1, 1, '2013-08-01', 'San pham that tuyet');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_san_pham`
--

CREATE TABLE IF NOT EXISTS `chi_tiet_san_pham` (
  `ID_CT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SP` int(11) NOT NULL,
  `MAN_HINH` varchar(100) NOT NULL,
  `CPU` varchar(100) NOT NULL,
  `CAMERA` varchar(100) NOT NULL,
  `PIN` varchar(100) NOT NULL,
  `KICH_THUOC` varchar(100) NOT NULL,
  `TRONG_LUONG` varchar(100) NOT NULL,
  `BO_NHO` varchar(100) NOT NULL,
  `MANG` varchar(200) NOT NULL,
  `KET_NOI` varchar(200) NOT NULL,
  `MAU_SAC` varchar(100) NOT NULL,
  `BAO_HANH` varchar(100) NOT NULL,
  `PHU_KIEN` varchar(200) NOT NULL,
  `TINHTRANG` int(1) NOT NULL,
  PRIMARY KEY (`ID_CT`),
  UNIQUE KEY `ID_SP` (`ID_SP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`ID_CT`, `ID_SP`, `MAN_HINH`, `CPU`, `CAMERA`, `PIN`, `KICH_THUOC`, `TRONG_LUONG`, `BO_NHO`, `MANG`, `KET_NOI`, `MAU_SAC`, `BAO_HANH`, `PHU_KIEN`, `TINHTRANG`) VALUES
(1, 1, 'HD, 4.5 inches', 'Qualcomm MSM8960 S4 Plus Dual-core 1.5 GHz, GPU: Adreno 225', '8.0 MP, Ống kính Carl Zeiss, FullHD 1080p@30fps', '2000 mAh', '130.3 x 70.8 x 10.7 mm', '185g', '32 GB bộ nhớ trong, có thể mở rộng thêm thẻ SD 64GB', 'HSDPA, 42.2 Mbps; HSUPA, 5.76 Mbps; LTE, 50 Mbps UL, 100 Mbps DL', 'Wi-Fi 802.11 b/g/n, Wi-Fi Direct, Bluetooth V3.1 với A2DP, EDR', 'Hồng, Trắng, Xanh', '12 tháng', 'Thân máy, Pin BP - 4GW (2000mAh) , Sac AC-16, Cáp dữ liệu CA - 190CD , tai nghe Stereo WH -208, sách hướng dẫn', 1),
(2, 2, 'HD, 4.5 inches', 'Qualcomm MSM8960 S4 Plus Dual-core 1.5 GHz, GPU: Adreno 225', '8.0 MP, Ống kính Carl Zeiss, FullHD 1080p@30fps', '2000 mAh', '130.3 x 70.8 x 10.7 mm', '185g', '32 GB bộ nhớ trong, có thể mở rộng thêm thẻ SD 64GB', 'HSDPA, 42.2 Mbps; HSUPA, 5.76 Mbps; LTE, 50 Mbps UL, 100 Mbps DL', 'Wi-Fi 802.11 b/g/n, Wi-Fi Direct, Bluetooth V3.1 với A2DP, EDR', 'Hồng, Trắng, Xanh', '12 tháng', 'Thân máy, Pin BP - 4GW (2000mAh) , Sac AC-16, Cáp dữ liệu CA - 190CD , tai nghe Stereo WH -208, sách hướng dẫn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chuc_nang_nguoi_dung`
--

CREATE TABLE IF NOT EXISTS `chuc_nang_nguoi_dung` (
  `CN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MA_QUYEN` int(11) NOT NULL,
  `XEM` tinyint(1) DEFAULT NULL,
  `THEM` tinyint(1) DEFAULT NULL,
  `SUA` tinyint(1) DEFAULT NULL,
  `XOA` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CN_ID`),
  KEY `FK_QUYEN_NGUOI_DUNG` (`MA_QUYEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chuc_nang_nguoi_dung`
--

INSERT INTO `chuc_nang_nguoi_dung` (`CN_ID`, `MA_QUYEN`, `XEM`, `THEM`, `SUA`, `XOA`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc_san_pham`
--

CREATE TABLE IF NOT EXISTS `danh_muc_san_pham` (
  `DM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DM_TEN` varchar(200) DEFAULT NULL,
  `DM_TUKHOA` varchar(200) DEFAULT NULL,
  `DM_SAPXEP` int(11) DEFAULT NULL,
  `TRANGTHAI` int(11) NOT NULL,
  PRIMARY KEY (`DM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `danh_muc_san_pham`
--

INSERT INTO `danh_muc_san_pham` (`DM_ID`, `DM_TEN`, `DM_TUKHOA`, `DM_SAPXEP`, `TRANGTHAI`) VALUES
(1, 'Thương Hiệu', 'Thuong hieu nha san xuat', 1, 1),
(2, 'Hệ Điều Hành', 'He dieu hanh', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc_san_pham_con`
--

CREATE TABLE IF NOT EXISTS `danh_muc_san_pham_con` (
  `DM_SP_CON_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DM_ID` int(11) NOT NULL,
  `DM_SP_CON_TEN` varchar(100) DEFAULT NULL,
  `DM_SP_CON_TUKHOA` varchar(100) DEFAULT NULL,
  `SAPXEP` int(2) NOT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`DM_SP_CON_ID`),
  KEY `FK_DANH_MUC_SAN_PHAM_CHA` (`DM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `danh_muc_san_pham_con`
--

INSERT INTO `danh_muc_san_pham_con` (`DM_SP_CON_ID`, `DM_ID`, `DM_SP_CON_TEN`, `DM_SP_CON_TUKHOA`, `SAPXEP`, `TRANGTHAI`) VALUES
(1, 1, 'Nokia', 'Nokia', 1, 1),
(2, 1, 'Apple', 'Apple', 2, 1),
(3, 1, 'SamSung', 'SamSung', 3, 1),
(4, 1, 'LG', 'LG', 4, 1),
(5, 1, 'HTC', 'HTC', 5, 1),
(6, 2, 'Android', 'Android', 1, 1),
(7, 2, 'iOS', 'iOS', 2, 1),
(8, 2, 'Window Phone', 'Window Phone', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc_tin_tuc`
--

CREATE TABLE IF NOT EXISTS `danh_muc_tin_tuc` (
  `DM_TT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DM_TT_TEN` varchar(50) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`DM_TT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `danh_muc_tin_tuc`
--

INSERT INTO `danh_muc_tin_tuc` (`DM_TT_ID`, `DM_TT_TEN`, `TRANGTHAI`) VALUES
(1, 'Khuyen Mai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dat_hang`
--

CREATE TABLE IF NOT EXISTS `dat_hang` (
  `DH_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TT_DH_ID` int(11) NOT NULL,
  `HOTEN` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `GHICHU` varchar(200) DEFAULT NULL,
  `TONGTIEN` int(11) DEFAULT NULL,
  PRIMARY KEY (`DH_ID`),
  KEY `FK_TRANG_THAI_DAT_HANG` (`TT_DH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dat_hang`
--

INSERT INTO `dat_hang` (`DH_ID`, `TT_DH_ID`, `HOTEN`, `EMAIL`, `SDT`, `GHICHU`, `TONGTIEN`) VALUES
(1, 1, 'Le Cong Tinh', 'lecongtinh@gmail.com', '0987654321', 'Khong', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `dat_hang_san_pham`
--

CREATE TABLE IF NOT EXISTS `dat_hang_san_pham` (
  `DH_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DH_SP_ID` int(11) NOT NULL,
  `SP_MODEL` varchar(50) DEFAULT NULL,
  `SP_TEN` varchar(100) DEFAULT NULL,
  `SP_GIA` int(11) DEFAULT NULL,
  `SP_SOLUONG` int(11) DEFAULT NULL,
  `SP_TONG` int(11) DEFAULT NULL,
  PRIMARY KEY (`DH_ID`,`DH_SP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dat_hang_san_pham`
--

INSERT INTO `dat_hang_san_pham` (`DH_ID`, `DH_SP_ID`, `SP_MODEL`, `SP_TEN`, `SP_GIA`, `SP_SOLUONG`, `SP_TONG`) VALUES
(1, 1, 'I9500', 'SamSung Galaxy S IV', 10000000, 1, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `gia_san_pham`
--

CREATE TABLE IF NOT EXISTS `gia_san_pham` (
  `ID_GIA` int(2) NOT NULL AUTO_INCREMENT,
  `GIA_TRI` int(11) NOT NULL,
  `SAPXEP` int(1) NOT NULL,
  PRIMARY KEY (`ID_GIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gia_san_pham`
--

INSERT INTO `gia_san_pham` (`ID_GIA`, `GIA_TRI`, `SAPXEP`) VALUES
(1, 10, 1),
(2, 8, 2),
(3, 6, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `he_dieu_hanh`
--

CREATE TABLE IF NOT EXISTS `he_dieu_hanh` (
  `ID_HDH` int(2) NOT NULL AUTO_INCREMENT,
  `HDH_TEN` varchar(50) NOT NULL,
  `SAPXEP` int(2) NOT NULL,
  `TRANGTHAI` int(1) NOT NULL,
  PRIMARY KEY (`ID_HDH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `he_dieu_hanh`
--

INSERT INTO `he_dieu_hanh` (`ID_HDH`, `HDH_TEN`, `SAPXEP`, `TRANGTHAI`) VALUES
(1, 'Android', 1, 1),
(2, 'iOS', 2, 1),
(3, 'Window Phone', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE IF NOT EXISTS `nhan_vien` (
  `NV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MA_QUYEN` int(11) NOT NULL,
  `NV_TEN` varchar(50) DEFAULT NULL,
  `NV_USER` varchar(50) DEFAULT NULL,
  `NV_PASS` varchar(50) DEFAULT NULL,
  `NV_EMAIL` varchar(50) DEFAULT NULL,
  `NV_NGAYTHEM` date DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`NV_ID`),
  KEY `FK_QUYEN` (`MA_QUYEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`NV_ID`, `MA_QUYEN`, `NV_TEN`, `NV_USER`, `NV_PASS`, `NV_EMAIL`, `NV_NGAYTHEM`, `TRANGTHAI`) VALUES
(2, 1, 'Le Cong Tinh', 'lecongtinh', 'congtinh', 'lecongtinh@gmail.com', '2013-08-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nha_san_xuat`
--

CREATE TABLE IF NOT EXISTS `nha_san_xuat` (
  `NSX_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NSX_TEN` varchar(50) DEFAULT NULL,
  `NSX_IMAGE` varchar(200) DEFAULT NULL,
  `NSX_SAPXEP` int(11) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`NSX_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`NSX_ID`, `NSX_TEN`, `NSX_IMAGE`, `NSX_SAPXEP`, `TRANGTHAI`) VALUES
(1, 'SamSung', 'Libraries/images/logo/sungsung.png', 1, 1),
(2, 'LG', 'Libraries/images/logo/LG.png', 2, 1),
(3, 'Nokia', 'Libraries/images/logo/nokia_logo.png', 3, 1),
(4, 'Apple', 'Libraries/images/logo/apple.png', 4, 1),
(5, 'HTC', 'Libraries/images/logo/htc.png', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhom_thanh_vien`
--

CREATE TABLE IF NOT EXISTS `nhom_thanh_vien` (
  `NHOM_TV_ID` int(11) NOT NULL,
  `NHOM_TV_TEN` varchar(50) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`NHOM_TV_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhom_thanh_vien`
--

INSERT INTO `nhom_thanh_vien` (`NHOM_TV_ID`, `NHOM_TV_TEN`, `TRANGTHAI`) VALUES
(1, 'KH', 1),
(2, 'VIP', 1),
(3, 'GOLD', 1),
(4, 'DIAMOND', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhom_thanh_vien_san_pham`
--

CREATE TABLE IF NOT EXISTS `nhom_thanh_vien_san_pham` (
  `NHOM_TV_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL,
  KEY `FK_NHOM_CHO_SAN_PHAM` (`NHOM_TV_ID`),
  KEY `FK_SAN_PHAM_CHO_NHOM_THANH_VIEN` (`SP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhom_thanh_vien_san_pham`
--

INSERT INTO `nhom_thanh_vien_san_pham` (`NHOM_TV_ID`, `SP_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phu_kien`
--

CREATE TABLE IF NOT EXISTS `phu_kien` (
  `PK_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PK_TEN` varchar(50) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phu_kien`
--

INSERT INTO `phu_kien` (`PK_ID`, `PK_TEN`, `TRANGTHAI`) VALUES
(1, 'Tai Nghe Sonic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phu_kien_san_pham`
--

CREATE TABLE IF NOT EXISTS `phu_kien_san_pham` (
  `SP_ID` int(11) NOT NULL,
  `PK_ID` int(11) NOT NULL,
  KEY `FK_PHU_KIEN` (`PK_ID`),
  KEY `FK_PHU_KIEN_SAN_PHAM` (`SP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phu_kien_san_pham`
--

INSERT INTO `phu_kien_san_pham` (`SP_ID`, `PK_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quyen_nhan_vien`
--

CREATE TABLE IF NOT EXISTS `quyen_nhan_vien` (
  `MA_QUYEN` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_QUYEN` varchar(50) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`MA_QUYEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quyen_nhan_vien`
--

INSERT INTO `quyen_nhan_vien` (`MA_QUYEN`, `TEN_QUYEN`, `TRANGTHAI`) VALUES
(1, 'Admin', 1),
(2, 'NhanVien', 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `SP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NSX_ID` int(11) NOT NULL,
  `ID_HDH` int(2) NOT NULL,
  `DM_SP_CON_ID` int(11) NOT NULL,
  `SP_TEN` varchar(100) DEFAULT NULL,
  `SP_MODEL` varchar(50) DEFAULT NULL,
  `SP_SOLUONG` int(11) DEFAULT NULL,
  `SP_IMAGE` varchar(200) DEFAULT NULL,
  `SP_GIA` int(11) DEFAULT NULL,
  `SP_NGAYTHEM` date DEFAULT NULL,
  `SP_NGAYSUA` date DEFAULT NULL,
  `SO_NGUOI_XEM` int(11) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`SP_ID`),
  KEY `FK_DANH_MUC_SAN_PHAM_CON` (`DM_SP_CON_ID`),
  KEY `FK_NHA_SAN_XUAT` (`NSX_ID`),
  KEY `ID_HDH` (`ID_HDH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`SP_ID`, `NSX_ID`, `ID_HDH`, `DM_SP_CON_ID`, `SP_TEN`, `SP_MODEL`, `SP_SOLUONG`, `SP_IMAGE`, `SP_GIA`, `SP_NGAYTHEM`, `SP_NGAYSUA`, `SO_NGUOI_XEM`, `TRANGTHAI`) VALUES
(1, 1, 1, 1, 'SamSung Galaxy S IV', 'I9500', 100, 'Libraries/images/sanpham/I9300.jpg', 10000000, '2013-08-01', '2013-08-01', 1, 1),
(2, 1, 1, 1, 'SamSung Galaxy S III', 'I9500', 100, 'Libraries/images/sanpham/I9300.jpg', 10000000, '2013-08-01', '2013-08-01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham_mo_ta`
--

CREATE TABLE IF NOT EXISTS `san_pham_mo_ta` (
  `SP_ID` int(11) NOT NULL,
  `SP_MOTA` text,
  `SP_TUKHOA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_pham_mo_ta`
--

INSERT INTO `san_pham_mo_ta` (`SP_ID`, `SP_MOTA`, `SP_TUKHOA`) VALUES
(1, 'SamSung Galaxy S IV', 'SamSung Galaxy S IV'),
(2, 'SamSung Galaxy SIII', 'SamSung Galaxy SIII');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_vien`
--

CREATE TABLE IF NOT EXISTS `thanh_vien` (
  `TV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NHOM_TV_ID` int(11) NOT NULL,
  `HOTEN` varchar(50) DEFAULT NULL,
  `AVATAR` varchar(100) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `MATKHAU` varchar(50) DEFAULT NULL,
  `DIACHI` varchar(200) DEFAULT NULL,
  `NGAYTHEM` date DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`TV_ID`),
  KEY `FK_NHOM_THANH_VIEN` (`NHOM_TV_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thanh_vien`
--

INSERT INTO `thanh_vien` (`TV_ID`, `NHOM_TV_ID`, `HOTEN`, `AVATAR`, `EMAIL`, `SDT`, `MATKHAU`, `DIACHI`, `NGAYTHEM`, `TRANGTHAI`) VALUES
(1, 1, 'Le Cong Tinh', '', 'lecongtinh@gmail.com', '1687682070', 'congtinh', 'Binh Tan - Vinh Long', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinh_thanh`
--

CREATE TABLE IF NOT EXISTS `tinh_thanh` (
  `TINH_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TINH_TEN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`TINH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tinh_thanh`
--

INSERT INTO `tinh_thanh` (`TINH_ID`, `TINH_TEN`) VALUES
(1, 'Ho Chi Minh'),
(2, 'Ha Noi');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `TT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DM_TT_ID` int(11) NOT NULL,
  `TT_TEN` varchar(50) DEFAULT NULL,
  `TT_IMAGE` varchar(200) DEFAULT NULL,
  `TT_NOIDUNG` text,
  `TT_TUKHOA` varchar(50) DEFAULT NULL,
  `TT_NGAYTHEM` date DEFAULT NULL,
  PRIMARY KEY (`TT_ID`),
  KEY `FK_DANH_MUC_TIN_TUC` (`DM_TT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`TT_ID`, `DM_TT_ID`, `TT_TEN`, `TT_IMAGE`, `TT_NOIDUNG`, `TT_TUKHOA`, `TT_NGAYTHEM`) VALUES
(1, 1, 'Lumia 1020 duoc phat hanh', 'Libraries/images/sanpham/1020.jpg', 'Lumia 1020 duoc phat hanh tren toan the gioi, no duoc trang bi camera khung kem theo nhung tinh nang cao cap nhat cua dong Lumia.', 'Lumia 1020 duoc phat hanh', '2013-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_dat_hang`
--

CREATE TABLE IF NOT EXISTS `trang_thai_dat_hang` (
  `TT_DH_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TT_DH_TEN` varchar(100) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  PRIMARY KEY (`TT_DH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trang_thai_dat_hang`
--

INSERT INTO `trang_thai_dat_hang` (`TT_DH_ID`, `TT_DH_TEN`, `TRANGTHAI`) VALUES
(1, 'Huy dat hang', 1),
(2, 'Da chuyen hang', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `FK_BINH_LUAN_THANH_VIEN` FOREIGN KEY (`TV_ID`) REFERENCES `thanh_vien` (`TV_ID`),
  ADD CONSTRAINT `FK_SAN_PHAM_BINH_LUAN` FOREIGN KEY (`SP_ID`) REFERENCES `san_pham` (`SP_ID`);

--
-- Constraints for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `chi_tiet_san_pham_ibfk_1` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`SP_ID`);

--
-- Constraints for table `chuc_nang_nguoi_dung`
--
ALTER TABLE `chuc_nang_nguoi_dung`
  ADD CONSTRAINT `FK_QUYEN_NGUOI_DUNG` FOREIGN KEY (`MA_QUYEN`) REFERENCES `quyen_nhan_vien` (`MA_QUYEN`);

--
-- Constraints for table `danh_muc_san_pham_con`
--
ALTER TABLE `danh_muc_san_pham_con`
  ADD CONSTRAINT `FK_DANH_MUC_SAN_PHAM_CHA` FOREIGN KEY (`DM_ID`) REFERENCES `danh_muc_san_pham` (`DM_ID`);

--
-- Constraints for table `dat_hang`
--
ALTER TABLE `dat_hang`
  ADD CONSTRAINT `FK_TRANG_THAI_DAT_HANG` FOREIGN KEY (`TT_DH_ID`) REFERENCES `trang_thai_dat_hang` (`TT_DH_ID`);

--
-- Constraints for table `dat_hang_san_pham`
--
ALTER TABLE `dat_hang_san_pham`
  ADD CONSTRAINT `FK_CHI_TIET_DAT_HANG` FOREIGN KEY (`DH_ID`) REFERENCES `dat_hang` (`DH_ID`);

--
-- Constraints for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `FK_QUYEN` FOREIGN KEY (`MA_QUYEN`) REFERENCES `quyen_nhan_vien` (`MA_QUYEN`);

--
-- Constraints for table `nhom_thanh_vien_san_pham`
--
ALTER TABLE `nhom_thanh_vien_san_pham`
  ADD CONSTRAINT `FK_NHOM_CHO_SAN_PHAM` FOREIGN KEY (`NHOM_TV_ID`) REFERENCES `nhom_thanh_vien` (`NHOM_TV_ID`),
  ADD CONSTRAINT `FK_SAN_PHAM_CHO_NHOM_THANH_VIEN` FOREIGN KEY (`SP_ID`) REFERENCES `san_pham` (`SP_ID`);

--
-- Constraints for table `phu_kien_san_pham`
--
ALTER TABLE `phu_kien_san_pham`
  ADD CONSTRAINT `FK_PHU_KIEN` FOREIGN KEY (`PK_ID`) REFERENCES `phu_kien` (`PK_ID`),
  ADD CONSTRAINT `FK_PHU_KIEN_SAN_PHAM` FOREIGN KEY (`SP_ID`) REFERENCES `san_pham` (`SP_ID`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `FK_DANH_MUC_SAN_PHAM_CON` FOREIGN KEY (`DM_SP_CON_ID`) REFERENCES `danh_muc_san_pham_con` (`DM_SP_CON_ID`),
  ADD CONSTRAINT `FK_NHA_SAN_XUAT` FOREIGN KEY (`NSX_ID`) REFERENCES `nha_san_xuat` (`NSX_ID`),
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ID_HDH`) REFERENCES `he_dieu_hanh` (`ID_HDH`);

--
-- Constraints for table `san_pham_mo_ta`
--
ALTER TABLE `san_pham_mo_ta`
  ADD CONSTRAINT `FK_CHI_TIET_SAN_PHAM` FOREIGN KEY (`SP_ID`) REFERENCES `san_pham` (`SP_ID`);

--
-- Constraints for table `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD CONSTRAINT `FK_NHOM_THANH_VIEN` FOREIGN KEY (`NHOM_TV_ID`) REFERENCES `nhom_thanh_vien` (`NHOM_TV_ID`);

--
-- Constraints for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `FK_DANH_MUC_TIN_TUC` FOREIGN KEY (`DM_TT_ID`) REFERENCES `danh_muc_tin_tuc` (`DM_TT_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
