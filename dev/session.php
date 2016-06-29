<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
session_start();
if(isset($_SESSION['admin'])){
	header("Location: http://".$_SERVER['HTTP_HOST']."/Admin/");
	die();
}
$remember = false;
if ((isset($_COOKIE['email'])) && (isset($_COOKIE['x11'])))
{
	$email = Encryption::decrypt($_COOKIE['email']);
	$sec = Encryption::decrypt($_COOKIE['x11']);
	$username= Encryption::encrypt($email);
$sql= "SELECT * FROM users WHERE email='$username'";
$sqladmin = "SELECT * FROM admin WHERE email = '$username'";
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Check if admin
if($res = mysqli_query($con,$sqladmin)){
	if (mysqli_num_rows($res) > 0) {

while($row = mysqli_fetch_assoc($res)){
	$password2 = $row['password'];
if(validate_password($sec,$password2)){
	$_SESSION['admin'] = "true";
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['id'] = $row['a_id'];
header("Location: http://".$_SERVER['HTTP_HOST']."/Admin/");;
}
  }
}
else{
//else check if user
if($res = mysqli_query($con,$sql)){
	if (mysqli_num_rows($res) > 0) {

while($row = mysqli_fetch_assoc($res)){
	$password2 = $row['password'];
if(validate_password($sec,$password2)){
	$_SESSION['logged_in'] = true;
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['id'] = $row['u_id'];
	$_SESSION['country'] = $row['country'];
	$_SESSION['city'] = $row['city'];
	$_SESSION['address'] = $row['address'];
	$_SESSION['phone'] = $row['phone'];

}
  }
}

}
}
}
}
if(isset($_SESSION['redirect'])){
	header("Location: http://".urldecode($_SESSION['redirect'])."");
	unset($_SESSION['redirect']);
}

function getCartAmount(){
	if(isset($_SESSION['cart'])){
		return count($_SESSION['cart']);
	}
	else{
		return "0";
	}
}

?>