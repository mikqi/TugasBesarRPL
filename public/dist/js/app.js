angular.module('MyApp', ['ui.bootstrap', 'ngRoute']);

angular.module('MyApp').config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

  $routeProvider
  // route for the home page
    .when('/', {
      templateUrl: 'dist/templates/home.html',
      controller: 'mainCtrl'
    })
    // route for the about page
    .when('/about', {
      templateUrl: 'dist/templates/about.html',
      controller: 'aboutCtrl'
    });

  $locationProvider.html5Mode(true);
}]);
