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

    $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time` FROM `celtic_chocolates`.`review` WHERE `p_id` = $id";
    if($result = mysqli_query($con,$sql)){     
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)){
              $id = $row['r_id'];
              $date = $row['time'];
              $review = Encryption::decrypt($row['review']);
              $name = Encryption::decrypt($row['name']);
              echo '<div class="comment">
            <div class="comment__author_img">
              <img src="Product_files/avatar.jpg" alt="..." class="img-responsive">
            </div>
            <div class="comment__content">
              <div class="comment__author_name">'.$name.'</div>
              <time datetime="2015-01-30" class="comment__date">'.$date.'</time>
              <ul class="rating_stars">
                '.Self::getRating($id).'
              </ul>
              <p>
                '.$review.'
              </p>
              '; 
              if(isset($_SESSION["id"]) and $_SESSION["id"] == $row["u_id"]){ echo'<div class="btn-group pull-right" role="group" aria-label="comment__actions">
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-times remove"></i> Remove</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit edit"></i> Edit</a>
              </div>';
            }
            echo'<hr/>
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
              <img class="img-responsive" alt="..." src="Product_files/avatar.jpg">
            </div>
            <div class="comment__content">
              <ul class="rating_stars rating-stars__new">
                <li id="1"><i class="fa fa-star-o"></i></li>
                <li id="2"><i class="fa fa-star-o"></i></li>
                <li id="3"><i class="fa fa-star-o"></i></li>
                <li id="4"><i class="fa fa-star-o"></i></li>
                <li id="5"><i class="fa fa-star-o"></i></li>
              </ul>
              <form>
                <div class="form-group">
                  <label for="comment-new__textarea" class="sr-only">Enter your review</label>
                  <textarea class="form-control" rows="2" id="review" placeholder="Enter your review"></textarea>
                </div>
                <button type="submit" class="btn btn-primary submit">Send Review</button>
              </form>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment__new -->';
    }
    else{
      echo '<br/><strong>Login to Review: </strong><br/><a href="../../Login/?r='.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"><button  type="submit" class="btn btn-primary">Login</button></a>';
    }
  }//end of allowReview()

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

}//end of class



?>