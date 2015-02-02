angular.module('MyApp')
.controller('mainCtrl', ['$scope', function ($scope, SidebarService) {
  $scope.SidebarService = SidebarService;

}])