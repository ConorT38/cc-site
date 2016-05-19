<?php
session_start();
$quant = $_POST['quantity'];
$id = $_POST['id'];
if(intval($id)<1){
	echo "Too low a number";
	return true;
}
if($_SESSION['cart'][$id] = array($id,$quant)){
	echo "Successfully changed!";
}
?>