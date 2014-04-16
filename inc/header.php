<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bottle Opener</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />

	<!-- Google Fonts -->

	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>

	<!-- End Google Fonts-->


	<!-- JQuery *Most likely going to remove script, because of multiple pages-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top
		}, 1000);
		return false;
			}
		}
			});
		});
	</script>
	
	<!-- End JQuery -->

</head>