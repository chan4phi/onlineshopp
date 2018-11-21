<?php
include"koneksi.php";

$id 	= $_POST['id'];
$nama 	= $_POST['nama_produk'];
$harga 	= $_POST['harga'];
$kategori 	= $_POST['kategori'];
$qty 	= $_POST['qty'];

$query = "UPDATE produk SET
		nama_produk='$nama',
		kategori='$kategori',
		harga=$harga,
		qty=$qty
		WHERE produkId='$id'";
mysql_query($query);

header("location:../index.php?mod=produk_list");