<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/../dev/Blog.php';
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Blogs | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="Blog_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="Blog_files/font-awesome.css" rel="stylesheet">
    <link href="Blog_files/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="Blog_files/css_002.css" rel="stylesheet" type="text/css">
    <link href="Blog_files/css.css" rel="stylesheet" type="text/css">

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


    <?php require_once "../includes/header.php";?>
    <!-- PAGE HEADER
    ============================== -->
    <div class="page__header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="page-header__title">Blog</h3>
            <ol class="breadcrumb page-header__breadcrumb">
              <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Home</a></li>
              <li class="active">Blog</li>
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
           <?php
           Blog::getAllBlogs();
           ?>
          </div> <!-- / .blog__items -->
          <!-- Pager -->
          <ul class="pager pull-right">
            <li class="disabled"><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="col-sm-4 col-md-3">
          <!-- Categories -->
          <h3 class="header header_plain">Categories</h3>
          <div class="list-group">
           <?php Blog::getCategories();?>
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
              <?php Blog::getNew();?>
              </div>
            </div>
            <!-- Popular -->
            <div role="tabpanel" class="tab-pane" id="blog-tab_popular">
              <div class="list-group blog-tab__list">
              <?php Blog::getPopular();?>
              </div>
            </div>
          </div>
        </div> 
      </div> <!-- / .row -->
    </div> <!-- / .container -->
    

   <?php require_once"../includes/footer.php";?>


    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="Blog_files/jquery.js"></script>
    <script src="Blog_files/bootstrap.js"></script>

    <!-- JS Plugins -->
    <script src="Blog_files/scrolltopcontrol.js"></script>
    <script src="Blog_files/wow.js"></script>

    <!-- JS Custom -->
    <script src="Blog_files/custom.js"></script>


  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";
$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
$sql = "SELECT * FROM views WHERE DATE(`uploaded`) = CURDATE()";
if($result = mysqli_query($con,$sql)){
  if (mysqli_num_rows($result) >0) {
    $sql ="UPDATE views set views.views =views.views+1 WHERE DATE(`uploaded`) = CURDATE()";
                  if($result = mysqli_query($con,$sql)){
                    return true;
                  }
                }else{
                    $sql = "INSERT INTO views VALUES(1,NOW())";
                    if($result = mysqli_query($con,$sql)){
                    return true;
                  }else{
                    return false;
                  }
                  }
               }
?>