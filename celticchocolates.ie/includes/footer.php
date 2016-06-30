<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../dev/Blog.php";
?> <!-- FOOTER
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
                    Please contact us on any queries you may have regarding our products:
                  </p><p>
                   We will return your message as soon as possible,<br>
                    Our information:
                  </p><p>
                    Phone:  +353 46 955 7077<br>
                  </p><p>
                    Email: <a href="mailto: info@celticchocolates.eu">info@celticchocolates.eu</a>
                  </p>
                </div>
              </div>
            </div>

            <!-- Recent Tweets -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Nut Policy</div>
                <div class="footer__content">
                  <div class="footer__tweet">
                    <div class="footer-tweet__content">
                      <p>
                       We do not use nuts in the factory and none of our ingredients contain nuts.</br><br/>
We prohibit staff from consuming nuts in the canteen or bringing nuts on site and conduct spot checks to ensure this rule is adhered to.<br/> 
                      </p>
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
                <?=Blog::footerBlogs();?>
                </div>
              </div>            
            </div>

            <!-- Quick Links -->
            <div class="col-xs-12 col-sm-3">
              <div class="footer__item">
                <div class="footer__title">Quick Links</div>
                <div class="footer__content">
                  <ul class="footer__links">
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Home</a></li>
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Shop">Shop</a></li>
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Shop/Cart">Cart</a></li>
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/Blog">Blog</a></li>
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
                 Copyright <?php echo date("Y");?> Celtic Chocolates. All Rights Reserved.<br/><br/>
                 Designed by <a href="http://conorthompson.ie">Conor Thompson</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <ul class="footer__social">
                <li class="twitter"><img src="img/BRC.png" height="85"/></li>
                <li class="facebook"><img src="img/2.jpg" height="85"/></li>
                <li class="linkedin"><img src="img/3.jpg" height="85"/></li>
                <li class="google-plus"><img src="img/4.jpg" height="85"/></li>
                <li class="pinterest"><img src="img/5.jpg" height="85" width="40"/></li>
              </ul>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .footer_bottom -->
    </footer>