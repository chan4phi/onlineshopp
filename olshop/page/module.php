<?php

if(isset($_GET['mod'])) {
	$page = $_GET['mod'];
	
	switch($page){
		case "produk_form":
			include "page/produk_form.php";
		break;
	}
}else{
	echo "module tidak ditemukan";
}
?>