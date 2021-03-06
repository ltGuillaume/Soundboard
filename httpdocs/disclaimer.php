<?php
$ext = '.svg';
if (strpos($_SERVER['HTTP_USER_AGENT'], 'it/533', 50))
	$ext = '.png';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Soundboard - Disclaimer</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);

		body {
			margin: 10px;
			background: #1c1f24;
			font-family: 'Open Sans', Helvetica, sans-serif;
			font-size: 16px;
			color: #fff;
		}

		a { color: darkgrey }

		div {
			padding: 10px 36px;
			background: none no-repeat left center;
		}

		h2 { font-size: 22px }
	</style>
</head>
<body>
	<h2>Soundboard Speaker Client</h2>
	<a href="soundboard-client.exe">Download de speaker client voor op de muziek-PC</a>
	<h2>Soundboard Disclaimer</h2>
	<div style="background-image: url('images/switch-off<?=$ext?>')">Icon made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div style="background-image: url('images/switch-on<?=$ext?>')">Icon made by <a href="http://fontawesome.io" title="Dave Gandy">Dave Gandy</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div style="background-image: url('images/record<?=$ext?>')">Icon made by <a href="http://www.simpleicon.com" title="SimpleIcon">SimpleIcon</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div style="background-image: url('images/refresh<?=$ext?>')">Icon made by <a href="http://www.icons8.com" title="Icons8">Icons8</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
	<div style="background-image: url('images/playing<?=$ext?>');background-position: 5px center;">Icon made by <a href="http://appzgear.com" title="Appzgear">Appzgear</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
</body>
</html>