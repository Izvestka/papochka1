<?php
session_start();
// или (!isset ($_SESSION["user"]) == FALSE)
if (!isset ($_SESSION["user"]))
{  echo '<meta http-equiv="refresh" content = "1; url=login.php" />' ;
	die("GO AWAY BICHHH, LOGIN!");
	
}

?>

<html>
	<head>
		<title>
			ООООО КАЛЬКУЛЯТОР
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
	<script>
		function plus() {
		var x, y, z;
		x = parseInt(document.getElementById("num1").value);
		y = parseInt(document.getElementById("num2").value);	
		z = x + y;
		document.getElementById("num3").value = z;
		}
	</script>
	<a href="index1.html">Home swet home</a> <br />

	</head>

	<body>
	<img src="images/Capture4.jpg" /> <br /><br />
		<!-- mmmm comment html -->
		<h1 id="hdr1">
			Колькудяторр
		</h1>
		<input type="text" id="num1"/> <br />
		<input type="text" id="num2" /> <br />
		<button onclick="plus();">+</button>
		<button onclick="minus();">-</button><br />
		<input type="text" id="num3" />
	</body>
</html>