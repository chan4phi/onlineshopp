<?php
session_start(); 
include("koneksi.php");
$total = 0;
if(isset($_SESSION['username'])){
	
	$idBeli = getAutoId('idPembelian','pembelian_header', 'PSN');

	//input pembelian detail
	$query_detail ="INSERT INTO pembelian_detail (`idPembelian`, `produkId`, `qty`, `harga`) VALUES ";
	
	foreach($_POST['idproduk'] as $key=>$row){
		$id_produk = $_POST['idproduk'][$key];
		$qty = $_POST['qty'][$key];
		$harga = $_POST['harga'][$key];
		$total += $qty * $harga;
		$query_detail .="('$idBeli', '$id_produk', $qty, $harga),";
	}
	
	$query = "INSERT INTO `pembelian_header` (`idPembelian`, `TglBeli`, `idPengguna`, `totalBayar`) 
			VALUES ('$idBeli', '".date('Y-m-d')."', '".$_SESSION['id']."', '$total');";
	mysql_query($query);
	
	
	$fx_query = substr($query_detail,0,-1);
	mysql_query($fx_query);
	
	unset($_SESSION['pesanan']);
	header("location:../index.php");
}else
	header("location:../login.php");