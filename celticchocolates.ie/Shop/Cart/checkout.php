<?php
session_start();
$carte = $_SESSION['cart'];
$_SESSION['cart-checkout']["order"] = array();
foreach($carte as $cart){
array_push($_SESSION['cart-checkout']["order"],array("p_id"=>$cart[0],"quantity"=>$cart[1]));
}

require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              $id = $_SESSION['id'];
              $price = floatval($_POST['total']);
              //$price = 21.2;
             // $quantity = 21;
              $quantity = $_POST['quantity'];
      $sql ="INSERT INTO `orders`(u_id,p_id,price,quantity,address,city,country) VALUES($id,'".json_encode($_SESSION['cart-checkout'])."',$price,$quantity,'example','example','example')";
     if($result = mysqli_query($con,$sql)){  
     	echo "Success. Testing.";
           }else{
            echo 'something went wrong, possibly the query failed...';
           }
          



?>