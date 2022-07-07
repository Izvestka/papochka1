
<html>
	<head>
		<title>
			ООООО КАЛЬКУЛЯТОР ОПЯТЬ
		</title>
		<meta charset="utf-8" />
	<style>
		h1 {
/* comment in css */
			color: darkred;
			background-color: whitesmoke;}
		input, button {
			margin: 6px;
		}
		button {
			width: 77px;
		}
	</style>
	
	<a href="index1.html">Home swet home</a> <br />

	</head>

	<body>
	<img src="images/Capture6.jpg" /> <br /><br />
		<!-- mmmm comment html -->
		<h1 id="hdr1">
			Колькудяторр на пхп омг 
		</h1>
	<?php
	if (isset($_REQUEST["num1"])) {
$x = $_REQUEST["num1"];
$y = $_REQUEST["num2"];
$z = $x + $y;
	}
	else {
$x = ""; $y = ""; $z = "";

	}
	?>
	<form>
		<input type="text" name="num1" value="<?=$x?>"/> <br />
		<input type="text" name="num2" value="<?=$y?>"/> <br />
		<button>+</button>
		<button>-</button><br />
	</form>
		<input type="text" value="<?=$z?>"/>
	</body>
</html>