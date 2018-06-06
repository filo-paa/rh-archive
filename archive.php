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
  <title>rh-archive.org</title>
  <body>
	<?php readfile("nav.html") or header("Location: 404.php"); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<h1 class="pt-3">The Archive</h1>
				<p class="lead" >You can find the chords of each available song by clicking on the name of the EP/Album below.</p><hr/>
				<h2 style="text-align:center" class="pb-2">Albums</h2>
			</div>
		</div>
		<div class="row">
			<div style="text-align:center" class="col" ng-app="myApp" ng-controller="trackCtrl">
				<div class="element"  ng-repeat="album in myAlbums" ng-click="toggleMe(album)" >
					<h4 ng-if="album.showme" class="album-title py-2">{{album.title + " (" + album.year +")"}}</h4>
					<ul ng-show="album.toggle" class="list-group-flush px-0 mx-0 py-0">
						<a ng-repeat="track in album.tracks" class="track-link" href='chord-frame.php?filename={{track.link}}'>
						<h4 ng-if="track.show" class="lead list-group-item">{{track.name}}</h4>
						</a>
					</ul>
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<div class="pb-3"></div>
	<?php readfile("footer.html") or header("Location: 404.php"); ?>
<script src="zlibs/js/jquery-3.3.1.min.js"></script>
<script src="zlibs/js/bootstrap.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('trackCtrl', function($scope, $http) {
  $http.get("tracklist.php").then(function (response) {
	  $scope.myAlbums = response.data.albums;
	  //the following finds out if all the tracks are set to show zero, then don't show the album through ng-if album.showme
	  // attribute "show" for each track is in data/json file
	  let aa = $scope.myAlbums; //album array
	  let l = aa.length;
	  for (let i=0; i<l; i++) {
		  let a = aa[i].tracks; //track array of specific album
		  let n = a.length;
		  $scope.myAlbums[i].showme = 0;
		  for (let j=0; j<n; j++) {
			  $scope.myAlbums[i].showme += a[j].show; //add attribute "show" to showme, if all tracks are show=0 then showme will be 0 too
		  }
	  }
	  
  });
  $scope.toggleMe = function(x) {
	x.toggle = !x.toggle;
  }
});
$(document).ready(function(){
	$("#archivenav").addClass("active");
});
</script>
  </body>
</html>
