<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              session_start();
              $id = $_SESSION['id'];
              $price = floatval($_SESSION['conf-total']);
              $quantity = $_POST['quantity'];
      $sql ="INSERT INTO `orders` VALUES($id,'".addslashes(json_encode($_SESSION['cart']))."',$price,$quantity,'example','example','example')";
     if($result = mysqli_query($con,$sql)){  
     	echo "Success. Testing.";
           }else{
            echo 'something went wrong, possibly the query failed...';
           }
          



?>