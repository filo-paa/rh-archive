<?php
function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$fh = fopen("server.log", "a");

$useragent = $_SERVER ['HTTP_USER_AGENT'];

fwrite($fh,date("Y-m-d H:i:s") . ", index. IP: " . getUserIP() . ", useragent: ".$useragent.'\n');

 fclose($fh);


?>

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
				<h1 class="pt-3">Welcome!</h1>
				<p class="lead">This is an open source project to collect in a very easy and accessible way lots of Radiohead song transcriptions, chords and tabs for guitar. 
				These chords are best for acoustic guitar and mainly refer to Thom Yorke's parts. Please enjoy and share!</p>
				<p class="lead">You can find the chords in <a href="archive.php">The Archive</a>.
				<p class="lead">Please consider making a donation as this site is ads-free, created and mainained by one person (me). Thank you for your support.
				<p class="lead">Fil
			</div>
		</div>
	</div>
	<div class="pb-3"></div>
	<?php readfile("footer.html") or header("Location: 404.php"); ?>
<script src="zlibs/js/jquery-3.3.1.min.js"></script>
<script src="zlibs/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#homenav").addClass("active");
});
</script>
  </body>
</html>
