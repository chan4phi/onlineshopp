<?php

include"koneksi.php";
$id		= $_GET['id'];
$query	= "delete from produk wehere produkID ='$id'";
echo $query;
mysql_query($query);

header("location:../index.php?mod=produk_list");
?>