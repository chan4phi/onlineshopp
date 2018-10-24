<?php
include "koneksi.php";

$produkID		=	getAutoId('ProdukID', 'produk', 'PRD');
$nama_produk	=	$_POST['nama_produk'];
$harga			=	$_POST['harga'];
$qty			=	$_POST['qty'];

$namaFile		=	$_FILES['gambar']['name'];
$namaSementara	=	$_FILES['gambar']['tmp_name'];
$dirUpload		=	"../gambar/";

$terupload		=	move_uploaded_file($namaSementara,$dirUpload.$namaFile);

$gambar			=	"gambar/".$namaFile;

$query = "INSERT INTO `produk`
	(`ProdukID`, `NamaProduk`, `Harga`, `Qty`, `Gambar`) VALUES ('$produkID', '$nama_produk', '$harga', '$qty', '$gambar')";

	
	mysql_query($query);
	
header("location:../index.php?mod=produk_form")

?>