<?php
session_start();
//$cart = $_SESSION['cart'];
/*print_r($_SESSION['cart']);
print_r($_SESSION['cart']['order'][0]["p_id"]);
$_SESSION['cart']['order'][0] = array("p_id"=>"2","quantity"=>"4");
print_r($_SESSION['cart']['order'][0]["p_id"]);
echo "<br/>";
foreach($cart as $c){
echo json_encode($c)."<br/>";
}
echo "<br/>".json_encode($cart)."<br/><br/>";
echo "This is the final object in array: ";
$last = sizeof($_SESSION['cart']['order']);
echo $last;

for($i = 0; $i <$last; ++$i){
	if($_SESSION['cart']['order'][$i]["p_id"] = "1"){
		echo "waheeyyy";
	}else{
		echo "shiiii";
	}
}*/

$carte = $_SESSION['cart'];
foreach($carte as $cart){
echo "p_id: ".$cart[0]."<br/>quantity: ".$cart[1]."<br/>";	
}
?>