<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = Encryption::encrypt($_POST['address']);
$city = Encryption::encrypt($_POST['city']);
$country = Encryption::encrypt($_POST['country']);
$phone = Encryption::encrypt($_POST['phone']);

$E_email = Encryption::encrypt($email);
$hpass = create_hash($password);
$E_name = Encryption::encrypt($name);

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql ="SELECT email FROM users WHERE email='$E_email'";
                  if($result = mysqli_query($con,$sql)){
        		    if (mysqli_num_rows($result) >0) {
        			echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User Already Exists!</strong></div>";
						return false;
        			}
    			}




//Signup confirm
  $sql1 ="INSERT INTO `users`(name,email,password,address,city,country,phone) VALUES('$E_name','$E_email','$hpass','$address','$city','$country','$phone');";
    if($result = mysqli_query($con,$sql1)){
        echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Something went wrong...</strong></div>";
	return false;
}
?>