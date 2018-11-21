-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.21-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk dbbbb
CREATE DATABASE IF NOT EXISTS `dbbbb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbbbb`;

-- membuang struktur untuk table dbbbb.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `petugasid` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `lvl` enum('user','admin') DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  PRIMARY KEY (`petugasid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel dbbbb.pengguna: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`petugasid`, `email`, `nama_lengkap`, `lvl`, `password`) VALUES
	('1', 'admin@gmail.com', 'eng', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
	('2', 'gg@gmail.com', 'engkong', 'user', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

-- membuang struktur untuk table dbbbb.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `IDProduk` char(50) NOT NULL,
  `NamaProduk` varchar(50) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  `kategori` enum('fashion','food and drink','game') DEFAULT NULL,
  PRIMARY KEY (`IDProduk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel dbbbb.produk: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`IDProduk`, `NamaProduk`, `Harga`, `Qty`, `Gambar`, `kategori`) VALUES
	('PRD0000001', 'forgetin', 68888, 2, 'gambar/image002.jpg', 'fashion');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
