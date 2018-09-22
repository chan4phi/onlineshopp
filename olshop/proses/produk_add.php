<?php
include "koneksi.php";

$produkID		=	"PO009";
$nama_produk	=	$_POST['nama_produk'];
$harga			=	$_POST['harga'];
$qty			=	$_POST['qty'];
$gambar			=	"produksad.jpg";

$query = "INSERT INTO `produk`
	(`produkID`, `nama_produk`, `harga`, `qty`,  `gambar`) VALUES ('$produkID', '$nama_produk', '$harga', '$qty', '$gambar')";

	echo $query;
mysql_query($query);
	

?>