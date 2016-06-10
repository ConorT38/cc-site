<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

class Search{

	public function getAllBySearch($search){
    $chars = array("<",">","-","'","\"",")","(");
        $search = str_replace($chars, "", $search);

		 $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%H:%i') as `time` FROM `celtic_chocolates`.`products` WHERE title LIKE '%$search%'";
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
                    <img src="'.$row["image"].'" alt="Product Image">
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


	}//end of getAllBySearch()

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
 

public function countReviews($id){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

    $sql ="SELECT COUNT(*) as `num` FROM `celtic_chocolates`.`review` WHERE `p_id` = $id";
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