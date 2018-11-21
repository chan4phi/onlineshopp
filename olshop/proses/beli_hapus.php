<?php 
session_start();
$delProduk = $_GET['id'];
$arProduk  = $_SESSION['pesanan'];


foreach($arProduk as $key=>$row)
	if($row==$delProduk)
		unset($_SESSION['pesanan'][$key]);


header("location:../index.php?mod=keranjang");