<?php

include "koneksi.php";
$id		= $_GET['id'];
$query	= "delete from produk where ProdukID ='$id'";

mysql_query($query);

header("location:../index.php?mod=produk_list");
?>