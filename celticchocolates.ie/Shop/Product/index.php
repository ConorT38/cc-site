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

    <!-- PAGE HEADER
    ============================== -->
    <div class="page__header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="page-header__title">Shop Item</h3>
            <ol class="breadcrumb page-header__breadcrumb">
              <li><a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/index.html">Home</a></li>
              <li><a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shop.html">Shop</a></li>
              <li class="active">Shop Item</li>
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
                <img src="Product_files/product_2.jpg" alt="...">
                <div class="carousel-caption">
                </div>
              </div>
            </div>
          </div> <!-- / .carousel -->
        </div>
        <div class="col-sm-4">
          <h3 class="header header_plain">
            <?php echo Product::get(1,"title");?>
          </h3>
          <ul class="rating_stars">
          <?php
          $num = Product::get(1,"rating");
          for($i = 0; $i<$num-1; $i++){
            echo '<li><i class="fa fa-star"></i></li>';
          } if(is_float($num)){
              echo '<li><i class="fa fa-star-half-o"></i></li>';
            }
            else{
              echo '<li><i class="fa fa-star"></i></li>';
            }
          ?>    
            <li class="rating__comment">(3 reviews)</li>
          </ul>
          <p class="text-muted">
            <?php echo Product::get(1,"description");?>
          </p>
          <ul class="list-group">
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Cras justo odio</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Dapibus ac facilisis in</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Morbi leo risus</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Porta ac consectetur ac</li>
            <li class="list-group-item"><i class="fa fa-check fa-fw text-primary"></i> Vestibulum at eros</li>
          </ul>

          <!-- Add to cart -->
          <div class="product__add-to-cart">
            <form class="form-inline">
              <div class="form-group">
                <label class="sr-only">Price</label>
                <p class="form-control-static"><strong>EU €<?php echo Product::get(1,"price");?> x</strong></p>
              </div>
              <div class="form-group">
                <label for="product__quantity" class="sr-only">Quantity</label>
                <input id="product__quantity" value="1" class="form-control" type="number">
              </div>
              <button type="submit" class="btn btn-default"><i class="fa fa-cart-plus"></i> Add to Cart</button>
            </form>
          </div> <!-- .product__add-to-cart -->
        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-sm-8">
          <!-- New review -->
          <div class="comment comment_new">
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
          </div> <!-- / .comment__new -->

          <!-- Reviews header -->
          <div class="comment__header">
            <span>Latest Reviews</span>
          </div>

          <!-- All comments -->
          <div class="comment">
            <div class="comment__author_img">
              <img src="Product_files/photo_1.jpg" alt="..." class="img-responsive">
            </div>
            <div class="comment__content">
              <div class="comment__author_name">John Doe</div>
              <time datetime="2015-01-30" class="comment__date">February 02, 2015</time>
              <ul class="rating_stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Pellentesque gravida, est non tempus pharetra, erat velit convallis 
diam, quis blandit neque nulla a nulla. Quisque fringilla lacinia erat, 
at maximus erat bibendum quis. Lorem ipsum dolor sit amet, consectetur 
adipiscing elit.
              </p>
              <div class="btn-group pull-right" role="group" aria-label="comment__actions">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i> Remove</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-reply"></i> Answer</a>
              </div>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment -->
          <div class="comment">
            <div class="comment__author_img">
              <img src="Product_files/photo_2.jpg" alt="..." class="img-responsive">
            </div>
            <div class="comment__content">
              <div class="comment__author_name">Judy Doe</div>
              <time datetime="2015-01-30" class="comment__date">February 02, 2015</time>
              <ul class="rating_stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Pellentesque gravida, est non tempus pharetra, erat velit convallis 
diam, quis blandit neque nulla a nulla. Quisque fringilla lacinia erat, 
at maximus erat bibendum quis. Lorem ipsum dolor sit amet, consectetur 
adipiscing elit.
              </p>
              <div class="btn-group pull-right" role="group" aria-label="comment__actions">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i> Remove</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-reply"></i> Answer</a>
              </div>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment -->
          <div class="comment">
            <div class="comment__author_img">
              <img src="Product_files/photo_3.jpg" alt="..." class="img-responsive">
            </div>
            <div class="comment__content">
              <div class="comment__author_name">Richard Roe</div>
              <time datetime="2015-01-30" class="comment__date">February 02, 2015</time>
              <ul class="rating_stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-half-o"></i></li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Pellentesque gravida, est non tempus pharetra, erat velit convallis 
diam, quis blandit neque nulla a nulla. Quisque fringilla lacinia erat, 
at maximus erat bibendum quis. Lorem ipsum dolor sit amet, consectetur 
adipiscing elit.
              </p>
              <div class="btn-group pull-right" role="group" aria-label="comment__actions">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-times"></i> Remove</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-reply"></i> Answer</a>
              </div>
            </div> <!-- / .comment__content -->
          </div> <!-- / .comment -->
        </div>
        <div class="col-sm-4">
          <!-- Recommended & Popular -->
          <h3 class="header header_plain">Top Products</h3>
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active">
              <a href="#shop-tab_recommended" aria-controls="shop-tab_recommended" role="tab" data-toggle="tab">Recommended</a>
            </li>
            <li role="presentation">
              <a href="#shop-tab_popular" aria-controls="shop-tab_popular" role="tab" data-toggle="tab">Popular</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- Recommended -->
            <div role="tabpanel" class="tab-pane active" id="shop-tab_recommended">
              <div class="list-group shop-tab__list">
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_1.jpg" alt="...">
                  <div class="list-group-item__content">
                    Lorem ipsum dolor sit amet
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_2.jpg" alt="...">
                  <div class="list-group-item__content">
                    Cras hendrerit tellus porttitor elementum 
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_3.jpg" alt="...">
                  <div class="list-group-item__content">
                    Sed ultrices euismod hendrerit nunc augue 
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half-o"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_4.jpg" alt="...">
                  <div class="list-group-item__content">
                    Maecenas venenatis sodales sem
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </div>
            </div>
            <!-- Popular -->
            <div role="tabpanel" class="tab-pane" id="shop-tab_popular">
              <div class="list-group shop-tab__list">
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_2.jpg" alt="...">
                  <div class="list-group-item__content">
                    Cras hendrerit tellus porttitor elementum 
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_4.jpg" alt="...">
                  <div class="list-group-item__content">
                    Maecenas venenatis sodales sem
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_1.jpg" alt="...">
                  <div class="list-group-item__content">
                    Lorem ipsum dolor sit amet
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
                <a href="#" class="list-group-item">
                  <img class="img-responsive list-group-item__img" src="Product_files/product_3.jpg" alt="...">
                  <div class="list-group-item__content">
                    Sed ultrices euismod hendrerit nunc augue 
                    <ul class="rating_stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half-o"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </a>
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


  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>