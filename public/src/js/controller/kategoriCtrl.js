angular.module('MyApp')
.controller('kategoriCtrl', ['$scope', '$firebase', function ($scope, $firebase) {
  var ref = new Firebase('https://rpl1.firebaseio.com/meja');

  var objek = $firebase(ref);

  var data = objek.$asObject();

  window.objek = data;

  $scope.meja = data;

  $scope.reserve = function (id) {
    objek.$update({id : {'class': 'btn--green'}});
  }
}])