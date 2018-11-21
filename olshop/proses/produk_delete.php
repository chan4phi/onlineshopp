<?php

include"koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM produk WHERE produkId ='$id'";
mysql_query($query);

header("location:../index.php?mod=produk_list");