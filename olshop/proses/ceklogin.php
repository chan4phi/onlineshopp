<?php
session_start();
$username 	= "admin@mail.com";
$password	= "admin";
$us			= (isset($_POST['username']))?$_POST['username']:'';
$ps			= (isset($_POST['password']))?$_POST['password']:'';
$messages	= '';
$page		= 'login.php';
do{
	
	if($us==$username && $ps==$password){
		$_SESSION['username'] 	= $us;
		$_SESSION['nama'] 		= 'Admin';
		$page 					= 'index.php';
	}
	
}while(FALSE);
header("location:../".$page.$messages);
?>