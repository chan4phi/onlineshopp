<?php
session_start();

$idProduk = (isset($_GET['id']) && $_GET['id'] !='')?$_GET['id']:'';
$pesanan  = (isset($_SESSION['pesanan']) && count($_SESSION['pesanan'])>0)?$_SESSION['pesanan']:array();

if(!in_array($idProduk,$pesanan))
	$_SESSION['pesanan'][] = $idProduk;

header("location:../");