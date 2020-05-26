var app = angular.module('autoApp', []);
app.controller('autoCtrl', function($scope) {
  $scope.autos = [
    {kenteken:'04-vst-vt',kleur:'mat zwart',merk:'audi',aantaldeuren:'5',prijs:'71000'},
    {kenteken:'04-vt-23',kleur:'Geel',merk:'mercedes',aantaldeuren:'4',prijs:'32000'},
    {kenteken:'06-fd-tt',kleur:'grijs',merk:'volkswagen',aantaldeuren:'3',prijs:'21000'},
    {kenteken:'32-vc-aa',kleur:'zwart',merk:'kia',aantaldeuren:'3',prijs:'12000'},
    {kenteken:'10-da-45',kleur:'rood',merk:'ferrari',aantaldeuren:'2',prijs:'100500'}
    ];

    $scope.orderByMe = function(auto) {
        $scope.myOrderBy = auto;
    }
});
