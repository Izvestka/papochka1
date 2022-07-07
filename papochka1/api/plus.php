<?php
	
$x = $_REQUEST["num1"];
$y = $_REQUEST["num2"];
$z = $x + $y;

sleep(3); // симуляция лага
echo $z;