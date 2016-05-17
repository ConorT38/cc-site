<?php 
session_start();
if(isset($_SESSION['logged_in'])){
  header("Location: ../");
  die();
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

    <title>Login | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="Login_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="Login_files/font-awesome.css" rel="stylesheet">
    <link href="Login_files/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="Login_files/css.css" rel="stylesheet" type="text/css">
    <link href="Login_files/css_002.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="body_plain">

    <!-- PRELOADER (uncomment to enable)
    ============================== -->
    <!-- <div class="preloader">
      <img src="img/preloader.gif" alt="Loading..." class="preloader__img">
    </div> -->


    <!-- PAGE CONTENT
    ============================== -->
    <div class="container">
      <div class="row">
      
        <div class="col-xs-12">
          <div class="body-plain__title">
          <div id="result"></div>
            <h1 class="text-center">Sign In</h1>
          </div>
        </div> 
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
          <div class="body-plain__form">

            <!-- Sign In form -->
            <form role="form">
              <label for="sign-in__email" class="sr-only">Enter email</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" id="email" placeholder="Enter email" type="email">
              </div>
              <br>
              <label for="sign-in__password" class="sr-only">Enter password</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input class="form-control" id="password" placeholder="Password" type="password">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" id="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
            </form>

            <!-- Sign Up link -->
            <hr>
            <p>Not registered? <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/Signup">Create an Account.</a></p>

            <!-- Lost password form -->
            <p>
              Lost your password? <a href="#lost-password__form" data-toggle="collapse" aria-expanded="false" aria-controls="lost-password__form">Click here to recover.</a>
            </p>
            <div class="collapse" id="lost-password__form">
              <p class="text-muted">
                Enter your email address below and we will send you a link to reset your password.
              </p>
              <form class="form-inline" role="form">
                <div class="form-group">
                  <label class="sr-only" for="lost-password__email">Email address</label>
                  <input class="form-control" id="lost-password__email" placeholder="Enter email" type="email">
                </div>
                <button type="submit" class="btn btn-info">Send</button>
              </form>
            </div> <!-- lost-password__form -->
          </div> <!-- / .body-plain__form -->

          <!-- Footer -->
          <div class="body-plain__footer">
            Copyright <?php echo date("Y");?> Celtic Chocolates. All Rights Reserved.<br/><br/>
                 Designed by <a href="http://conorthompson.ie">Conor Thompson</a>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->


    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="Login_files/jquery.js"></script>
    <script src="Login_files/bootstrap.js"></script>

    <!-- JS Plugins -->
    <script src="Login_files/scrolltopcontrol.js"></script>
    <script src="Login_files/wow.js"></script>

    <!-- JS Custom -->
    <script src="Login_files/custom.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
$('#submit').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Login.php",
data: {
        'email':$("#email").val(),
        'password':$("#password").val()
    },
success: function(result){
document.getElementById("result").innerHTML = result;
setTimeout(function(){window.location='http://localhost/';},1800);
}
});
return false;
});
});


</script>


  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>