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

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%H:%i') as `time` FROM `celtic_chocolates`.`blog`";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {

                $content = stripcslashes($row['content']);
                $title_main = Encryption::decrypt($row['title']);
                $title_link = str_replace(" ", "-", $title_main);	
                $id = $row['b_id'];

                echo '<div class="blog__item">
              <img src="img/general_1.jpg" alt="..." class="img-responsive blog__img hidden-xs">
              <div class="blog__content">
                <h3 class="blog__title">
                  <a href="http://'.$_SERVER["SERVER_NAME"].'/Blog/Post?id='.$id.'&title='.$title_link.'">'.$title_main.'</a>
                </h3>
                <ul class="blog__info">
                  <li><time datetime="2015-01-30">'.$time.'</time></li>
                  <li><a href="#">Bootstrap</a></li>
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

             $sql ="SELECT *
             FROM `celtic_chocolates`.`blog`
             ORDER BY uploaded DESC
             LIMIT 5";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
            $name = $row['title'];
              $id = $row['b_id'];
              $time = $row['uploaded'];

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

             $sql ="SELECT *
             FROM `celtic_chocolates`.`blog`
             ORDER BY views DESC
             LIMIT 5";
      if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $name = $row['title'];
              $id = $row['b_id'];
              $time = $row['uploaded'];

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
}



?>