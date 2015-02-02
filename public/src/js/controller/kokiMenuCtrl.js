angular.module('MyApp')
  .controller('kokiMenuCtrl', ['$scope', 'LxNotificationService', 'LxDialogService', function($scope, LxNotificationService, LxDialogService) {
    $scope.opendDialog = function(dialogId) {
      LxDialogService.open(dialogId);
    };

    $scope.closingDialog = function() {
      LxNotificationService.info('Dialog closed!');
    };
  }])
