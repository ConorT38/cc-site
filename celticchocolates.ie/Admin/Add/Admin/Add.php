<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/PassHash.php";

$name = Encryption::encrypt($_POST['name']);
$email = Encryption::encrypt($_POST['email']);
$password = create_hash($_POST['password']); 
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

           $sql ="SELECT email FROM admin WHERE email='$email'";
                  if($result = mysqli_query($con,$sql)){
        		    if (mysqli_num_rows($result) >0) {
        			echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>User Already Exists!</strong></div>";
						return false;
        			}
    			}

//Signup confirm
  $sql1 ="INSERT INTO `admin`(name,email,password) VALUES('$name','$email','$password');";
    if($result = mysqli_query($con,$sql1)){
        echo "<div class='alert alert-success fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong></div>";
}else{
	echo "<div class='alert alert-danger fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Something went wrong...</strong></div>";
	return false;
}

?>