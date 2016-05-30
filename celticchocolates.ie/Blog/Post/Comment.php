<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

function clean($string){
	$string  = str_replace(">","&gt;",$string);
	$string  = str_replace("<","&lt;",$string);
	return $string;
}
$comment = Encryption::encrypt(clean($_POST['comment']));
$rating = $_POST['rating'];
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$id= $_POST['id'];
$uid = $_SESSION['id'];

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="INSERT INTO comments(name,email,comment,rating,b_id,u_id) VALUES('$name','$email','$comment',$rating,$id,$uid)";
                  if($result = mysqli_query($con,$sql)){
        			echo "Successfully posted";
        			return true;
                  }else{
                  echo "Something went wrong";
                  return false;
                  }


?>