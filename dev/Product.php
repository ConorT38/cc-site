<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

class Product{

	public function get($id,$field){
		$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT `$field` FROM `celtic_chocolates`.`products` WHERE `p_id` = $id";
if($result = mysqli_query($con,$sql)){     
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)){
            	return $row[''.$field.''];
			}
		}else{
		    die('This is not a product');
		}

		}
	}//end of get()

	function containsDecimal( $value ) {
    if ( strpos( $value, "." ) !== false ) {
        return true;
    }
    return false;
}//end of containsDecimal()

}//end of class



?>