<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
          
class Blog{
	
	public function getAllBlogs(){

		  $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time` FROM `celtic_chocolates`.`blog`";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = strip_tags(substr(stripcslashes($row['content']),0,200));
                $title_main = Encryption::decrypt($row['title']);
                $title_link = str_replace(" ", "-", $title_main);	
                $id = $row['b_id'];
                $tag = $row['tag'];
                $time = $row['time'];

                echo '<div class="blog__item">
              <img src="img/general_1.jpg" alt="..." class="img-responsive blog__img hidden-xs">
              <div class="blog__content">
                <h3 class="blog__title">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Post?id='.$id.'&title='.$title_link.'">'.$title_main.'</a>
                </h3>
                <ul class="blog__info">
                  <li><time datetime="2015-01-30">'.$time.'</time></li>
                  <li><a href="#">'.$tag.'</a></li>
                  <li><a href="#"><i class="fa fa-comments-o"></i> 2</a></li>
                </ul>
                <div class="blog__body">
                '.$content.'
                </div>
              </div>
            </div> <!-- / .blog__item -->';

			}
		}else{
		    echo "There are no blogs yet.";
		}

		}else{
		    echo  "Something went wrong!";
		}

	}//end of getAllBlogs()

  public function getRating($id){

    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

      $sql ="SELECT `rating` FROM `celtic_chocolates`.`comments` WHERE `c_id` = $id";
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
             FROM `celtic_chocolates`.`blog`
             GROUP BY tag
             ORDER BY `count` DESC";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $num = $row['count'];
              $tag = $row['tag'];
              echo '<a href="#" class="list-group-item">
              <span class="badge">'.$num.'</span> '.$tag.'
            </a>';

            }
          }else{
            echo "No blogs yet";
            return true;
          }
        }

        }//end of getCategories()

	public function getBlogById($id){

	}//end of getBlogById()

  public function getNew(){

    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time`
             FROM `celtic_chocolates`.`blog`
             ORDER BY uploaded DESC
             LIMIT 5";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
            $name = Encryption::decrypt($row['title']);
              $id = $row['b_id'];
              $time = $row['time'];

                echo '<a href="http://localhost/Shop/Product/?title='.str_replace(" ", "-", $name).'&id='.$id.'" class="list-group-item">
                  '.$name.'
                  <time datetime="2015-01-01">'.$time.'</time>
                </a>';

            }
          }else{
            echo "No blogs yet";
            return true;
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

             $sql ="SELECT *, DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time`
             FROM `celtic_chocolates`.`blog`
             ORDER BY views DESC
             LIMIT 5";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $name = Encryption::decrypt($row['title']);
              $id = $row['b_id'];
              $time = $row['time'];

                echo '<a href="http://localhost/Shop/Product/?title='.str_replace(" ", "-", $name).'&id='.$id.'" class="list-group-item">
                  '.$name.'
                  <time datetime="2015-01-01">'.$time.'</time>
                </a>';

            }
          }else{
            echo "No blogs yet";
            return true;
          }
        }

  }//end of getPopular()

  public function getComments($id){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

    $sql ="SELECT * FROM `celtic_chocolates`.`comments` WHERE `c_id` = $id";
    if($result = mysqli_query($con,$sql)){     
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)){
              $id = $row['c_id'];
              $date = $row['uploaded'];
              $review = $row['comment'];
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
        echo'There are no comments here yet, be the first!';
        return true;
    }

    }
  }//end of getReviews()

  public function allowComment(){
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
      echo '<br/><strong>Login to Comments: </strong><br/><a href="../../Login/?r='.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'"><button  type="submit" class="btn btn-primary">Login</button></a>';
    }
  }//end of allowReview()
}



?>