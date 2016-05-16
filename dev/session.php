<?php
session_start();

function getCartAmount(){
	if(isset($_SESSION['cart'])){
		return count($_SESSION['cart']);
	}
	else{
		return "0";
	}
}

?>