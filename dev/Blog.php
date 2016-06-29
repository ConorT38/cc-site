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
                $match = array();
                $img = preg_match("/data:image(.*)\"/", $row['content'],$match);
                if(!isset($match[0])){
                  $img = "Blog_files/general_1.jpg";
                }else{
                  $img = $match[0];
                }

                echo '<div class="blog__item">
              <img style="width:150px;height:100px;"src="'.$img.'" alt="..." class="img-responsive blog__img hidden-xs">
              <div class="blog__content">
                <h3 class="blog__title">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Post?id='.$id.'&title='.$title_link.'">'.$title_main.'</a>
                </h3>
                <ul class="blog__info">
                  <li><time datetime="2015-01-30">'.$time.'</time></li>
                  <li><a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Tag/?tag='.$tag.'"">'.$tag.'</a></li>
                  <li><a href="#"><i class="fa fa-comments-o"></i> '.Self::countComments($id).'</a></li>
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
              echo '<a href="http://'.$_SERVER["HTTP_HOST"].'/Blog/Tag/?tag='.$tag.'" class="list-group-item">
              <span class="badge">'.$num.'</span> '.$tag.'
            </a>';

            }
          }else{
            echo "No blogs yet";
            return true;
          }
        }

        }//end of getCategories()

	public function getAllBlogsByTag($s){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time` FROM `celtic_chocolates`.`blog` WHERE tag = '$s'";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = strip_tags(substr(stripcslashes($row['content']),0,200));
                $title_main = Encryption::decrypt($row['title']);
                $title_link = str_replace(" ", "-", $title_main); 
                $id = $row['b_id'];
                $tag = $row['tag'];
                $time = $row['time'];
                $match = array();
                $img = preg_match("/data:image(.*)\"/", $row['content'],$match);
                if(!isset($match[0])){
                  $img = "Blog_files/general_1.jpg";
                }else{
                  $img = $match[0];
                }

                echo '<div class="blog__item">
              <img style="width:150px;height:100px;"src="'.$img.'" alt="..." class="img-responsive blog__img hidden-xs">
              <div class="blog__content">
                <h3 class="blog__title">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Post?id='.$id.'&title='.$title_link.'">'.$title_main.'</a>
                </h3>
                <ul class="blog__info">
                  <li><time datetime="2015-01-30">'.$time.'</time></li>
                  <li><a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Tag/?tag='.$tag.'">'.$tag.'</a></li>
                  <li><a href="#"><i class="fa fa-comments-o"></i> '.Self::countComments($id).'</a></li>
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

                echo '<a href="http://'.$_SERVER["HTTP_HOST"].'/Blog/Post/?title='.str_replace(" ", "-", $name).'&id='.$id.'" class="list-group-item">
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

                echo '<a href="http://'.$_SERVER["HTTP_HOST"].'/Blog/Post/?title='.str_replace(" ", "-", $name).'&id='.$id.'" class="list-group-item">
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

    $sql ="SELECT *, DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time` FROM `celtic_chocolates`.`comments` WHERE `b_id` = $id";
    if($result = mysqli_query($con,$sql)){     
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)){
              $cid = $row['c_id'];
              $time = $row['time'];
              $uid = $row['u_id'];
              $name = Encryption::decrypt($row['name']);
              $review = Encryption::decrypt($row['comment']);
              echo '<div class="comment">
            <div class="comment__author_img">
              <img src="Post_files/avatar.jpg" alt="..." class="img-responsive">
            </div>
            <div class="comment__content">
              <div class="comment__author_name">'.$name.'</div>
              <time datetime="2015-01-30" class="comment__date">'.$time.'</time>
              <ul class="rating_stars">
                '.Self::getRating($cid).'
              </ul>
              <p>
                '.$review.'
              </p>
              '; 
              if(isset($_SESSION["id"]) and $_SESSION["id"] == $uid){ echo'<div class="btn-group pull-right" role="group" aria-label="comment__actions">
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-times remove"></i> Remove</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit edit"></i> Edit</a>
              </div>';
            }
            echo'
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
              <img class="img-responsive" alt="..." src="Post_files/avatar.jpg">
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
                  <textarea class="form-control" rows="2" id="comment" placeholder="Enter your review"></textarea>
                </div>
                <button type="submit" class="btn btn-primary submit">Send Review</button>
              </form>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment__new -->';
    }
    else{
      echo '<br/><strong>Login to Comments: </strong><br/><a href="../../Login/?r='.urlencode($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]).'"><button  type="submit" class="btn btn-primary">Login</button></a>';
    }
  }//end of allowReview()

  public function countComments($id){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

    $sql ="SELECT COUNT(*) as `num` FROM `celtic_chocolates`.`comments` WHERE `b_id` = $id";
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

  public function footerBlogs(){
    $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
                $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time` FROM `celtic_chocolates`.`blog` LIMIT 3";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = strip_tags(substr(stripcslashes($row['content']),0,200));
                $title_main = Encryption::decrypt($row['title']);
                $title_link = str_replace(" ", "-", $title_main); 
                $id = $row['b_id'];
                $tag = $row['tag'];
                $time = $row['time'];
                $match = array();
                $img = preg_match("/data:image(.*)\"/", $row['content'],$match);
                if(!isset($match[0])){
                  $img = "Blog_files/general_1.jpg";
                }else{
                  $img = $match[0];
                }

                echo '<div class="footer__post">
                    <div class="footer-post__img">
                      <img src="'.$img.'" alt="...">
                    </div>
                    <div class="footer-post__content">
                      <p><a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Post?id='.$id.'&title='.$title_link.'">'.$title_main.'</a></p>
                      <time datetime="'.$time.'">'.$time.'</time>
                    </div>
                  </div>';
      }
    }else{
        echo "There are no blogs yet.";
    }

    }else{
        echo  "Something went wrong!";
    }

  }//end of footerBlogs()

}//end of Class



?>