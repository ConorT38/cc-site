<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
class Shop{
	
	public function getAllProducts(){

		$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%H:%i') as `time` FROM `celtic_chocolates`.`products`";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = stripcslashes($row['content']);
                $title_main = Encryption::decrypt($row['title']);
                $title_link = str_replace(" ", "-", $title_main);	
                $id = $row['p_id'];

                echo '  <div class="product-list__img">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Product/?id='.$id.'&title='..$title_link.'">
                    <img src="Shop_files/product_1.jpg" alt="Product Image">
                  </a>
                </div>
                <!-- Captions -->
                <div class="product-list__caption">
                  <h3 class="product-list__title">
                    <a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Product/?id='.$id.'&title='..$title_link.'">'.$title_main.'</a>
                  </h3>
                  <ul class="rating_stars">'.$this->getRating($id).'
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li class="rating__comment">(12 reviews)</li>
                  </ul>
                  <div class="product-list__price">€'.$price.'</div>
                </div>
              </div>';

			}
		}else{
		    echo "There are no products yet.";
		}

		}else{
		    echo  "Something went wrong!";
		}

	}//end of getAllProducts()

	public function getRating($id){


	}//end of getRating()
}
?>