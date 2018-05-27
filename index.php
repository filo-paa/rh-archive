<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="zlibs/css/bootstrap.min.css">
	<link rel="stylesheet" href="zlibs/css/main.css">
    <script src="zlibs/js/angular-1.6.9.min.js"></script>
  </head>
  <body>
	<?php readfile("nav.html") or header("Location: 404.html"); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<h1 class="pt-3">Index</h1>
			</div>
		</div>
	</div>
	<div class="pb-3"></div>
	<?php readfile("footer.html") or header("Location: 404.html"); ?>
<script>
var app = angular.module('myApp', []);
app.controller('trackCtrl', function($scope, $http) {
  $http.get("tracklist.php").then(function (response) {
	  $scope.myAlbums = response.data.albums;
  });
  $scope.toggleMe = function(x) {
	x.show = !x.show;
  }
});
</script>
<script src="zlibs/js/jquery-3.3.1.min.js"></script>
<script src="zlibs/js/bootstrap.min.js"></script>
  </body>
</html>
