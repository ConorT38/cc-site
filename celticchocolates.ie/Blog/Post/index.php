<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../dev/Blog.php";
$id = $_REQUEST['id'];
if(!isset($_GET['title'])){
  header("Location: ../../");
}

$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

             $sql ="SELECT *,DATE_FORMAT(`uploaded`,'%D of %M, %Y') as `time` FROM `celtic_chocolates`.`blog` WHERE b_id = $id";
                  if($result = mysqli_query($con,$sql)){
        
        if (mysqli_num_rows($result) >0) {
            while($row = mysqli_fetch_assoc($result)) {
              $title = Encryption::decrypt($row['title']);
              $content = $row['content'];
              $time = $row['time'];
              $tag = $row['tag'];
              }
            }
          }

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/img/favicon.ico">

    <title>Blog | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="Post_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="Post_files/font-awesome.css" rel="stylesheet">
    <link href="Post_files/animate.css" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="Post_files/css.css" rel="stylesheet" type="text/css">
    <link href="Post_files/css_002.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="margin-bottom: 508px;">

    <!-- PRELOADER (uncomment to enable)
    ============================== -->
    <!-- <div class="preloader">
      <img src="img/preloader.gif" alt="Loading..." class="preloader__img">
    </div> -->
<?php require_once"../../includes/header.php";?>
    <!-- PAGE HEADER
    ============================== -->
    <div class="page__header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="page-header__title">Blog Post</h3>
            <ol class="breadcrumb page-header__breadcrumb">
              <li><a href="../../">Home</a></li>
              <li><a href="../">Blog</a></li>
              <li class="active"><?=$title?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <!-- PAGE CONTENT
    ============================== -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-9">
          <div class="blog__items">
            <div class="blog__item">
              <div class="blog__content">
                <h3 class="blog__title">
                  <a href=""><?=$title?></a>
                </h3>
                <ul class="blog__info">
                  <li><time><?=$time?></time></li>
                  <li><a href="#"><?=$tag?></a></li>
                  <li><a href="#"><i class="fa fa-comments-o"></i> 2</a></li>
                </ul>
                <div class="blog__body">
        <?=$content?>
                </div>
              </div>
            </div> <!-- / .blog__item -->
            <hr/>

            <!-- New comment -->
            <?php Blog::allowComment();?>

            <!-- Comments header -->
            <div class="comment__header">
            <div id="result"></div>
              <span>List of Comments</span>
            </div>

            <!-- All comments -->
           <?php Blog::getComments($id);?>

          </div> <!-- / .blog__items -->
        </div>
        <div class="col-sm-4 col-md-3">
          <!-- Categories -->
          <h3 class="header header_plain">Categories</h3>
          <div class="list-group">
           <?=Blog::getCategories()?>
          </div>
          <!-- Recommended & Popular -->
          <h3 class="header header_plain">More Stories</h3>
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active">
              <a href="#blog-tab_recommended" aria-controls="blog-tab_recommended" role="tab" data-toggle="tab">New</a>
            </li>
            <li role="presentation">
              <a href="#blog-tab_popular" aria-controls="blog-tab_popular" role="tab" data-toggle="tab">Popular</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- Recommended -->
            <div role="tabpanel" class="tab-pane active" id="blog-tab_recommended">
              <div class="list-group blog-tab__list">
               <?=Blog::getNew()?>
              </div>
            </div>
            <!-- Popular -->
            <div role="tabpanel" class="tab-pane" id="blog-tab_popular">
              <div class="list-group blog-tab__list">
         <?=Blog::getPopular()?>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
    <?php require_once'../../includes/footer.php';?>

    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="Post_files/jquery.js"></script>
    <script src="Post_files/bootstrap.js"></script>

    <!-- JS Plugins -->
    <script src="Post_files/scrolltopcontrol.js"></script>
    <script src="Post_files/wow.js"></script>

    <!-- JS Custom -->
    <script src="Post_files/custom.js"></script>
<script type="text/javascript">
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
  $(document).ready(function(){
    var rate = 1;
$('#1').click(function(){
  console.log("1");
  rate = 1;
});
$('#2').click(function(){
  console.log("2");
  rate = 2;
});
$('#3').click(function(){
  console.log("3");
  rate = 3;
});
$('#4').click(function(){
  console.log("4");
  rate = 4;
});
$('#5').click(function(){
  console.log("5");
  rate = 5;
});
$('.submit').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Comment.php",
data: {
        'comment':$('#comment').val(),
        'id': getParameterByName('id'),
        'rating': rate
    },
success: function(result){
document.getElementById("result").innerHTML = result;
window.location = window.location.href;
}
});
return false;
});
});
</script>

  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>