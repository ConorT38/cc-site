<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../dev/Shop.php";
if(!isset($_GET['category'])){
  $tag = "";
}else{
$tag = $_GET['category'];
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

    <title><?=$tag?> | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="Shop_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="Shop_files/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="Shop_files/animate.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="Shop_files/css.css" rel="stylesheet" type="text/css">
    <link href="Shop_files/css_002.css" rel="stylesheet" type="text/css">

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
<?php require_once "../../includes/header.php";?>
<?php require_once "../../../dev/Shop.php";?>

    <!-- PAGE HEADER
    ============================== -->
    <div class="page__header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="page-header__title">Shop</h3>
            <ol class="breadcrumb page-header__breadcrumb">
              <li><a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/index.html">Home</a></li>
              <li class="active"><?=$tag?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <!-- PAGE CONTENT
    ============================== -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <!-- Categories -->
          <h3 class="header header_plain">Categories</h3>
          <div class="list-group">
          <?php Shop::getCategories();?>
          </div>
          <!-- Recommended & Popular -->
          <h3 class="header header_plain">Top Products</h3>
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active">
              <a href="#shop-tab_recommended" aria-controls="shop-tab_recommended" role="tab" data-toggle="tab">New</a>
            </li>
            <li role="presentation">
              <a href="#shop-tab_popular" aria-controls="shop-tab_popular" role="tab" data-toggle="tab">Popular</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- Recommended -->
            <div role="tabpanel" class="tab-pane active" id="shop-tab_recommended">
              <div class="list-group shop-tab__list">
                  <?php Shop::getNew();?>
              </div>
            </div>
            <!-- Popular -->
            <div role="tabpanel" class="tab-pane" id="shop-tab_popular">
              <div class="list-group shop-tab__list">
            <?php Shop::getPopular();?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-8 col-md-9">
          <div class="row">
            <div class="col-xs-12 visible-xs">
              <div class="h3 header">Products</div>
            </div>
          </div>
          <div class="row">
            <?php
           Shop::getByCategory($tag);
            ?>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
    
<?php require_once "../../includes/footer.php";?>
   


    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="Shop_files/jquery.js"></script>
    <script src="Shop_files/bootstrap.js"></script>

    <!-- JS Plugins -->
    <script src="Shop_files/scrolltopcontrol.js"></script>
    <script src="Shop_files/wow.js"></script>

    <!-- JS Custom -->
    <script src="Shop_files/custom.js"></script>



  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>