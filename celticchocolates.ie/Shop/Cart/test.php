<?php
session_start();
$cart = $_SESSION['cart'];
//print_r($_SESSION['cart']);
print_r($_SESSION['cart']['order'][0]["p_id"]);
$_SESSION['cart']['order'][0] = array("p_id"=>1,"quantity"=>3);
echo "<br/>";
foreach($cart as $c){
echo json_encode($c)."<br/>";
}
echo "<br/>".json_encode($cart);
?>