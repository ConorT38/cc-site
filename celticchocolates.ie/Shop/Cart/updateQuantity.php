<?php
session_start();
$quant = $_POST['quantity'];
$id = $_POST['id'];
if(intval($quant)<1){
	echo "Too low a number";
	return true;
}

if($_SESSION['cart'][$id]= array($id,$quant)){
	echo "Successfully changed!";
}

/* Will try integrate this later.
$last = sizeof($_SESSION['cart']['order']);
for($i = 0; $i <$last; ++$i){
	if($_SESSION['cart']['order'][$i]["p_id"] = "$id"){
		$_SESSION['cart']['order'][$i] = array("p_id"=>$id,"quantity"=>$quant);
		echo "Sucessfully updated";
		return true;
	}else{
		echo "Something went wrong...";
	}
}*/
?>