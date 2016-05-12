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
            <a href="#" class="list-group-item active">
              <span class="badge">14</span> Bootstrap
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">17</span> Coding
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">22</span> Design
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">8</span> Graphics
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">21</span> Mobile
            </a>
            <a href="#" class="list-group-item">
              <span class="badge">10</span> UX Design
            </a>
          </div>
          <!-- Recommended & Popular -->
          <h3 class="header header_plain">More Stories</h3>
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active">
              <a href="#blog-tab_recommended" aria-controls="blog-tab_recommended" role="tab" data-toggle="tab">Recommended</a>
            </li>
            <li role="presentation">
              <a href="#blog-tab_popular" aria-controls="blog-tab_popular" role="tab" data-toggle="tab">Popular</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- Recommended -->
            <div role="tabpanel" class="tab-pane active" id="blog-tab_recommended">
              <div class="list-group blog-tab__list">
                <a href="#" class="list-group-item">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  <time datetime="2015-01-01">January 1, 2015</time>
                </a>
                <a href="#" class="list-group-item">
                  Cras hendrerit tellus porttitor elementum commodo
                  <time datetime="2015-01-02">January 2, 2015</time>
                </a>
                <a href="#" class="list-group-item">
                  Sed ultrices euismod hendrerit. Nunc augue tellus
                  <time datetime="2015-01-03">January 3, 2015</time>
                </a>
                <a href="#" class="list-group-item">
                  Maecenas venenatis sodales sem
                  <time datetime="2015-01-04">January 4, 2015</time>
                </a>
              </div>
            </div>
            <!-- Popular -->
            <div role="tabpanel" class="tab-pane" id="blog-tab_popular">
              <div class="list-group blog-tab__list">
                <a href="#" class="list-group-item">
                  Sed ultrices euismod hendrerit. Nunc augue tellus
                  <time datetime="2015-01-05">January 5, 2015</time>
                </a>
                <a href="#" class="list-group-item">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  <time datetime="2015-01-06">January 6, 2015</time>
                </a>
                <a href="#" class="list-group-item">
                  Maecenas venenatis sodales sem
                  <time datetime="2015-01-07">January 7, 2015</time>
                </a>
                <a href="#" class="list-group-item">
                  Cras hendrerit tellus porttitor elementum commodo
                  <time datetime="2015-01-08">January 8, 2015</time>
                </a>
              </div>
            </div>
          </div>
        </div> 
      </div> <!-- / .row -->
    </div> <!-- / .container -->
    

    <!-- FOOTER
    ============================== -->
    <footer>

      <!-- Footer Top -->
      <div class="footer_top hidden-xs">
        <div class="container">
          <div class="row">

            <!-- Contact Us -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Contact Us</div>
                <div class="footer__content">
                  <p>
                    Do not hesitate to contact us if you have any questions or feature requests:
                  </p><p>
                    Lorem ipsum dolor sit amet,<br>
                    Consectetur adipiscing elit
                  </p><p>
                    Phone: +0 000 000 00 00<br>
                    Fax: +0 000 000 00 00
                  </p><p>
                    Email: <a href="#">support@example.com</a>
                  </p>
                </div>
              </div>
            </div>

            <!-- Recent Tweets -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Recent Tweets</div>
                <div class="footer__content">
                  <div class="footer__tweet">
                    <div class="footer-tweet__icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="footer-tweet__content">
                      <p>
                        <a href="#">@wrapbootstrap</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat.
                      </p>
                      <a href="#">1 hour ago</a>
                    </div>
                  </div>
                  <div class="footer__tweet">
                    <div class="footer-tweet__icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="footer-tweet__content">
                      <p>
                        <a href="#">@wrapbootstrap</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat.
                      </p>
                      <a href="#">1 day ago</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Recent Posts -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Recent Posts</div>
                <div class="footer__content">
                  <div class="footer__post">
                    <div class="footer-post__img">
                      <img src="Blog_files/general_1.jpg" alt="...">
                    </div>
                    <div class="footer-post__content">
                      <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                      <time datetime="2015-01-01">2015/01/01</time>
                    </div>
                  </div>
                  <div class="footer__post">
                    <div class="footer-post__img">
                      <img src="Blog_files/general_2.jpg" alt="...">
                    </div>
                    <div class="footer-post__content">
                      <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                      <time datetime="2015-01-01">2015/01/01</time>
                    </div>
                  </div>
                  <div class="footer__post">
                    <div class="footer-post__img">
                      <img src="Blog_files/general_3.jpg" alt="...">
                    </div>
                    <div class="footer-post__content">
                      <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                      <time datetime="2015-01-01">2015/01/01</time>
                    </div>
                  </div>
                </div>
              </div>            
            </div>

            <!-- Quick Links -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Quick Links</div>
                <div class="footer__content">
                  <ul class="footer__links">
                    <li><a href="#">Donec commodo turpis eget orci</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Aenean rhoncus vel nisi sed</a></li>
                    <li><a href="#">Aenean accumsan volutpat libero</a></li>
                    <li><a href="#">Vestibulum lacinia erat massa</a></li>
                  </ul>
                </div>
              </div>            
            </div>

          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .footer_top -->
      <div class="footer__hr hidden-xs"></div>

      <!-- Footer Bottom -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="footer__copyright">
                Copyright 2015 <a href="http://simpleqode.com/">Simpleqode.com</a>. All Rights Reserved.
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <ul class="footer__social">
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .footer_bottom -->
    </footer>


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