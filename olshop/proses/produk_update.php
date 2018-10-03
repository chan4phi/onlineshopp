<?php
include"koneksi,php";

$id		= $_POST['id'];
$nama	= $_POST['nama_produk'];
$harga	= $_POST['harga'];
$qty	= $_POST['qty'];

$query	= "update produk set Nama_Produk='$nama', Harga='harga', Qty='$qty' where produkID='$id'";

mysql_query($query);

header("location:../index.php?mod=produk_list");
?>