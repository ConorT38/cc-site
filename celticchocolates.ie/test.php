<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";

$email = "Joe@celticchocolates.eu";
$password = "summ3rh1ll";
$name = "Joe Callery";

$E_email = Encryption::encrypt($email);
$hpass = create_hash($password);
$E_name = Encryption::encrypt($name);
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Signup confirm
  $sql1 ="INSERT INTO `admin`(name,email,password) VALUES('$E_name','$E_email','$hpass');";
    if($result = mysqli_query($con,$sql1)){
        echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Something went wrong...</strong></div>";
	return false;
}

?>