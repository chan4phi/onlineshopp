<?php
include "koneksi.php";

$produkID		=	getAutoId('produkID', 'produk', 'PRD');
$nama_produk	=	$_POST['nama_produk'];
$harga			=	$_POST['harga'];
$qty			=	$_POST['qty'];

$namaFile		=	$_Files['gambar']['name'];
$namaSementara	=	$_Files['gambar']['tmp_name'];
$dirUpload		=	"../gambar/";

$terupload		=	move_uploaded_file($namaSementara, $dirUpload.$namaFile);

$gambar			=	"gambar/".$namaFile;

$query = "INSERT INTO `produk`
	(`produkID`, `NamaProduk`, `Harga`, `Qty`, `Gambar`) VALUES ('$produkID', '$nama_produk', '$harga', '$qty', '$gambar')";

	
	mysql_query($query);
	


?>