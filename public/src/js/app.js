angular.module('MyApp', ['lumx',
  'ui.bootstrap', 
  'ngRoute',
  ]);

angular.module('MyApp').config(['$routeProvider', '$locationProvider',  function($routeProvider, $locationProvider) {

  $routeProvider
  // route for the home page
    .when('/', {
      templateUrl: 'src/templates/login.html',
      controller: 'loginCtrl'
    })
    // route for the about page
    .when('/about', {
      templateUrl: 'src/templates/about.html',
      controller: 'aboutCtrl'
    })
    .when('/home', {
      templateUrl: 'src/templates/home.html',
      controller: 'mainCtrl'
    })
    .when('/kategori', {
      templateUrl: 'src/templates/kategori.html',
      controller: 'kategoriCtrl'
    })

    $locationProvider.html5Mode(true);

}])
.controller('mainCtrl', ['$scope', function ($scope, SidebarService) {
  $scope.SidebarService = SidebarService;

}]).controller('aboutCtrl', ['$scope', function ($scope) {
  
}])
.controller('loginCtrl', ['$scope', function ($scope) {
  
}])
.controller('kategoriCtrl', ['$scope', function ($scope) {
  
}])