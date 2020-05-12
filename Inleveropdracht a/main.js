var app = angular.module('formApp', []);
  app.controller('formCtrl', function($scope)) {
    $scope.voornaam;
    $scope.achternaam;
    $scope.adres;
    $scope.huisnummer;
    $scope.postcode;
    $scope.woonplaats;
    $scope.email;
  }
