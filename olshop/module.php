<?php 

if(isset($_GET['mod'])){
	$page = $_GET['mod'];
	
	switch($page) {
		case "produk_form":
			include "page/formproduk.php";
		break;
		
		case "produk_list":
			include "page/listproduk.php";
		break;
		
		case "pesanan_list";
			include "page/listpesanan.php";
		break;
	}
}else{
	echo "Module Tidak Ditemukan";
}