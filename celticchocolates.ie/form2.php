     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<form name="form" ng-app="app" ng-controller="MainCtrl">
    <input name="title" ng-model="widget.title" required ng-pattern="/^[A-Z]{4}\d{6}[A-Z\d]{3}$/i" />
    <input name="title2" ng-model="widget.title2" required />
    
    <p>
        Data: {{widget}}<br />
        Error 1: {{form.title.$error}}<br />
        Error 2: {{form.title2.$error}}<br />
    </p>

    <script>
angular.module('app', [])
    .controller('MainCtrl', function($scope) {
        $scope.widget = {title: 'abc', title2: 'abc'};
    });
    </script>
    ng-disabled="val.phone.$error.pattern || val.phone.$error.required || val.city.$error.pattern || val.city.$error.required || val.country.$error.pattern || val.country.$error.required || val.address.$error.pattern || val.address.$error.required || val.password.$error.pattern || val.password.$error.required || val.name.$error.pattern || val.name.$error.required"