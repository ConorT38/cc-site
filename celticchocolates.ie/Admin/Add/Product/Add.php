<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

$title = $_POST['title'];
$description = $_POST['description'];
$price = floatval($_POST['price']);
$img = $_POST['image']; 
$tag = $_POST['tag'];
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

             $sql ="INSERT INTO `products` ( `title`,`description`,`tag`,`price`,`image`) VALUES ('$title','$description','$tag',$price,'$img')";
			    if(mysqli_query($con,$sql)){
			    	echo "Successfully uploaded";
				}	    	
			else{
				return false;
			}

?>