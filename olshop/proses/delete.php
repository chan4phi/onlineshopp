<?php
include"koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM produk WHERE IDProduk ='$id'";
		mysql_query($query);
		
		header("location:../index.php?mod=list");