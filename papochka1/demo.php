<html>
	<head>
		<title>
			PHP
		</title>
		<meta charset="utf-8" />
		</head>

	<body>
		<h1>
			Hello PHP 
				</h1>
	<?php 

		$x = 2;
		$y = 2;
		$z = $x + $y;
		echo "<h2>Результат вычисления $z</h2>";
		date_default_timezone_set("Europe/Moscow");
		$now = date("H:i:s");
		echo "<h3> TIMEE page loaded $now</h3>";

	?>
	<form action="doubler.php">
	<input name="num1"/>
	<input name="num2"/>
		<button>СКЛАДЫВАНИЕ</button>
	</form>
	</body>
	<a href="index1.html">Home swet home</a> <br />
</html>