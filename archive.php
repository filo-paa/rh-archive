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
				<h1 class="pt-3">The Archive</h1>
				<p class="lead" >Welcome to this collection of accurate transposition
				of Radiohead songs into guitar (sometimes piano) chords and tabs.
				You'll find the transpositions below.</p><hr/>
				<h2 style="text-align:center" class="pb-2">Albums</h2>
			</div>
		</div>
		<div class="row">
			<div style="text-align:center" class="col" ng-app="myApp" ng-controller="trackCtrl">
				<div class="element"  ng-repeat="album in myAlbums" ng-click="toggleMe(album)" >
					<h4 class="album-title py-2">{{album.title + " (" + album.year +")"}}</h4>
					<ul ng-show="album.show" class="list-group-flush px-0 mx-0 py-0">
						<a ng-repeat="track in album.tracks" class="track-link" href='chord-frame.php?filename={{track.link}}'>
						<h4 class="lead list-group-item">{{track.name}}</h4>
						</a>
					</ul>
					<span></span>
				</div>
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
