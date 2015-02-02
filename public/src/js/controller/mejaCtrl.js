angular.module('MyApp')
  .controller('mejaCtrl', ['$scope', '$firebase', function ($scope, $firebase) {
  var ref = new Firebase('https://rpl1.firebaseio.com/meja');

  var objek = $firebase(ref);

  var data = objek.$asArray();

  window.objek = data;

  $scope.change = function (id) {
    console.log(id)
    if(id.class === "bgc-red-500"){
      data[parseInt(id.noMeja) - 1].class = 'bgc-green-500';

      data.$save(parseInt(id.noMeja) - 1).then(function ( ref) {
          ref.key() === data[parseInt(id.noMeja) - 1].$id;
      })
      console.log('sama')
    }else{
      data[parseInt(id.noMeja) - 1].class = 'bgc-red-500';

      data.$save(parseInt(id.noMeja) - 1).then(function ( ref) {
          ref.key() === data[parseInt(id.noMeja) - 1].$id;
      })
      console.log('beda')
    }
  }
  $scope.addMeja = function () {
    objek.$push({
      'noMeja' : $scope.no,
      'class' : $scope.klass 
    })

    console.log({'noMeja' : $scope.no,
      'class' : $scope.klass})
  }

  $scope.meja = data;

  $scope.reserve = function (id) {
    objek.$update({id : {'class': 'btn--green'}});
  }
}])