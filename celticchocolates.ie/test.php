<?php
session_start();
$_SESSION['cart'] = array();
$id =1;
for($i = 0; $i<20; $i++){
	$id = $i;
	$quant = $i+2;
	$name = "Chocolate";
$_SESSION['cart'][$id] = array($name,$quant);
$_SESSION['cart_quantity'][$id] = $quant;

}
foreach($_SESSION['cart'] as $cart){
	echo $cart[0]." ".$cart[1]."<br/>";

}
echo count($_SESSION['cart']);
?>