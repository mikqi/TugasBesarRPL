<!DOCTYPE html>

<html lang="en" ng-app="MyApp">
<head>
  <meta charset="UTF-8">

  <title>My App</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  [[ HTML::style('components/lumx/dist/css/lumx.css') ]] 
  
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
  [[ HTML::script('src/js/app.js') ]]
 </body>
</html>