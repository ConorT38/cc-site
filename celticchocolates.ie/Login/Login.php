<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
$email = $_POST['email'];
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
if(validate_password($_POST['password'],$password2)){
	session_start();
	$_SESSION['admin'] = true;
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['id'] = $row['a_id'];

	echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Wrong Password</strong></div>";
    }
  }
}
else{
//else check if user
if($res = mysqli_query($con,$sql)){
	if (mysqli_num_rows($res) > 0) {

while($row = mysqli_fetch_assoc($res)){
	$password2 = $row['password'];
if(validate_password($_POST['password'],$password2)){
	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['id'] = $row['u_id'];
	echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Wrong Password</strong></div>";
    }
  }
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User doesn't exist!</strong></div>";
}
}
else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User doesn't exist!</strong></div>";
}
}
}else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User doesn't exist!</strong></div>";
}
?>