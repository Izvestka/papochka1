<?php
session_start();

?>
<html>
	<head>
		<title>
			Считает
		</title>
		<meta charset="utf-8" />
		</head>

	<body>
		<h1>
			Король программирования СЧИТАЕТ клац клац
				</h1>
                <img src="images/Capture3.jpg" /> <br /><br />
	<form>
	<input type="submit" value="оп оп клац клац"/>
	</form>
    <?php 
    if (isset($_COOKIE["count"]))
    {
    $x = $_COOKIE["count"]; 
    }
    else 
    {
    $x = -1;
    }
		$x += 1;
		echo "<h2>клацццц $x</h2>";
		//$_SESSION["count"] = $x;
        setcookie("count", $x); 

	?>
	</body>
	<a href="index1.html">Home swet home</a> <br />
</html>