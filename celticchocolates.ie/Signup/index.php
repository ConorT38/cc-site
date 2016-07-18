<?php 
if(isset($_SESSION['logged_in'])){
  header("Location: ../");
  die();
 }
 if(isset($_SESSION['admin'])){
  header("Location: http://".$_SERVER['HTTP_HOST']."/Admin/");
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

    <title>Sign Up | Celtic Chocolates</title>

    <!-- CSS Global -->
    <link href="Signup_files/styles.css" rel="stylesheet">

    <!-- CSS Plugins -->
    <link href="Signup_files/font-awesome.css" rel="stylesheet">
    <link href="Signup_files/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="Signup_files/css.css" rel="stylesheet" type="text/css">
    <link href="Signup_files/css_002.css" rel="stylesheet" type="text/css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="body_plain" ng-controller="controllerName" ng-app="app">

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
            <h1 class="text-center">Sign Up</h1>
          </div>
        </div> 
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
          <div class="body-plain__form">

            <!-- Sign Up form -->
            <ng-form name="val">
            <div>
              <div class="form-group">
                <label for="name" class="sr-only">Enter name</label>
                <input class="form-control" ng-model="name" ng-pattern="reName" id="name" placeholder="Your name" type="text">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Enter email</label>
                <input class="form-control" ng-model="email" ng-pattern="reEmail" id="email" placeholder="Enter email" type="email">
              </div>
                    <div class="form-group">
                      <label for="password" class="sr-only">Enter password</label>
                      <input class="form-control" ng-model="password" ng-pattern="rePassword" id="password" placeholder="Password" type="password">
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter address</label>
                      <input class="form-control" ng-model="address" ng-pattern="reAddress" id="address" placeholder="Address" type="text">
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter city</label>
                      <input class="form-control" ng-model="city" ng-pattern="reCity" id="city" placeholder="City" type="text">
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter country</label>
                      <input class="form-control" ng-model="country" ng-pattern="reCountry" id="country" placeholder="Country" type="text">
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter phone number</label>
                      <input class="form-control" ng-model="phone" ng-pattern="rePhone" id="phone" placeholder="Phone Number" type="text" required>
                      <span ng-show="val.phone.$error.pattern || val.phone.$error.required" style="color:red">Numbers only from 8-20 digits.</span>
              </div>
              <div class="checkbox">
              <button type="submit" id="submit" class="btn btn-primary btn-block btn-lg">Create Account</button>
              </div>
            </ng-form>

            <!-- Sign In link -->
            <hr>
            <p>Already a member? <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/Login">Sign into your account.</a></p>
          </div> <!-- / .body-plain__form -->

          <!-- Footer -->
          <div class="body-plain__footer">
             Copyright <?php echo date("Y");?> Celtic Chocolates.<br/><br/>
                 Designed by <a href="http://conorthompson.ie">Conor Thompson</a>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->


    <!-- Javascript
    ============================== -->

    <!-- JS Global -->
    <script src="Signup_files/jquery.js"></script>
    <script src="Signup_files/bootstrap.js"></script>

    <!-- JS Plugins -->
    <script src="Signup_files/scrolltopcontrol.js"></script>
    <script src="Signup_files/wow.js"></script>

    <!-- JS Custom -->
    <script src="Signup_files/custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
   <script type="text/javascript">
$(document).ready(function(){
$('#submit').click(function(){
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "Signup.php",
data: {
        'name':$("#name").val(),
        'email':$("#email").val(),
        'password':$("#password").val(),
        'address':$("#address").val(),
        'city':$("#city").val(),
        'country':$("#country").val(),
        'phone':$("#phone").val()
    },
success: function(result){
document.getElementById("result").innerHTML = result;
$("#name").val("");
$("#email").val("");
$("#password").val("");
$("#address").val("");
$("#city").val("");
$("#country").val("");
$("#phone").val("");

setInterval(function(){window.location='http://localhost/Login';},1000);
}
});
return false;
});
});


</script>
   <script>
    var app = angular.module("app", []);
    app.controller('controllerName', ['$scope', function ($scope) {
    $scope.reName = /^[a-zA-Z\' ]{2,20}$/;
    $scope.reEmail = /^[a-zA-Z ]{2,20}$/;
    $scope.rePassword = /^[a-zA-Z0-9 ]{2,20}$/;
    $scope.reAddress = /^[a-zA-Z ]{2,20}$/;
    $scope.reCity = /^[a-zA-Z ]{2,20}$/;
    $scope.reCountry = /^[a-zA-Z ]{2,20}$/;
    $scope.rePhone = /^[0-9 ]{8,20}$/;
    }]);
    </script>


  
<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><i class="fa fa-angle-up scroll-to-top"></i></div></body></html>