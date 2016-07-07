<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
session_start();
$name = Encryption::encrypt($_POST['name']);
$email = Encryption::encrypt($_POST['email']);
$id = $_SESSION['id'];
if(isset($_POST['password']))$password = create_hash($_POST['password']);


$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

if(isset($_POST['password'])) 
	$sql = "UPDATE admin SET email = '$email' AND password='$password' AND name='$name' WHERE a_id=$id";
else
	$sql = "UPDATE admin SET email = '$email' AND name='$name' WHERE a_id=$id";
if($result=mysqli_query($con,$sql)){
	echo "Success";
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
}else{
	echo "Something went wrong.";
}


?>