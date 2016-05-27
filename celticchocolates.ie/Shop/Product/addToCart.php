<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

$id =$_POST['id'];
$quant = $_POST['quantity'];

// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $_SESSION['cart'])){
    // redirect to product list and tell the user it was added to cart
   echo "Item already in basket";
   return true;
}
if($_SESSION['cart'][$id] = array($id,$quant)){
		echo "Successfully added!";
}

/* Will try add later.
if(array_push($_SESSION['cart']["order"],array("p_id"=>$id,"quantity"=>$quant))){
	echo "Successfully added!";
}
*/
?>