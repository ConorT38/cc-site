<?php
session_start();
// get the product id
if(isset($_POST['id'])){
$id = $_POST['id']; 
}
else{
	echo "Something is not right";
}
// remove the item from the array
unset($_SESSION['cart'][$id]);
	echo "Removed item";
 
?>