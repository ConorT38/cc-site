<?php
session_start();
if(isset($_SESSION['admin'])){
	header("Location: http://".$_SERVER['HTTP_HOST']."/Admin/");
	die();
}
if(isset($_SESSION['redirect'])){
	header("Location: http://".$_SESSION['redirect']."");
	unset($_SESSION['redirect']);
}

function getCartAmount(){
	if(isset($_SESSION['cart'])){
		return count($_SESSION['cart']);
	}
	else{
		return "0";
	}
}

?>