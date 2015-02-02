<!DOCTYPE html>

<html lang="en" ng-app="MyApp">
<head>
  <meta charset="UTF-8">

  <title>My App</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  [[ HTML::style('components/lumx/dist/css/lumx.css') ]] 
  
  [[ HTML::style('src/css/components.css') ]] 
  [[ HTML::style('components/font-awesome/font-awesome.css') ]] 

  <base href="[[ URL::to('/') . '/' ]]">
</head>

<body>
	
	<div ng-view></div>

  [[ HTML::script('components/jquery/dist/jquery.js') ]] 
  [[ HTML::script('components/velocity/velocity.js') ]] 
  [[ HTML::script('components/moment/min/moment-with-locales.min.js') ]] 
  
  [[ HTML::script('components/angular/angular.js') ]] 
  [[ HTML::script('components/lumx/dist/js/lumx.js') ]] 
  [[ HTML::script('components/angular-route/angular-route.js') ]] 
  [[ HTML::script('components/angular-bootstrap/ui-bootstrap-tpls.min.js') ]] 
  <!-- Firebase -->
  <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
  <!-- AngularFire -->
  <script src="https://cdn.firebase.com/libs/angularfire/0.9.1/angularfire.min.js"></script>
  [[ HTML::script('src/js/app.js') ]]
  [[ HTML::script('src/js/controller/loginCtrl.js')]]
  [[ HTML::script('src/js/controller/aboutCtrl.js')]]
  [[ HTML::script('src/js/controller/mainCtrl.js')]]
  [[ HTML::script('src/js/controller/kategoriCtrl.js')]]
  [[ HTML::script('src/js/controller/kokiMenuCtrl.js')]]
  [[ HTML::script('src/js/controller/listPesananKokiCtrl.js')]]
  [[ HTML::script('src/js/controller/detailPesananKokiCtrl.js')]]
  [[ HTML::script('src/js/controller/allMenuCtrl.js')]]
  [[ HTML::script('src/js/controller/mejaCtrl.js')]]
  [[ HTML::script('src/js/controller/listPesananPelayanCtrl.js')]]
  [[ HTML::script('src/js/controller/detailPesananPelayanCtrl.js')]]
  [[ HTML::script('src/js/controller/listPesananKasirCtrl.js')]]
  [[ HTML::script('src/js/controller/detailPesananKasirCtrl.js')]]
  [[ HTML::script('src/js/controller/pegawaiCtrl.js')]]
  [[ HTML::script('src/js/controller/editBahanCtrl.js')]]
  [[ HTML::script('src/js/controller/pertanyaanCtrl.js')]]
  [[ HTML::script('src/js/classie.js') ]]
  [[ HTML::script('src/js/gnmenu.js') ]]
  <!-- [[ HTML::script('src/js/script.js') ]] -->

 </body>
</html>