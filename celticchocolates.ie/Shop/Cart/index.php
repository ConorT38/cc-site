<!DOCTYPE html>
<!-- saved from url=(0072)http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shopping-cart.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/img/favicon.ico">

    <title>Cart | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="cart_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="cart_files/font-awesome.min.css" rel="stylesheet">
    <link href="cart_files/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="cart_files/css" rel="stylesheet" type="text/css">
    <link href="cart_files/css(1)" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="margin-bottom: 505px;">

    <!-- PRELOADER (uncomment to enable)
    ============================== -->
    <!-- <div class="preloader">
      <img src="img/preloader.gif" alt="Loading..." class="preloader__img">
    </div> -->

   <?php require_once "../../includes/header.php";?>
   <?php require_once $_SERVER['DOCUMENT_ROOT']."/../dev/Cart.php";?>


    <!-- PAGE HEADER
    ============================== -->
    <div class="page__header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="page-header__title">Shopping Cart</h3>
            <ol class="breadcrumb page-header__breadcrumb">
              <li><a href="../../">Home</a></li>
              <li><a href="../">Shop</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <!-- PAGE CONTENT
    ============================== -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="header">Items in your shopping cart</h3>
          <p class="text-muted">Please check the information below and click CHECKOUT to proceed with your purchase:</p>
          <div class="table-responsive shopping-cart__table">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Ship</th>
                  <th>QTY</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php getContents();?>
               
              </tbody>
            </table>
          </div> <!-- / .table-responsive -->

          <!-- Subtotal -->
          <p class="text-right">
            <strong>Subtotal:</strong> $150.00 <a href="http://simpleqode.com/preview/beatrix/1.0.1/blue-grey/shopping-cart.html#" class="btn btn-primary">Checkout</a>
          </p>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

 <?php require_once "../../includes/footer.php";?>


    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="./cart_files/jquery.min.js"></script>
    <script src="./cart_files/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="./cart_files/scrolltopcontrol.js"></script>
    <script src="./cart_files/wow.min.js"></script>

    <!-- JS Custom -->
    <script src="./cart_files/custom.js"></script>


  
<div id="topcontrol" title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>