<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";

class Product{

  public function getRating($id){

    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

      $sql ="SELECT `rating` FROM `celtic_chocolates`.`review` WHERE `r_id` = $id";
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

public function getReviews($id){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

    $sql ="SELECT * FROM `celtic_chocolates`.`review` WHERE `p_id` = $id";
    if($result = mysqli_query($con,$sql)){     
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)){
              $id = $row['r_id'];
              $date = $row['uploaded'];
              $review = $row['review'];
              echo '<div class="comment">
            <div class="comment__author_img">
              <img src="Product_files/photo_1.jpg" alt="..." class="img-responsive">
            </div>
            <div class="comment__content">
              <div class="comment__author_name">John Doe</div>
              <time datetime="2015-01-30" class="comment__date">February 02, 2015</time>
              <ul class="rating_stars">
                '.Self::getRating($id).'
              </ul>
              <p>
                '.$review.'
              </p>
              <div class="btn-group pull-right" role="group" aria-label="comment__actions">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i> Remove</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-reply"></i> Answer</a>
              </div>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment -->';
      }
    }else{
        echo'There are no reviews here yet, be the first!';
        return true;
    }

    }
  }//end of getReviews()

  public function allowReview(){
    if(isset($_SESSION['logged_in'])or isset($_SESSION['admin'])){

      echo ' <div class="comment comment_new">
            <div class="comment__author_img">
              <img class="img-responsive" alt="..." src="Product_files/photo_4.jpg">
            </div>
            <div class="comment__content">
              <ul class="rating_stars rating-stars__new">
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
              <form>
                <div class="form-group">
                  <label for="comment-new__textarea" class="sr-only">Enter your review</label>
                  <textarea class="form-control" rows="2" id="comment-new__textarea" placeholder="Enter your review"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Review</button>
              </form>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment__new -->';
    }
    else{
      echo '<br/><strong>Login to Review: </strong><br/><a href="../../Login/?r='.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"><button  type="submit" class="btn btn-primary">Login</button></a>';
    }
  }//end of allowReview()

}//end of class



?>