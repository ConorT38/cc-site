<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

$id = intval($_POST['id']);


$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
$sql = "DELETE FROM users WHERE u_id=$id";
if($result=mysqli_query($con,$sql)){
	echo "Successfully deleted.";
}else{
	echo "Something went wrong.";
}

?>