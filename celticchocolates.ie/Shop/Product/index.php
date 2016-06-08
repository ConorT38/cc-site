<?php
$id = $_REQUEST['id'];
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

    <title>Shop | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="Product_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="Product_files/font-awesome.css" rel="stylesheet">
    <link href="Product_files/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="Product_files/css.css" rel="stylesheet" type="text/css">
    <link href="Product_files/css_002.css" rel="stylesheet" type="text/css">

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
    <?php require_once "../../../dev/Product.php";?>
    <?php require_once "../../../dev/Shop.php";?>
    <!-- PAGE HEADER
    ============================== -->
    <div class="page__header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="page-header__title">Shop Item</h3>
            <ol class="breadcrumb page-header__breadcrumb">
              <li><a href="../../">Home</a></li>
              <li><a href="../">Shop</a></li>
              <li class="active"><?=Product::get($id,"title");?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <!-- PAGE CONTENT
    ============================== -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
        <!-- Carousel -->
          <div id="product-item__carousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo Product::get($id,"image");?>" alt="...">
                <div class="carousel-caption">
                </div>
              </div>
            </div>
          </div> <!-- / .carousel -->
        </div>
        <div class="col-sm-4">
          <h3 class="header header_plain">
            <?php echo Product::get($id,"title");?>
          </h3>
          <ul class="rating_stars">
          <?php
          $num = Product::get($id,"rating");
          for($i = 0; $i<$num-1; $i++){
            echo '<li><i class="fa fa-star"></i></li>';
          } if(is_float($num)){
              echo '<li><i class="fa fa-star-half-o"></i></li>';
            }
            else{
              echo '<li><i class="fa fa-star"></i></li>';
            }
          ?>    
            <li class="rating__comment">(<?=Product::countReviews($id)?> reviews)</li>
          </ul>
          <p class="text-muted">
            <?php echo Product::get($id,"description");?>
          </p>
          <ul class="list-group">
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Gluten Free</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Nut Free</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Dairy Free</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Made with love</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Vegan friendly</li>
          </ul>
          <div id="result"></div>
          <!-- Add to cart -->
          <div class="product__add-to-cart">
            <form class="form-inline">
              <div class="form-group">
                <label class="sr-only">Price</label>
                <p class="form-control-static"><strong>EU €<?php echo Product::get($id,"price");?> x</strong></p>
              </div>
              <div class="form-group">
                <label for="quantity" class="sr-only">Quantity</label>
                <input id="quantity" value="1" min="1" class="form-control" type="number">
                <input style="visibility:hidden;" value="<?php echo $id;?>"  id="id"/>
              </div>
              <button type="submit" id="addToCart" class="btn btn-default"><i class="fa fa-cart-plus"></i> Add to Cart</button>
            </form>
          </div> <!-- .product__add-to-cart -->
        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-sm-8">
        <div id="result"></div>
          <!-- New review -->
         <?php Product::allowReview();?>

          <!-- Reviews header -->
          <div class="comment__header">
            <span>Latest Reviews</span>
          </div>

          <!-- All comments -->
          <?php Product::getReviews($id);?>        
        </div>
        <div class="col-sm-4">
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
      </div> <!-- / .row -->
    </div> <!-- / .container -->
    <?php require_once "../../includes/footer.php";?> 
    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="Product_files/jquery.js"></script>
    <script src="Product_files/bootstrap.js"></script>

    <!-- JS Plugins -->
    <script src="Product_files/scrolltopcontrol.js"></script>
    <script src="Product_files/wow.js"></script>

    <!-- JS Custom -->
    <script src="Product_files/custom.js"></script>

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
$('#addToCart').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "addToCart.php",
data: {
        'id':$("#id").val(),
        'quantity':$("#quantity").val()
    },
success: function(result){
document.getElementById("result").innerHTML = result;

}
});
return false;
});

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
url: "review.php",
data: {
        'review':$('#review').val(),
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


    </script>4

  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>