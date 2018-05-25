<?php
$filename = $_GET["filename"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="zlibs/css/bootstrap.css">
	
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 justify-content-between">
		<a href="../rh-archive">
			<img class="navbar-brand" height="28px" src="img/rh-logo1.png"/>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active align-middle">
					<a class="nav-link align-bottom" href="#">
					<b>Archive</b></a>
				</li>
				<li class="nav-item"><a class="nav-link" href="#"><b>News</b></a></li>
				<li class="nav-item"><a class="nav-link" href="#"><b>Contacts</b></a></li>
				<li class="nav-item"><a class="nav-link" href="#"><b>Donations</b></a></li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-light my-2 border"><b>Sign-in</b></button>
					<button type="button" class="btn btn-primary my-2"><b>Sign-up</b></button>
				</div>
			</form>
		</div>
	</nav>
	<div class="container-fluid border ">
		<div class="row">
			<div class="col py-1">
			<!--h3>Chords</h3-->	
			</div>
		</div>
		<?php readfile("chords/".$filename) or header("Location: 404.html"); ?>
	</div>
	<footer>
		<div class="container-fluid pt-4 pb-2 bg-dark text-white">
					<p>&copy 2018 <a style="color:white" href="https://github.com/filo-paa">filo-paa</a></p>
		</div>
    </footer>
<script src="zlibs/js/jquery-3.3.1.js"></script>
<script src="zlibs/js/popper.js"></script>
<script src="zlibs/js/bootstrap.js"></script>
<script type="text/javascript" src="transpose.js"></script>
  </body>
</html>
