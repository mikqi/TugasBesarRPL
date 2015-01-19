angular.module('MyApp', ['lumx',
  'ui.bootstrap', 
  'ngRoute'
  ]);

angular.module('MyApp').config(['$routeProvider', '$locationProvider',  function($routeProvider, $locationProvider) {

  $routeProvider
  // route for the home page
    .when('/', {
      templateUrl: 'src/templates/home.html',
      controller: 'mainCtrl'
    })
    // route for the about page
    .when('/about', {
      templateUrl: 'src/templates/about.html',
      controller: 'aboutCtrl'
    });

    $locationProvider.html5Mode(true);

}])
.controller('mainCtrl', ['$scope', function ($scope) {
  
}]).controller('aboutCtrl', ['$scope', function ($scope) {
  
}])
