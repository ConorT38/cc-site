 <!-- STATIC TOPBAR
    ============================== -->
    <div class="topbar hidden-xs hidden-sm">
      <div class="container">
        <!-- Social links -->
        <ul class="topbar-nav topbar-nav_left">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-vk"></i></a></li>
          <li><a href="#"><i class="fa fa-stumbleupon"></i></a></li>
        </ul>
        <ul class="topbar-nav topbar-nav_right">
          <li>
            <!-- Search form -->
            <form class="form-inline topbar__search" role="form">
              <label class="sr-only" for="nav-search">Search</label>
              <input class="form-control" id="nav-search" placeholder="Search here..." type="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </li>
          <!-- Account links -->
          <li><a href="http:///<?php echo $_SERVER['SERVER_NAME'];?>/Login">Login</a></li>
          <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Signup">Sign Up</a></li>
          <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Shop/Cart">My Cart (0)</a></li>
        </ul>
      </div> <!-- / .container -->
    </div> <!-- / .topbar -->
    <div class="navbar__hr hidden-xs hidden-sm"></div>


     <!-- STATIC NAVBAR
    ============================== -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- Toggle button -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Brand name -->
          <a class="navbar-brand" href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Celtic Chocolates</a>
        </div>
        <div class="collapse navbar-collapse">
          <!-- Navbar links -->
          <ul class="nav navbar-nav navbar-right">

            <!-- Home -->
            <li class="dropdown">
              <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>" class="dropdown-toggle">
                Home
              </a>
            </li>

            <!-- Blog -->
            <li class="dropdown">
              <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Blog" class="dropdown-toggle">
                Blog
              </a>
            </li>

            <!-- Shop -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Shop <span class="fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Shop/">Shop</a></li>
                <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Shop/Cart/">Shopping Cart</a></li>
              </ul>
            </li>
          </ul>
          <!-- Search form (for collapsed menu only) -->
          <form class="navbar-form navbar-left visible-xs visible-sm" role="search">
            <div class="form-group">
              <label class="sr-only" for="nav-search-xs">Search</label>
              <input class="form-control" id="nav-search-xs" placeholder="Search here..." type="search">
            </div>
          </form>
        </div> <!-- / .navbar-collapse -->
      </div> <!-- / .container -->
    </div> <!-- / .navbar -->
