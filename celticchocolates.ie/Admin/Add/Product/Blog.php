<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

$title=$_POST['title'];
$content = $_POST['content'];
$title = Encryption::encrypt($title);
$tag = $_POST['tag'];
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

             $sql ="INSERT INTO `blog` ( `title`,`content`,`tag`) VALUES ('$title','$content','$tag')";
			    if(mysqli_query($con,$sql)){
			    	echo "Successfully uploaded";
				}	    	
			else{
				return false;
			}


?>


