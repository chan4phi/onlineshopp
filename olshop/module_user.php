<?php 

if(isset($_GET['mod'])){
	$page = $_GET['mod'];
	
	switch($page) {
		case "produk":
			include "page/produk.php";
		break;
		
		case "keranjang":
			include "page/keranjang.php";
		break;
		
	}
}else{
	include "page/produk.php";
}