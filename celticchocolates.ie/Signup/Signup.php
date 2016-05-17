<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

$E_email = Encryption::encrypt($email);
$hpass = create_hash($password);
$E_name = Encryption::encrypt($name);

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql1 ="INSERT INTO `users`(name,email,password) VALUES('$E_name','$E_email','$hpass');";
    if($result = mysqli_query($con,$sql1)){
        echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}else{
	return false;
}
?>