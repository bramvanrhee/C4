var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("database.php")
  .then(function (response) {$scope.names = response.data.records;});
});
