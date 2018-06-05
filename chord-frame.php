<?php
$filename = $_GET["filename"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="zlibs/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="zlibs/css/main.css"/>
		<script src="zlibs/js/angular-1.6.9.min.js"></script>
	</head>
	<body>
		<?php readfile("nav.html") or header("Location: 404.php"); ?>
		<?php readfile("chords/".$filename) or header("Location: 404.php"); ?>
		<?php readfile("footer.html") or header("Location: 404.php"); ?>
		<script type="text/javascript" src="zlibs/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="zlibs/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="zlibs/js/rh-transpose.js"></script>
	</body>
</html>
