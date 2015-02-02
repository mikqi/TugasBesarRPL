angular.module('MyApp')
  .controller('detailPesananPelayanCtrl',['$scope', 'LxNotificationService', 'LxDialogService', function($scope, LxNotificationService, LxDialogService) {
    $scope.opendDialog = function(dialogId) {
      LxDialogService.open(dialogId);
    };

    $scope.closingDialog = function() {
      LxNotificationService.info('Detail closed!');
    };
  }])