-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.19-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk olshop
CREATE DATABASE IF NOT EXISTS `olshop` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `olshop`;

-- membuang struktur untuk table olshop.pembelian_detail
CREATE TABLE IF NOT EXISTS `pembelian_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPembelian` varchar(50) DEFAULT NULL,
  `produkId` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idPembelian` (`idPembelian`),
  KEY `produkId` (`produkId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel olshop.pembelian_detail: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pembelian_detail` DISABLE KEYS */;
INSERT INTO `pembelian_detail` (`id`, `idPembelian`, `produkId`, `qty`, `harga`) VALUES
	(1, 'PSN0000001', 'PRD0000002', 1, 50000),
	(2, 'PSN0000001', 'PRD0000003', 1, 20000),
	(3, 'PSN0000002', 'PRD0000005', 3, 20000),
	(4, 'PSN0000002', 'PRD0000004', 2, 50000);
/*!40000 ALTER TABLE `pembelian_detail` ENABLE KEYS */;

-- membuang struktur untuk table olshop.pembelian_header
CREATE TABLE IF NOT EXISTS `pembelian_header` (
  `idPembelian` char(50) NOT NULL,
  `TglBeli` date DEFAULT NULL,
  `idPengguna` char(50) DEFAULT NULL,
  `totalBayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel olshop.pembelian_header: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pembelian_header` DISABLE KEYS */;
INSERT INTO `pembelian_header` (`idPembelian`, `TglBeli`, `idPengguna`, `totalBayar`) VALUES
	('', '2018-11-21', 'P0002', 70000),
	('PSN0000001', '2018-11-21', 'P0002', 70000),
	('PSN0000002', '2018-11-21', 'P0002', 70000),
	('PSN0000003', '2018-11-21', 'P0002', 70000),
	('PSN0000004', '2018-11-21', 'P0002', 70000),
	('PSN0000005', '2018-11-21', 'P0002', 70000),
	('PSN0000006', '2018-11-21', 'P0002', 70000),
	('PSN0000007', '2018-11-21', 'P0002', 70000),
	('PSN0000008', '2018-11-21', 'P0002', 70000),
	('PSN0000009', '2018-11-21', 'P0002', 70000),
	('PSN0000010', '2018-11-21', 'P0002', 70000),
	('PSN0000011', '2018-11-21', 'P0002', 70000),
	('PSN0000012', '2018-11-21', 'P0002', 70000),
	('PSN0000013', '2018-11-21', 'P0002', 70000),
	('PSN0000014', '2018-11-21', 'P0002', 70000),
	('PSN0000015', '2018-11-21', 'P0002', 70000),
	('PSN0000016', '2018-11-21', 'P0002', 70000),
	('PSN0000017', '2018-11-21', 'P0002', 70000);
/*!40000 ALTER TABLE `pembelian_header` ENABLE KEYS */;

-- membuang struktur untuk table olshop.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `petugasid` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  PRIMARY KEY (`petugasid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel olshop.pengguna: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`petugasid`, `email`, `nama_lengkap`, `level`, `password`) VALUES
	('P0001', 'admin@mail.com', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
	('P0002', 'sata@mail.com', 'Sata', 'user', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

-- membuang struktur untuk table olshop.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `produkId` char(10) NOT NULL,
  `nama_produk` char(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `kategori` char(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`produkId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel olshop.produk: ~13 rows (lebih kurang)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`produkId`, `nama_produk`, `harga`, `qty`, `kategori`, `gambar`) VALUES
	('PRD0000001', 'Buku', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000002', 'Printer', 50000, 2, NULL, 'gambar/Tulips.jpg'),
	('PRD0000003', 'Spidol', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000004', 'Bolpoin', 50000, 2, NULL, 'gambar/Tulips.jpg'),
	('PRD0000005', 'Mouse', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000006', 'Keyboard', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000007', 'Sapu', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000008', 'Bantal', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000009', 'Monitor', 20000, 10, 'Elektronik', 'gambar/Penguins.jpg'),
	('PRD0000010', 'Hedset', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000011', 'Ram', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000012', 'Processor', 20000, 10, NULL, 'gambar/Penguins.jpg'),
	('PRD0000013', 'Monitor LG', 20000, 10, NULL, 'gambar/Penguins.jpg');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
