     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
 <body ng-controller="controllerName" ng-app="app">
 <form name="val">
            <div>
              <div class="form-group">
                <label for="name" class="sr-only">Enter name</label>
                <input class="form-control" ng-model="name" ng-pattern="reName" id="name" name="name" type="text">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Enter email</label>
                <input class="form-control" ng-model="email" ng-pattern="reEmail" id="email" name="email"  type="email">
                <span ng-show="val.email.$error.pattern || val.email.$error.required" style="color:red">Not a valid Email.</span>
              </div>
                    <div class="form-group">
                      <label for="password" class="sr-only">Enter password</label>
                      <input class="form-control" ng-model="password" ng-pattern="rePassword" name="password" id="password"  type="password">
                      <span ng-show="val.password.$error.pattern || val.password.$error.required" style="color:red">Password must be at least 8 characters long.</span>
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter address</label> 
                      <input class="form-control" ng-model="address" ng-pattern="reAddress" name="address" id="address"  type="text">
                      <span ng-show="val.address.$error.pattern || val.address.$error.required" style="color:red">Not a valid address.</span>
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter city</label>
                      <input class="form-control" ng-model="city" ng-pattern="reCity" name="city" id="city"  type="text">
                      <span ng-show="val.city.$error.pattern || val.city.$error.required" style="color:red">Not a valid City.</span>
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter country</label>
                      <input class="form-control" ng-model="country" ng-pattern="reCountry" name="country" id="country"  type="text">
                      <span ng-show="val.country.$error.pattern || val.country.$error.required" style="color:red">Not a valid country.</span>
              </div>
              <div class="form-group">
                      <label for="password" class="sr-only">Enter phone number</label>
                      <input class="form-control" ng-model="phone" ng-pattern="rePhone" name="phone" id="phone"  type="text">
                      <span ng-show="val.phone.$error.pattern || val.phone.$error.required" style="color:red">Numbers only from 8-20 digits.</span>
              </div>
              <div class="checkbox">
              <button type="submit" id="submit" class="btn btn-primary btn-block btn-lg">Create Account</button>
              </div>
            </form>
             <script>
    var app = angular.module("app", []);
    app.controller('controllerName', ['$scope', function ($scope) {
    $scope.reName = /^[a-zA-Z\' ]{2,20}$/;
    $scope.reEmail = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
    $scope.rePassword = /^[a-zA-Z0-9!@: ]{8,20}$/;
    $scope.reAddress = /^[a-zA-Z0-9\- ]{2,20}$/;
    $scope.reCity = /^[a-zA-Z\- ]{2,20}$/;
    $scope.reCountry = /^[a-zA-Z\- ]{2,20}$/;
    $scope.rePhone = /^[0-9\+ ]{8,20}$/;
    }]);
    </script>
    </body>