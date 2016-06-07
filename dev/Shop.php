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

                $content = stripcslashes($row['description']);
               // $title_main = Encryption::decrypt($row['title']);
                 $title_main = $row['title'];
                $title_link = str_replace(" ", "-", $title_main);	
                $price = $row['price'];
                $id = $row['p_id'];

                echo '<div class="col-sm-4">
              <div class="product-list__item">
                <!-- Image -->  
                <div class="product-list__img">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Product/?id='.$id.'&title='.$title_link.'">
                    <img src="Shop_files/product_1.jpg" alt="Product Image">
                  </a>
                </div>
                <!-- Captions -->
                <div class="product-list__caption">
                  <h3 class="product-list__title">
                    <a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Product/?id='.$id.'&title='.$title_link.'">'.$title_main.'</a>
                  </h3>
                  <ul class="rating_stars">'.self::getRating($id).'
                    <li class="rating__comment">('.self::countReviews($id).' reviews)</li>
                  </ul>
                  <div class="product-list__price">€'.$price.'</div>
                </div>
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

  public function getByCategory($tag){
        $chars = array("<",">","-","'","\"",")","(");
        $tag = str_replace($chars, "", $tag);

            $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT * FROM `celtic_chocolates`.`products` WHERE tag LIKE '%$tag%'";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = stripcslashes($row['description']);
               // $title_main = Encryption::decrypt($row['title']);
                 $title_main = $row['title'];
                $title_link = str_replace(" ", "-", $title_main); 
                $price = $row['price'];
                $id = $row['p_id'];

                echo '<div class="col-sm-4">
              <div class="product-list__item">
                <!-- Image -->  
                <div class="product-list__img">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Product/?id='.$id.'&title='.$title_link.'">
                    <img src="Shop_files/product_1.jpg" alt="Product Image">
                  </a>
                </div>
                <!-- Captions -->
                <div class="product-list__caption">
                  <h3 class="product-list__title">
                    <a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Product/?id='.$id.'&title='.$title_link.'">'.$title_main.'</a>
                  </h3>
                  <ul class="rating_stars">'.self::getRating($id).'
                    <li class="rating__comment">(12 reviews)</li>
                  </ul>
                  <div class="product-list__price">€'.$price.'</div>
                </div>
              </div>
              </div>';

      }
    }else{
        echo "There are no products yet.";
    }

    }else{
        echo  "Something went wrong!";
    }

  }//end of getByCategory()



	public function getRating($id){

    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

      $sql ="SELECT `rating` FROM `celtic_chocolates`.`products` WHERE `p_id` = $id";
     if($result = mysqli_query($con,$sql)){  
        if (mysqli_num_rows($result) ==1) {
          while($row = mysqli_fetch_assoc($result)) {
              $i = intval($row['rating']);
              $star = "";
              for($j=0; $j<$i;$j++){
                $star.= '<li><i class="fa fa-star"></i></li>';
              }
              return $star;
            }
           }
           else{
            echo '<li><i class="fa fa-star"></i></li>';
           }
          }
        }//end of getRating()

  public function getCategories(){

           $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT tag,COUNT(*) as `count`
             FROM `celtic_chocolates`.`products`
             GROUP BY tag
             ORDER BY `count` DESC";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $num = $row['count'];
              $tag = $row['tag'];
              echo '<a href="http://'.$_SERVER["SERVER_NAME"].'/Shop/Categories/?category='.$tag.'" class="list-group-item">
              <span class="badge">'.$num.'</span> '.$tag.'
            </a>';

            }
          }
        }

        }//end of getCategories()

  public function getNew(){

    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *
             FROM `celtic_chocolates`.`products`
             ORDER BY uploaded DESC
             LIMIT 5";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $name = $row['title'];
              $id = $row['p_id'];
              echo '<a href="http://localhost/Shop/Product/?title='.str_replace(" ", "-", $name).'&id='.$id.'" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Shop_files/product_1.jpg" alt="...">
                  <div class="list-group-item__content">
                    '.$name.'
                    <ul class="rating_stars">
                      '.Self::getRating($id).'
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>';

            }
          }
        }

  }//end of getNew()

    public function getPopular(){

    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *
             FROM `celtic_chocolates`.`products`
             ORDER BY rating DESC
             LIMIT 5";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $name = $row['title'];
              $id = $row['p_id'];
              echo '<a href="http://localhost/Shop/Product/?title='.str_replace(" ", "-", $name).'&id='.$id.'" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Shop_files/product_1.jpg" alt="...">
                  <div class="list-group-item__content">
                    '.$name.'
                    <ul class="rating_stars">
                      '.Self::getRating($id).'
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>';

            }
          }
        }

  }//end of getPopular()

  public function countReviews($id){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

    $sql ="SELECT COUNT(*) as `num` FROM `celtic_chocolates`.`reviews` WHERE `p_id` = $id";
    if($result = mysqli_query($con,$sql)){     
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)){
              $num = $row['num'];
            }return $num;
          }else{
            return "0";
          }
        }

  }//end of countComments()


	}
?>