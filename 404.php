<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="zlibs/css/bootstrap.min.css">
	
    <style>
		navbar.a {color: inherit; }
		a.nav-link {
			font-size: 19px;
		}
		.carousel-item {
			transition: transform 0.5s ease, -webkit-transform 0.5s ease;
			-webkit-backface-visibility: visible;
	        backface-visibility: visible;
		}
		.track-link {
			color: black
		}
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  <body>
	<?php readfile("nav.html") or header("Location: index.php"); ?>
	<div class="container-fluid border ">
		<div class="row">
			<div class="col pb-3">
				<h1 class="pt-3">Whoops...</h1>
				<p>Error code 404: not found.
				<p class="lead">This page is not available, yet.<br/>Please go back to the last known page. <br/>Thank you for your patience.</p>
			</div>
		</div>
	</div>
	<?php readfile("footer.html") or header("Location: index.php"); ?>
<script>
var app = angular.module('myApp', []);
app.controller('trackCtrl', function($scope, $http) {
  $http.get("tracklist.php").then(function (response) {
	  $scope.myAlbums = response.data.albums;
	  console.log($scope.myData);
  });
});
</script>
<script src="zlibs/js/jquery-3.3.1.min.js"></script>
<script src="zlibs/js/bootstrap.min.js"></script>
  </body>
</html>
