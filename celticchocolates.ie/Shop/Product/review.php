<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

function clean($string){
	$string  = str_replace(">","&gt;",$string);
	$string  = str_replace("<","&lt;",$string);
	return $string;
}
$comment = Encryption::encrypt(clean($_POST['review']));
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

             $sql ="INSERT INTO review(u_id,p_id,review,rating,name) VALUES('$uid','$id','$comment',$rating,'$name')";
                  if($result = mysqli_query($con,$sql)){
        			echo "Successfully posted";
              //select all from reviews and update the products review rating.
                   $sql ="SELECT SUM(rating) as `sum1`,COUNT(*) AS 'sum2' FROM review WHERE p_id=$id";
                  if($result = mysqli_query($con,$sql)){
                    if (mysqli_num_rows($result) >0) {
                      $rating = 0;
            while($row = mysqli_fetch_assoc($result)){
                $rating+= intval($row['sum1']);
                $sum1 = $row['sum2'];
            }
            $sum = intval($rating/intval($sum1));
            $sql="UPDATE products set rating=$sum where p_id=$id";
            if($result = mysqli_query($con,$sql)){
              return true;
          }
        }
      }
                  }else{
                  echo "Something went wrong";
                  return false;
                  }


?>